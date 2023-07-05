<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
 



class NewsController extends Controller
{

    
   public function index(){
   
    return view ('newsindex', ['newsList' => $this->getNews()]);
}

       
   
   public function show($id) {
           
        return view('showOneNew', ['news' => $this->getNews($id)
    
        ]);
    } 
}

