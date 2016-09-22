<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Blog;
use App\Newsletter;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Image;

class QuotationController extends Controller
{

    public function doShowQuotation($id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->active = 1;
        if($quotation->save()){
            return response()->json(['error' => false, 'message' => 'Quotation active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Quotation active has not been changed']);
        }

    }

    public function doHideQuotation($id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->active = 0;
        if($quotation->save()){
            return response()->json(['error' => false, 'message'=>'Quotation active has been changed on hide. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Quotation active has not been changed']);
        }
    }


    public function addNewQuotation()
    {
        $authors = Author::all();
        return view('administration.quotation.addNewQuotation')->with('authors', $authors);;
    }

    public function storeNewQuotation(Request $request)
    {
        $quotation = new Quotation();
        //dd($request->all());
        $id = $quotation->create($request->all())->id;
        //var_dump($id);die();
       /* if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "quotation_id_".$id."_".$days."_".$secs.".".$extension;
            $path = public_path() . '/upload/quotations';
            $image = $request->file('img');
            $request->file('img')->move( $path, $imgName);
            $image = Quotation::find($id);
            $image->img = $imgName;
            $image->save();
        }*/

        return redirect('/administration/quotation/showAllQuotation');

    }

    public function updateQuotation(Request $request, $id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->update( $request->all() );

        return redirect('/administration/quotation/showAllQuotation');
    }

    public function showAllQuotation()
    {
        return view('administration.quotation.showAllQuotation');
    }

    public function showQuotation($id)
    {
        $quotation = Quotation::findOrFail($id);
        return view('administration.quotation.showQuotation')->with('quotation', $quotation);
    }

    public function deleteQuotation($id)
    {
        $quotation = Quotation::findOrFail($id);
        return $id;
        //return view('administration.blog.showBlog')->with('blog', $blog);
    }

}
