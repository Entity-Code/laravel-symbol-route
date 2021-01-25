<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function showHome() {
        return view("/pages.home");
    }
    public function showBlog() {
        return view("/pages.blog");
    }
    public function showAbout() {
        return view("/pages.about");
    }
}
 