<?php

#you belong in this folder. you can move around in this folder, but you can't leave.
namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('pages/welcome');
    }

    public function getAbout(){
        $first = "Yo";
        $last = "Curtis";
        $fullname = $first . " " . $last;
        $email = "y.tungmanelatkul@gmail.com";
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        #have to pass variables in via blade
        #withFullname=name of variable on view page. $fullname=defined in function
        return view('pages/about')->withData($data);
    }

    public function getContact(){
        return view('pages/contact');
    }
}