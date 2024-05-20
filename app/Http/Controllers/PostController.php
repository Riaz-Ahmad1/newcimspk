<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::al();
        $posts = Post::paginate(2);

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|max:255',
      'body' => 'required',
    ]);
    if($request->hasFile('logo')){
        $request->file('logo')->store('logos','public');
    }
    Post::create($request->all());
    return redirect('/crud')->with('message', 'Post created successfully.');
    
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
      ]);
      $post = Post::find($id);
      $post->update($request->all());
      return redirect('/crud')->with('success', 'Post Updated successfully.');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect('/crud')->with('success', 'Post Deleted successfully.');

    }

    public function edit($id)
  {
    $post = Post::find($id);
    return view('admin.posts.edit', compact('post'));
  }
}
