<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $posts = Post::all();
            return response([
                'status' => 'success',
                'data' => $posts
            ], 200);
        }catch(\Exception $e) {
            return response([
                'status' => 'error',
                'ErrorMsg' => $e->getMessage()
            ], 404);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $post = Post::findorFail($id);
            return response([
                'status' => 'success',
                'data' => $post
            ], 200);
        }catch(\Exception $e) {
            return response([
                'status' => 'error',
                'ErrorMsg' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $post = Post::findorFail($id);
            $post->delete();
            return response([
                'status' => 'success'
            ], 200);
        }catch(\Exception $e) {
            return response([
                'status' => 'error',
                'ErrorMsg' => $e->getMessage()
            ], 404);
        }
    }
}
