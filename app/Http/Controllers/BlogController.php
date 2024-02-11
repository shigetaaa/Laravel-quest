<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
  /**
   * Display a listing of the blogs.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $blogs = Blog::all();

    return view('welcome', compact('blogs'));
  }
}
