<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::all();
        return view('content.index', compact('contents'));
    }


    public function create() {
        return view('content.form');
    }

}
