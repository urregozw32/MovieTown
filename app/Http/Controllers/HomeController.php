<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->getIsStaff()) {
                return redirect()->route('admin.home');
            }
        }
        $data = [];
        $recommended = Movie::findRelated($request);
        $data["recommended_movies"] = $recommended;
        return view('home.index', ['data' => $data]);
    }

    public function home(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->getIsStaff()) {
                $data = [];
                $recommended = Movie::findRelated($request);
                $data["recommended_movies"] = $recommended;
                return view('home.index', ['data' => $data]);
            }
        }
        return redirect()->route('home.index');
    }
}
