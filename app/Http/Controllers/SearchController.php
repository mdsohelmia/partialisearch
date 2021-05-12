<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request  $request)
    {
    return view('master');
    }

    public function search(Request  $request){
        $users = [];
        if($request->input('query')){
            $users = User::where('name','like',"%{$request->input('query')}%")->get();
        }
        return view('partisal/search-partials',compact('users'));
    }
}
