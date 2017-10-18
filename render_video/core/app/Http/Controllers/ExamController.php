<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Logo;
use App\SocialIcon;
use App\Contact;
use App\SubCategory;
use App\UserVideos;
use Illuminate\Support\Facades\Session;
use App\Title;
use App\Footer;

class ExamController extends Controller
{

    public function getExam()
    {
        
        $logo = Logo::first();
        $social = SocialIcon::first();
        $contact = Contact::first();
        $title = Title::first();
        $footer = Footer::first();
        $curr = Currency::all();

        $uservideos = UserVideos::orderBy('user_video_id','DESC')->paginate(10);

        return view('exam.exam')
        ->withLogo($logo)
        ->withSocial($social)
        ->withContact($contact)
        ->withCurrency($curr)
        ->withUservideos($uservideos)
        ->withTitle($title)
        ->withFooter($footer);
    }

    public function getMyVideos()
    {
        $logo = Logo::first();
        $social = SocialIcon::first();
        $contact = Contact::first();
        $title = Title::first();
        $footer = Footer::first();
        $curr = Currency::all();

        $user_id_loggedin = Session::get('user_id_loggedin');

        $uservideos = UserVideos::orderBy('user_video_id','DESC')->where("user_id","=",$user_id_loggedin)->paginate(10);

        return view('exam.my_videos')
        ->withLogo($logo)
        ->withSocial($social)
        ->withContact($contact)
        ->withCurrency($curr)
        ->withUservideos($uservideos)
        ->withTitle($title)
        ->withFooter($footer);
    }
    
    public function getExamById($id)
    {
        $logo = Logo::first();
        $social = SocialIcon::first();
        $contact = Contact::first();
        $exam_category = SubCategory::orderBy('id', 'DESC')->paginate(10);
        $singleexam = SubCategory::findOrFail($id);
        $title = Title::first();
        $footer = Footer::first();
        Session::put('exam_cat', $id);
        $curr = Currency::all();
        return view('exam.exambyid')
        ->withLogo($logo)
        ->withSocial($social)
        ->withContact($contact)
        ->withCurrency($curr)
        ->withCategory($exam_category)
        ->withSingleexam($singleexam)
        ->withTitle($title)
        ->withFooter($footer);
    }
}
