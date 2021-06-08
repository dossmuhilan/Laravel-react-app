<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use DB;

class listController extends Controller
{
    public function index()
    {
        $news = News::all();
        // dd($news);
        return response()->json($news);
    }

    public function getArticleDetail($id)
    {
        // dd($id);
        $news = News::where('id', $id)->get();
        return response()->json($news);
    }

    public function getNewsByType($type)
    {
        // dd($type);
        $news = News::where('type', $type)->get();
        return response()->json($news);
    }
}
