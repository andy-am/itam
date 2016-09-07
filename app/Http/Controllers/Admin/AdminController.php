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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('administration.index');
    }

    public function account()
    {
        return view('administration.account.index');
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////// NEWSLETTER //////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////


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
            $path = base_path() . '/public/images/upload/';
            $image = $request->file('img');
            $request->file('img')->move( $path.'/blog/', $imgName);
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


    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////// QUOTATIONS //////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////


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
        return view('administration.quotation.addNewQuotation');
    }

    public function storeNewQuotation(Request $request)
    {
        $quotation = new Quotation();
        $id = $quotation->create($request->all())->id;
        var_dump($id);die();
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "quotation_id_".$id."_".$days."_".$secs.".".$extension;
            $path = base_path() . '/public/images/upload/';
            $image = $request->file('img');
            $request->file('img')->move( $path.'/quotation/', $imgName);
            $image = Quotation::find($id);
            $image->img = $imgName;
            $image->save();
        }

        //return redirect('/administration/quotation/showAllQuotation');

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



    ////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////// BLOG /////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////

    public function doShowBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->active = 1;
        if($blog->save()){
            return response()->json(['error' => false, 'message' => 'Blog active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }

    }

    public function doHideBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->active = 0;
        if($blog->save()){
            return response()->json(['error' => false, 'message'=>'Blog active has been changed on hide. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Blog active has not been changed']);
        }
    }


    public function addNewBlog()
    {
        return view('administration.blog.addNewBlog');
    }

    public function storeNewBlog(Request $request)
    {
        $blog = new Blog();
        $id = $blog->create($request->all())->id;
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "blog_id_".$id."_".$days."_".$secs.".".$extension;
            $path = base_path() . '/public/images/upload/';
            $image = $request->file('img');
            $request->file('img')->move( $path.'/blog/', $imgName);
            $image = Blog::find($id);
            $image->img = $imgName;
            $image->save();
        }

        return redirect('/administration/blog/showAllBlogs');

    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update( $request->all() );
        return redirect('/administration/blog/showAllBlogs');
    }

    public function showAllBlogs()
    {
        return view('administration.blog.showAllBlogs');
    }

    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('administration.blog.showBlog')->with('blog', $blog);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return $id;
        //return view('administration.blog.showBlog')->with('blog', $blog);
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////// EMAILS ////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////

    public function showEmails(){

        $connect_to = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $user = 'a.majik7@gmail.com';
        $password = '77andy77';


        $inbox = imap_open($connect_to, $user, $password)
        or die("Can't connect to '$connect_to': " . imap_last_error());
        $folders = imap_list($inbox, "{imap.gmail.com:993/imap/ssl}", "*");
        //return dd($folders);
        //return $message_count = imap_num_msg($inbox);

        $emails = imap_search($inbox,'SINCE '. date('d-M-Y', strtotime("-2 week")));
        $output=[];
        $emailCount = imap_num_msg($inbox);

        rsort($emails);

        $i = 0;

        foreach($emails as $mail) {

            $headerInfo = imap_headerinfo($inbox, $mail);

            //return var_dump(dd($headerInfo));
            $message ="";
            $output[$i]['subject'] = isset($headerInfo->Subject)? (imap_utf8($headerInfo->Subject)) : "0";
            $output[$i]['from'] = imap_utf8($headerInfo->from[0]->personal);
            $output[$i]['toaddress'] = $headerInfo->toaddress;
            $output[$i]['to'] = array_shift($headerInfo->to);
            $output[$i]['date'] = $headerInfo->date[0];
            $output[$i]['fromaddress'] = $headerInfo->fromaddress[0];
            $output[$i]['reply_toaddress'] = $headerInfo->reply_toaddress[0];
            $output[$i]['date'] = date('d-m-Y '.'['.'H:i'.']', strtotime($headerInfo->date) + 3600);
            $output[$i]['unseen'] = $headerInfo->Unseen;
            $output[$i]['flagged'] = $headerInfo->Flagged;

            $message = imap_fetchbody($inbox, $mail, 2);

            if(base64_decode($message, true)) {
                //message body if base64 encoded
                $message = base64_decode($message);
            } else {
                //message body is not base64 encoded
                $message = imap_fetchbody($inbox, $mail, 1);
            }

            $output[$i]['body'] = $message;
            $i++;
        }


        return dd($output);
        //return view('aßdministration.email.showEmails')->with('output', $output);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
