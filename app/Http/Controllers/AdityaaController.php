<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class AdityaaController extends Controller
{
    public function index(){
        $title='Adityaa Chaubey Blog';
        //return view('blog.index',compact('title'));
        return view('blog.index')->with('title',$title);
    }
    
    public function about(){
        return view('blog.about');
    }
    
    public function cat($cat){
        $post=Post::find($category);
        return view('blog.cat')->with('post',$post);
    }
    
    public function category(){
        $title='Categories of the Blog';
        $cat=array(
            'title'=>'category',
            'categories'=>['Food','Dance','Culture']
        );
        return view('blog.category')->with($cat);
    }
}
