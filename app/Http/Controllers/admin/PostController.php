<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

class PostController extends Controller
{

    public function index()
    {
        $posts=post::all();
        return view('admin.post.show',compact('posts'));
    }


    public function create()
    {
        $categories=category::all();
        $tags=tag::all();
        return view('admin.post.create',compact('tags','categories'));
    }


    public function store(Request $request)
    {

       $this->validate($request,[
            'title'=>['required', 'min:3'],
            'subtitle'=>'required',
            'slug'=>'required',
           'body'=>'required'
            ]);
        $post=new post;
        $post->title=$request->title;
        $post->subtitle=$request->subtitle;
        $post->slug= $request->slug;
        $post->body=$request->body;
        $post->status=$request->status;
        $post->save();
        $post->tags()->sync($request->tag);
        $post->categories()->sync($request->category);
        return redirect(route('post.index'));

      /* $attirbute=$this->validate([
            $request->title=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',

        ]);
        post::create($attirbute);
        return redirect(route('post.index'));*/
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post=post::with('tags','categories')->where('id',$id)->first();
        $categories=category::all();
        $tags=tag::all();
        return view('admin.post.edit',compact('tags','categories','post'));

    }


    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title'=>['required', 'min:3'],
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required'
        ]);
        $post=post::find($id);
        $post->title=$request->title;
        $post->subtitle=$request->subtitle;
        $post->slug= $request->slug;
        $post->body=$request->body;
        $post->save();
        $post->tags()->sync($request->tag);
        $post->categories()->sync($request->category);
        return redirect(route('post.index'));
    }


    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}