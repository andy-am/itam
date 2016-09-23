<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Author;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function doShowAuthor($id)
    {
        $author = Author::findOrFail($id);
        $author->active = 1;
        if($author->save()){
            return response()->json(['error' => false, 'message' => 'Author active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Author active has not been changed']);
        }

    }

    public function doHideAuthor($id)
    {
        $author = Author::findOrFail($id);
        $author->active = 0;
        if($author->save()){
            return response()->json(['error' => false, 'message'=>'Author active has been changed on hide.' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Author active has not been changed']);
        }
    }


    public function addNewAuthor()
    {
        return view('administration.author.addNewAuthor');
    }

    public function storeNewAuthor(Request $request)
    {
        $author = new Author();
        $id = $author->create($request->all())->id;
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "author_id_".$id."_".$days."_".$secs.".".$extension;
            $path = public_path() . '/upload/authors';
            $image = $request->file('img');
            $request->file('img')->move( $path, $imgName);
            $image = Author::find($id);
            $image->image = $imgName;
            $image->save();
        }

        return redirect('/administration/author/showAllAuthors');

    }

    public function updateAuthor(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update( $request->all() );
        return redirect('/administration/author/showAllAuthors');
    }

    public function showAllAuthors()
    {
        return view('administration.author.showAllAuthors');
    }

    public function showAuthor($id)
    {
        $author = Author::findOrFail($id);
        return view('administration.author.showAuthor')->with('author', $author);
    }

    public function deleteAuthor($id)
    {
        $author = Author::findOrFail($id);
        return $id;
        //return view('administration.author.showAuthor')->with('author', $author);
    }
}
