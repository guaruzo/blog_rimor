<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class PageController extends Controller
{
    public function blog(){
		$us=User::all;
		
    	return view ('web.posts', compact("us"));
    }
}
