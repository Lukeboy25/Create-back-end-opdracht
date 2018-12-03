<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::all();
        return view('people.show')-> with('peoples', $peoples);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::find($id);
        return view('people.detailed')-> with('people', $people);
    }
}
