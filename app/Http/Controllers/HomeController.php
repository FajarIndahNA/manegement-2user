<?php

namespace App\Http\Controllers;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        // Halaman untuk admin
        return view('admin'); // Sesuaikan dengan view untuk admin
    }
}
