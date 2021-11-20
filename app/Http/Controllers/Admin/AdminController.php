<?php

namespace App\Http\Controllers\Admin;

use App\Components\XmlParser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function parse($link){
        $link_valid = explode('.', $link);
        if ($link_valid[1] == 'xml') {
            $link = (string) $link;
            $xml = new XmlParser($link);
            $result = $xml->run();
            session()->flash('parser_message', $result);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
