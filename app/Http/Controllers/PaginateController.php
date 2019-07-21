<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PaginateController extends Controller
{
    public function index()
    {
        return view('pagination');
    }
    public function get()
    {
        // return Message::all();
        $Message = Message::paginate(5);
        return response()->json($Message);
    }
}
