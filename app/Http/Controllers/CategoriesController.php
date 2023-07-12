<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showCategories(){
    return view('categoriesindex', ['categories'=>$this->getCategories()]);
    }

    public function showNewsByCategory($cid){
        return view('newsindex', ['newsList'=>$this->getNewsByCategory($cid)]);
    }
}
