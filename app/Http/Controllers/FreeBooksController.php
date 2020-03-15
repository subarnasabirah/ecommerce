<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
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
        $data['title']='Free book list';
        $data['free_books']=Free_books::with('category','author')->paginate(2);
        $data['serial']=managePaginationSerial($data['free_books']);
        return view('admin.free_book.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Add free book';
        $data['categories']=Category::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $data['authors']=Author::orderBy('name','ASC')->pluck('name','id');
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
            'author_id'=>'required',
            'category_id'=>'required'
        ]);
        $data=$request->all();
        if ($request->file){
            $data['file']=$this->fileUpload($request->file,'file');
        }
        if ($request->photo){
            $data['photo']=$this->fileUpload($request->photo,'photo');
        }
        Free_books::create($data);
        session()->flash('message','Author created successfully');
        return redirect()->route('free_book.index');
    }

    private function fileUpload($img,$filetype){
        if ($filetype=='photo'){
            $path='images/free_books';
        }else{
            $path='files/free_books';
        }
        $file_name=time().rand('00000','99999').'.'.$img->getClientOriginalExtension();
        $img->move($path,$file_name);
        $fullpath=$path.'/'.$file_name;
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
