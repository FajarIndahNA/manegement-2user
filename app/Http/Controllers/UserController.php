<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
// use Yajra\DataTables\DataTables; 
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    //
    public function index()
    {
        return view('users.index');
    }

    public function data()
    {
        $user = User::orderBy('id', 'desc')->get();
        return datatables()
            ->of($user)
            ->addIndexColumn()
            ->addColumn('level', function ($user) {
                $badgeClass = $user->level == 'super_admin' ? 'badge-warning' : 'badge-success';
                $badgeText = $user->level == 'super_admin' ? 'Super Admin' : 'Admin';
                // return '<span class="badge badge-pill ' . $badgeClass . '">' . $badgeText . '</span>';
                // Mengatur warna latar belakang (background-color) dan teks dalam satu elemen span
                return '<span class="badge badge-pill ' . $badgeClass . ' p-2" style="background-color: ' . ($user->level == 'super_admin' ? ' #007bff' : '#28a745') . ';">' . $badgeText . '</span>';
            })
            ->addColumn('aksi', function ($user) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('user.update', $user->id) .'`)" class="btn btn-xs btn-flat"><i class="fa-regular fa-pen-to-square"></i></i></button>
                    <button type="button" onclick="deleteData(`'. route('user.destroy', $user->id) .'`)" class="btn btn-xs btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi','level'])
            ->make(true);
    }

    public function create()
    {
        //
    }

     //untuk menambah data, dan menampilkan
     public function store(Request $request)
     {
         $user = new User();
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => [
                 'required',
                 'email',
                 'unique:users,email',
                 function ($attribute, $value, $fail) {
                     if (!in_array(substr(strrchr($value, "@"), 1), ['gmail.com', 'yahoo.com'])) {
                         $fail($attribute.' harus menggunakan domain seperti @gmail.com atau @yahoo.com');
                     }
                 }
             ],
             'password' => 'required|string|min:6',
             'level' => 'required|string:super_admin,admin' 
         ]);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);
         // $user->level = 0 ;
         $user->level = $request->level;
         $user->save();
 
         return response()->json('Data berhasil disimpan', 200);
     }

     public function show($id)
     {
         $user = User::find($id);
 
         return response()->json($user);
     }

     public function update(Request $request, $id)
     {   
         // Validasi data yang diterima dari form
         $request->validate([
             // 'name' => 'required|string|max:255',
             'email' => [
                 'required',
                 'email',
                 // 'unique:users,email,'.$id,
                 function ($attribute, $value, $fail) {
                     if (!in_array(substr(strrchr($value, "@"), 1), ['gmail.com', 'yahoo.com'])) {
                         $fail($attribute.' harus menggunakan domain seperti @gmail.com atau @yahoo.com');
                     }
                 }
             ],
             // 'password' => 'nullable|string|min:6',
            //  'level' => 'required|in:0,1'
            'level' => 'required|string:super_admin,admin' 
         ]);
         $user = User::find($id);
        
         $user->name = $request->name;
         $user->email = $request->email;
         if ($request->has('password') && $request->password != "") 
             $user->password = bcrypt($request->password);
         $user->level = $request->level;
         $user->update();
 
         return response()->json('Data berhasil disimpan', 200);
     }
 
     
     public function destroy($id)
     {
         $user = User::find($id)->delete();
 
         return response(null, 204);
     }
}
