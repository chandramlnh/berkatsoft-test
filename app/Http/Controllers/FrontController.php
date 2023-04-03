<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Category;

class FrontController extends Controller
{
    private $base = "https://api.themoviedb.org/3/";
    private $apiKey = "5577767636bd1c343aa11041f94007ee";

    public function index()
    {
        $type = request("type");

        if(!$type) $type = "all";

        $nowPlaying = [];
        $popular = [];
        $topRated = [];
        $upComing = [];

        $cats = Category::all();

        foreach($cats as $cat):
            if($type == strtolower(str_replace(" ", "-", $cat->category_name)) || $type == "all") $nowPlaying = Http::get("{$this->base}movie/now_playing?api_key={$this->apiKey}&language=id&page=1")->json();
            if($type == strtolower(str_replace(" ", "-", $cat->category_name)) || $type == "all") $popular = Http::get("{$this->base}movie/popular?api_key={$this->apiKey}&language=id&page=1")->json();
            if($type == strtolower(str_replace(" ", "-", $cat->category_name)) || $type == "all") $topRated = Http::get("{$this->base}movie/top_rated?api_key={$this->apiKey}&language=id&page=1")->json();
            if($type == strtolower(str_replace(" ", "-", $cat->category_name)) || $type == "all") $upComing = Http::get("{$this->base}movie/upcoming?api_key={$this->apiKey}&language=id&page=1")->json();
        endforeach;

        $genre = Http::get("{$this->base}genre/movie/list?api_key={$this->apiKey}&language=en-US")->json();

        return view("front.index", [
            "nowPlaying" => $nowPlaying,
            "popular" => $popular,
            "topRated" => $topRated,
            "upComing" => $upComing,
            "genre" => $genre,
            "type" => $type,
        ]);
    }

    public function detail($id)
    {
        $id = base64_decode($id);
        $detail = Http::get("{$this->base}movie/{$id}?api_key={$this->apiKey}&language=en-US")->json();

        // dd($detail);

        return view("front.movie-detail", [
            "detail" => $detail
        ]);
    }

    public function login()
    {
        return view("front.login");
    }
}
