<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Page;
use View;

class PageController extends Controller
{
    public function show($slug = 'home')
    {
        $page = Page::where('slug', $slug)->first();
        $data = [
        			'page'=> $page
        		];
        return View::make('pages.index',$data);
    }
}