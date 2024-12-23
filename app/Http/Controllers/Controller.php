<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Yajra\DataTables\DataTables; 
use Yajra\DataTables\Facades\DataTables;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
