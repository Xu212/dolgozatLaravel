<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = response()->json(Agency::all());
        return $agencies;
    }

    public function show($id)
    {
        $agency=response()->json(Agency::find($id));
        return $agency;
    }

    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->email= $request->email;
        $agency->type= $request->type;
        $agency->save();
    }

    public function update($id, Request $request)
    {
        $agency = Agency::find($id);
        $agency->name = $request->name;
        $agency->country= $request->country;
        $agency->type=$request->type;
        $agency->save();
    }

    public function destroy($id)
    {
        $agency=Agency::find($id);
        $agency->delete();
    }

    public function listView()
    {
        $agencies= Agency::all();
        return view("agency.list", ["agencies"=>$agencies]);
    }

    // public function newView()
    // {
    //     $agencies=Agency::all();
    //     $=Book::all();
    //     return view("copy.new", ["users"=>$users, "books"=>$books]);
    // }

    // public function editView($id)
    // {
    //     $users = User::all();
    //     $books = Book::all();
    //     $copies = Copy::find($id);
    //     return view("copy.edit", ["users"=>$users, "books"=>$books, "Copy"=>$copies]);
    // }
}
