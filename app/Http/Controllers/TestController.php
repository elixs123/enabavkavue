<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Document;
use App\Models\Permission;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    public function index(){
        return view('home');
    }
}
