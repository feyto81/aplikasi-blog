<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Artikel;


class FrontController extends Controller
{
    public function index()
    {
    	$category = Category::all();
    	$artikel = Artikel::latest()->get()->random(2);
    	$artikelall = Artikel::latest()->get();
    	$artikelterkait = Artikel::latest()->limit(4)->get();
    	return view('front',compact('category','artikel','artikelall','artikelterkait'));
    }

    public function show(Artikel $artikel)
    {
		$artikel_detail = $artikel;
		$artikelterkait = Artikel::latest()->get()->random(3);
    	$category = Category::withCount('Artikel')->get();
    	return view('front.artikel_detail',compact('artikel_detail','category','artikelterkait'));
    }

    public function artikel_kategori(Category $kategori)
    {
    	$category = Category::all();
    	$artikel = Artikel::latest()->get()->random(2);
    	$artikelall = $kategori->Artikel()->get();
    	$artikelterkait = Artikel::latest()->limit(4)->get();
    	return view('front',compact('category','artikel','artikelall','artikelterkait'));
	}
	
	public function about()
	{
		$category = Category::all();
		return view('front.about',compact('category'));
	}

	public function contact()
	{
		$category = Category::all();
		return view('front.contact',compact('category'));
	}

}
