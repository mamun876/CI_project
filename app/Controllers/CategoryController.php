<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;


class CategoryController extends BaseController
{
    // private $category;
    // protected $helpers= ['form'];
    // public function__construct(){
    //     $this->category= new CategoryModel();
    // }
    public function index()
    {
        $category = new CategoryModel();
        $data['items']= $category->findAll();
        $data['title']="Display all  Caregory";
        return view('category/index', $data);
    }
 
    public function create()
    {
       
    }
    public function edit($id)
    {
      
    }
    public function store()
    {
     
    }
    public function update($id)
    {
    
    }
    public function delete($id)
    {
       
    }
}
