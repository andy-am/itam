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

class EmailController extends Controller
{

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

}
