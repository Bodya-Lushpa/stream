<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $posts_count = Client::all()->count();

        return view('admin.home.index',[
            'posts_count' => $posts_count
        ]);
    }
}
