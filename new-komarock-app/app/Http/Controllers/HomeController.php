<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            return view('user.home');
        }

    }

    public function index()
    {

        return view('user.home');
    }
}
