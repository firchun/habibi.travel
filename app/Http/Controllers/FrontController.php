<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Galeri;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'slider' => Galeri::where('type', 'slider')->latest()->get(),
            'galeri' => Galeri::latest()->limit(7)->get(),
            'discover' => Galeri::where('type', 'discover')->latest()->limit(3)->get(),
            'about_image' => Galeri::where('type', 'about')->latest()->first(),
            'teams' => Team::all(),
            'promo' => Article::where('category', 'Promo')->latest()->first(),
            'article' => Article::latest()->limit(3)->get(),
            'services' => Service::latest()->get(),
            'setting' => Setting::first(),
        ];
        return view('pages.home', $data);
    }
    public function article()
    {
        $data = [
            'title' => 'Hot Article',
            'article' => Article::latest()->paginate(10),
            'setting' => Setting::first(),
        ];
        return view('pages.article.article', $data);
    }
    public function show_article($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $data = [
            'title' => $article->title,
            'article' => $article,
            'setting' => Setting::first(),
        ];
        return view('pages.article.show', $data);
    }
}
