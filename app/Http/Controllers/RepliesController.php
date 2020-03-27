<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tread;
use App\Chanel;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($chanelId,Tread $tread)
    {
        $tread->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);
        
        return redirect('/treads/'.$chanelId->name.'/'.$tread->id);
        
    }
}
