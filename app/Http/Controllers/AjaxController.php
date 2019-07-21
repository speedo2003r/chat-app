<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    function index()
    {
        $data = DB::table('users')->paginate(5);
        return view('ajaxPagination', compact('data'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('users')->paginate(5);
            return response()->json($data);
        }
    }
}
