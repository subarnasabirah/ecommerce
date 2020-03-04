<?php

namespace App\Http\Controllers;

use App\Author;
use App\Free_books;
use Illuminate\Http\Request;

class FreeBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Add free book';
        return view('admin.free_book.create',$data);
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
            'title'=>'required',
            'photo'=>'required|mimes:jpeg,bmp,png',
            'file'=>'required|mimes:pdf,doc',
            'author_name'=>'required'
        ]);
        $data=$request->all();
        if ($request->photo){
            $data['photo']=$this->fileUpload($request->photo);
        }
        if ($request->file){
            $data['file']=$this->fileUpload($request->file);
        }
        Free_books::create($data);
        session()->flash('message','Author created successfully');
        return redirect()->route('free_book.index');
    }

    private function fileUpload($img){
        if ($fileType='jpeg'){
            $path='images/free_books';
        }else{
            $path='files/free_books';
        }
        $img->move($path,$img->getClientOriginalName());
        $fullpath=$path.'/'.$img->getClientOriginalName();
        return $fullpath;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Free_books  $free_books
     * @return \Illuminate\Http\Response
     */
    public function show(Free_books $free_books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Free_books  $free_books
     * @return \Illuminate\Http\Response
     */
    public function edit(Free_books $free_books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Free_books  $free_books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Free_books $free_books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Free_books  $free_books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Free_books $free_books)
    {
        //
    }
}
