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
            $data->move('ideas/' . ucfirst(Auth::user()->name), $name);
            Idea::create(['user_id' => Auth::user()->id, 'file' => $name, 'size' => $size, 'type' => $type, 'path'=>'ideas/'. ucfirst(Auth::user()->name).'/'.$name]);
            Session::flash('info_message', 'Your files will be reviewed soon. American Airlines will be in touch.');
        } else if($type == 'docx' || $type == 'xlxs' || $type == 'txt' || $type == 'ppt' || $type == 'pdf') {

            $data->move('ideas/'. ucfirst(Auth::user()->name), $name);

            Idea::create(['user_id'=> Auth::user()->id, 'file'=> $name, 'size'=> $size, 'type'=> $type, 'path'=>'ideas/'. ucfirst(Auth::user()->name).'/'.$name]);
            Session::flash('info_message', 'Your files will be reviewed soon. American Airlines will be in touch.');
        } else {
            Session::flash('error_message', 'Programming, HTML and major Photoshop/Draw files not accepted.');
        }
    }
}
