<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        return view('front_home');
    }
    public function about(){
        $data["title"] = "About Us";
        $data["dest"] = "About";
        return view('front_about',$data);
    }
    public function service(){
        $data["title"] = "Service";
        $data["dest"] = "Service";
        return view('front_service',$data);
    }
    public function appointment(){
        $data["title"] = "Appointment";
        $data["dest"] = "appointment";

        return view('front_appointment',$data);
    }
    public function team(){
        $data["title"] = "Doctor";
        $data["dest"] = "Doctor";

        return view('front_our_doctor',$data);
    }
    public function feature(){
        $data["title"] = "Feature";
        $data["dest"] = "feature";

        return view('front_feature',$data);
    }

    public function testimonial(){
        $data["title"] = "Testimonial";
        $data["dest"] = "testimonial";
        return view('front_testimonial',$data);
    }
    public function page(){
        $data["title"] = "404 Not_Found";
        $data["dest"] = "404";

        return view('front_page',$data);
    }
    public function contact(){
        $data["title"] = "Contact";
        $data["dest"] = "contact";

        return view('front_contact',$data);
    }

}
