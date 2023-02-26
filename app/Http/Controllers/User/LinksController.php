<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('id', 'desc')->get();
        return view('user.links', compact('links'));
    }

    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        $link = new Link();
        $link->title = $request->title;
        $link->icon_class = $request->icon_class;
        $link->save();
        session()->flash('successMessage', 'Link created successfully');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
