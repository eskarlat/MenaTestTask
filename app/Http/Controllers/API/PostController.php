<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                "title" => "required",
                "short_description" => "required",
                "text" => "required"
            ]);

            if ($validator->fails()) {
                throw  new Exception('Validator error: title, short_description and text are required!');
            }

            $post = new Post($request->all());
            $post->save();
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
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                "title" => "required",
                "short_description" => "required",
                "text" => "required"
            ]);

            if ($validator->fails()) {
                throw  new Exception('Validator error: title, short_description and text are required!');
            }

            $post = Post::findOrFail($id);
            $post->update($request->all());

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
