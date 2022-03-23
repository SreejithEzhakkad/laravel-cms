<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a hope page with all pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::whereNull('parent')->with('childrens')->orderby('title', 'asc')->get();
        return view('home',compact('pages'));
    }
}
