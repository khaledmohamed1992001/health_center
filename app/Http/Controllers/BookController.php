<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Book;
class BookController extends Controller
{
    public function view($id){
        $show = Book::find($id);
        return view('viewbook',compact('show'));
    }
    public function index(){
        $Data = Book::all();
        return view('show',compact('Data'));
    }
    public function download(Request $request ,$book){
       return response()->download(public_path('Books/'.$book));
    }
    public function upload(Request $request)
    {
      $this->validate($request,[
         'Owner' => 'required|string',
          'name' => 'required|string',
          'file' => 'required|mimes:xlsx,pptx,docx,txt,pdf'
      ]);
      $b = new Book();
      $b->ownername = $request->Owner;
      $b->bookname = $request->name;
      $file = $request->file;
      $filename = time().'.'.$file->getClientOriginalExtension();
      $request->file->move('Books',$filename);
      $b->book=$filename;
      $b->save();
      return redirect(route('index'));
    }
}
