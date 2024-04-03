<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    //
    public function index(){
        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('name', 'Blog');
        })
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(3)
        ->get();

        $galleries = Gallery::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->take(3)->get();
        // $blogs = Blog::all()->sortByDesc(function ($item) {
        //     return $item->updated_at ?? $item->created_at;
        // })->take(3);
        // $blogs = Blog::all();
        // dd($blogs);
        return view('index')->with(['blogs' => $blogs, 'galleries' => $galleries]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }


    public function services(){
        return view('pages.services');
    }
    public function federalSkilledWorker(){
        return view('pages.federal-skilled-worker');
    }
    public function expressEntry(){
        return view('pages.express-entry');
    }
    public function citizenshipApplication(){
        return view('pages.citizenship-application');
    }
    public function spouseOpenWorkPermit(){
        return view('pages.spouse-open-work-permit');
    }
    public function visa(){
        return view('pages.visa');
    }
    public function gallery(){
        Paginator::useBootstrap();
        $galleries = Gallery::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->take(24)
        ->Paginate(24);
        // ->get();

        return view('pages.gallery')->with(['galleries' => $galleries]);
    }

    public function newsBlog(){
        Paginator::useBootstrap();

        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('name', 'Blog');
        })
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->Paginate(12);

        $news = Blog::whereHas('category', function ($queryNews){
            $queryNews->where('name', 'News');
        })
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(3)
        ->get();

        $comments = Comment::all();

        return view('pages.newsblog')->with(['blogs' => $blogs, 'news' => $news, 'comment' => $comments]);
    }
    public function show($id){
        $blog = Blog::findOrFail($id);
        $comments = Comment::all();
        // $comment = Comment::where('post_id', $id)->get();
        // return view('post', ['comments' => $comment]);
        // $user = auth()->user();
        return view('posts.blog', compact('blog', 'comments'));
        // return response()->json($id, 200);
    }

}
