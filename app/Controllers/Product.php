<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;


class Product extends BaseController
{
    private $products;
    protected $helpers = ["form"];
    public function __construct(){
      
        $this->products = new ProductModel();       
    }
    public function index()
    {
       $data['items']= $this->products->findAll();
       $data['title']="Display all products";
    //    print_r($data['products']);
       return view("products/index", $data);
    }
    public function create(){
        return view("products/create");
        // return" Hello";
    }
    public function store(){
        // return "Yes, I can hear you";
       $data=[
       'product'=>$this->request->getVar('product'),
       'category'=>$this->request->getVar('category'),
       'price'=>$this->request->getVar('price'),
       'sku'=>$this->request->getVar('sku'),
       'model'=>$this->request->getVar('model'),
       
       ];
       $rules= [
        'product'     => 'required|max_length[30]|min_length[4]',
        'category'     => 'required|max_length[30]|min_length[6]',
        'model'     => 'required|max_length[30]|min_length[2]',
        'price'     => 'required|numeric]|min_length[7]',
        'sku'     => 'required|max_length[30]|min_length[3]',
        
       ];
       if(! $this->validate($rules)){
        return view("products/create");
       }else{
        $this->products->insert($data);
        $session = session();
        $session->setFlashdata("msg", "Product Successfully Added");
         $this->response->redirect('/products');
       }   
    }
}
