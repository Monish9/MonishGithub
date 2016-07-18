<?php

namespace App\Http\Controllers;

class contactMessageController extends Controller{
    public function getContactIndex(){
        return view('frontend/other/contact')->renderSections()['content'];
    }
}

?>