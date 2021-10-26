<?php

namespace App\Http\Controllers\Admin;

use App\Models\Xml;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xmls = Xml::all();
        return view('admin.parser.index', [
            'xmls' => $xmls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Xml  $xml
     * @return \Illuminate\Http\Response
     */
    public function show(Xml $xml)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Xml  $xml
     * @return \Illuminate\Http\Response
     */
    public function edit(Xml $xml)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Xml  $xml
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xml $xml)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Xml  $xml
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xml $xml)
    {
        //
    }
}
