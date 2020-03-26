<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tread;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Tread $tread)
    {
        $tread->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);
        
        
        return redirect('/treads/'.$tread->id);
        
    }
}
