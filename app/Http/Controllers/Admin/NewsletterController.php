<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Newsletter;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Image;

class NewsletterController extends Controller
{

    public function doShowNewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->active = 1;
        if($newsletter->save()){
            return response()->json(['error' => false, 'message' => 'Blog active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }

    }

    public function doHideNewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->active = 0;
        if($newsletter->save()){
            return response()->json(['error' => false, 'message'=>'Blog active has been changed on hide. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }
    }


    public function addNewNewsletter()
    {
        return view('administration.newsletter.addNewNewsletter');
    }

    public function storeNewNewsletter(Request $request)
    {
        $newsletter = new Newsletter();
        $id = $newsletter->create($request->all())->id;
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "newsletter_id_".$id."_".$days."_".$secs.".".$extension;
            $path = public_path() . '/upload/newsletters';
            $image = $request->file('img');
            $request->file('img')->move( $path, $imgName);
            $image = Newsletter::find($id);
            $image->img = $imgName;
            $image->save();
        }

        return redirect('/administration/newsletter/showAllNewsletters');

    }

    public function updateNewsletter(Request $request, $id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update( $request->all() );
        return redirect('/administration/newsletter/showAllNewsletters');
    }

    public function showAllNewsletters()
    {
        return view('administration.newsletter.showAllNewsletters');
    }

    public function showNewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('administration.newsletter.showNewsletter')->with('newsletter', $newsletter);
    }

    public function deleteNewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return $id;
        //return view('administration.blog.showBlog')->with('blog', $blog);
    }

}
