<?php

class ProductController{

    public function getProductHomme()
    {
        $prds=Product::getProHomme();
        return $prds;
    }

    public function getProductFemme()
    {
        $prds=Product::getProFemme();
        return $prds;
    }

    public function addProduct()
    {
        if(isset($_POST['add']))
        {
            $data=array(
                'titre'=>$_POST['titre'],
                'description'=>$_POST['description'],
                'prix'=>$_POST['prix'],
                'image'=>$_POST['image'],
                'categorie'=>$_POST['categorie'],
                'genre'=>$_POST['genre']
            );
            $prd=new Product();
            $prd->addPro($data);
            
        }
    }

}