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

    public function deleteVoyage()
    {
        if(isset($_POST['id']))
        {
            $data['id']=$_POST['idd'];
            $res=Product::deletePro($data);
            if($res === 'OK')
            {
                header('location:index');
            }
        }
    }

    public function getOne()
    {
        if(isset($_POST['id']))
        {
            $data=array('id'=>$_POST['idd']);
            $pr=Product::select($data);
            return $pr;
        }
    }

}
