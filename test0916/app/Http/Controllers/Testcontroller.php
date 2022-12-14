<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home');
    }

    public function register()
    {
        return "register page";
    }
    public function login()
    {
        return "login page";
    }

    public function product(){
        // $products =[];
        $products =['name'=>'iphone','price'=>799];
        // return view("home",['products'=>$products]); line 31 or 32 choose one
        return view("home",compact('products'));
    }

    public function create(){
        //show the form
        return view('product.create');
    }

    public function store(Request $request ){
        //submit thr form
        // dd($request->get('title'));
        // dd($request->all());//show everything it request
        // dd($request->title);//show title only
 
        $this->validate($request,[
            'title'=>'required|min:3|max:20',
            'discripiton'=>'required'
        ],[
            'title.required'=>'please enter the name of product'
        ]);

        //save to database
        // return redirect()->back();   //line 54 and 55 choose one
        // return back();
        // return redirect()->route('product.index'); 

        $id = 1;
        // return redirect('/product/'.$id); 
        return back()->with('message','Your product was created successfully!');


    }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
