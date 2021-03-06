<?php

namespace App\Http\Controllers;

use App\Baby;
use App\Rating;
USE App\Lunch_Box;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        //
       //return view('pages/Baby');
       $posts = Baby::select('*')
       ->where('category','baby')
       ->paginate(9);
       // dd($posts);
        return view('pages/Baby',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $posts = Baby::select('*')
        ->where('type' ,'baby')
        ->get(); // you were missing the get method
        return view('pages/babies',['posts'=>$posts]);
       

    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show($language,$id)
    {
        //
        $post = Baby::find($id);
        //dd($id);
        return view('pages/recipe-single',['post'=> $post]);
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$language,$id)
    {
        
       
      
       $post = Baby::find($id);
      
        $VisitCount= $request->VisitCount;
        //dd($VisitCount);
        $post->like_count = $VisitCount;
        //dd($post->like_count);
        
        $post->save();
      return redirect()->route('babies.show',[app()->getlocale(),'id'=>$post->id]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baby $baby)
    {
        //
    }
   
}
