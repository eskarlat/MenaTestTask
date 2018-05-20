<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{

            $posts = DB::table('posts');
            $sort = $request->has('sort') ? $request->sort : 'desc';

            if ($request->has('title')) {
                $posts = $posts->where('title', 'like', "%$request->title%");
            }

            if ($request->has('date')) {
                $posts = $posts->whereDate('created_at', $request->date);
            }

            if ($request->has('order_title')) {
                $posts = $posts->orderBy('title', $sort);
            }

            if ($request->has('order_date')) {
                $posts = $posts->orderBy('created_at', $sort);
            }

            return response([
                'status' => 'success',
                'data' => $posts->get()
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
            $post = Post::findOrFail($id);
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
            $post = Post::findOrFail($id);
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
