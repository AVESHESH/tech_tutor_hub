<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostCategoryController extends Controller
{
    public function index(){
        $postCategory=PostCategory::latest()->get();

    
        return view('admin.post-category',compact('postCategory'));
    }

    public function store(Request $request){

        try{
            $category=DB::transaction(function()use($request){
                $category=PostCategory::create([
                    'title'=>$request->title

                ]);
                return $category;

            });
            if($category){
                return back()->with('success','Post Category created successfully!');
            }

        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());

        }

    }
}
