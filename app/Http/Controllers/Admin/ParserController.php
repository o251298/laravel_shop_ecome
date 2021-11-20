<?php

namespace App\Http\Controllers\Admin;

use App\Models\Xml;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Xml::saveFile($request->file('xml'));
        $path = explode('/' , $path);
        if ($path) {
            session()->flash('success', $path[1]);
            return redirect()->back();
        } else {
            session()->flash('error', "Jib,rf cj[hfytybz afqkf");
            return redirect()->back();
        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Xml  $xml
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xml $xml)
    {
        if (Storage::disk('public')->exists('/xml_files/' . $xml->link_xml)){
            Storage::delete('/xml_files/' . $xml->link_xml);
        }
        $xml->products()->delete();
        $xml->categories()->delete();
        $xml->delete();
    }
}
