<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
 



class NewsController extends Controller
{

    
   public function index(){
   
    return view ('news.newsindex', ['newsList' => $this->getNews()]);
}

       
   
   public function show($id) {
           
        return view('news.showOneNew', ['news' => $this->getNews($id)
    
        ]);
    } 

    public function adminindex(){
   
        return view ('admin.adminnewsindex', ['newsList' => $this->getNews()]);
    }

    public function adminshow($id) {
           
        return view('admin.adminshowOneNew', ['news' => $this->getNews($id)
    
        ]);
    } 
    


}

