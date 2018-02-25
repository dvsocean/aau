<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class IdeaController extends Controller
{
    public function newIdea(Request $request) {
        $data = $request->file('file');
        $name = $data->getClientOriginalName();
        $size = $data->getSize();
        $type = $data->getClientOriginalExtension();

        if($type == 'jpg' || $type == 'jpeg' || $type == 'png' || $type == 'JPG' || $type == 'JPEG' || $type == 'PNG') {
            $data->move('ideas/'. ucfirst(Auth::user()->name), $name);
            Idea::create(['user_id'=> Auth::user()->id, 'file'=> $name, 'size'=> $size, 'type'=> $type]);
            Session::flash('info_message', 'Ideas are awesome! Your files will be reviewed soon.');
        } else {
            Session::flash('error_message', 'GIF, BITMAP, VECTORS, PSD and COREL files are not accepted.');
        }
    }
}