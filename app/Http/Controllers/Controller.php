<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Homepage;
use App\Models\Page;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $hp = Homepage::first();
        return view('pages.home', compact('hp'));
    }

    public function contact()
    {
        $hp = Homepage::first();
        return view('pages.home', compact('hp'));
    }

    public function page($slug)
    {
        $hp = Page::first($slug);
        return view('pages.home', compact('hp'));
    }
}
