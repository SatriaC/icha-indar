<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishController extends Controller
{
    public function index(Request $request)
    {
        $wishes = Wish::where('couple_id', 1)->get();
        $for = $request->for;
        return view('main', compact(['wishes', 'for']));
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'relationship'   => 'required',
            'wishes'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Wish::create([
            'name'     => $request->name,
            'couple_id'   => 1,
            'wishes'   => $request->wishes,
            'relationship'   => $request->relationship
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Saved!',
            'data'    => $post
        ]);
    }
}
