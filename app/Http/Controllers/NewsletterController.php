<?php

namespace App\Http\Controllers;

use session;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class NewsletterController extends Controller
{
    //
    public function index(){
        Paginator::useBootstrap();
        $newsletters = Newsletter::orderByDesc('created_at')->take(15)->paginate(15);
        // ->get();
        $user = auth()->user();
        return view('newsletter', ['newsletters' => $newsletters, 'user' => $user]);
    }

    public function store(Request $request){
        $valid = $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        Newsletter::create($valid);

        return redirect()->back()->with('message', 'Email Received');
    }

    public function destroy($id){
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();
        session()->flash('message', 'Email Deleted Successfully!');
        return redirect()->back();

    }

}
