<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostCreateRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $category=PostCategory::latest()->get();

        return view('admin.post',compact('category'));
    }

    public function viewPost(){
        $post=Post::latest()->get();
        return view('admin.view_post',compact('post'));
    }

    public function store(PostCreateRequest $request){

        try{

            $post=DB::transaction(function()use($request){
                $post=Post::create([
                    'title'=>$request->title,
                    'category_id'=>$request->category_id,
                    'description'=>$request->description,
                ]);
                if($request->post_image){
                    $post->addMedia($request->post_image)->toMediaCollection('post_image');
                }
                return $post;

            });
            if($post){
                return back()->with('success','Post created successfully!');
            }

        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());

        }

    }

    public function destroy($id){

        $post=Post::find($id);
        if(!$post){
            return back()->with('error','Post Not Found!');
        }
        try{

            $post=DB::transaction(function()use($post){
                $post->delete();
                $post->clearMediaCollection('post_image');

                return $post;

            });
            if($post){
                return back()->with('success','Post deleted successfully!');
            }
          



        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());

        }

    }
}
