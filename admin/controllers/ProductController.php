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

    public function ProduitVendu()
    {
        $prv=Product::prVendu();
        return $prv;
    }

    public function AllPr()
    {
        $prv=Product::allPr();
        return $prv;
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

    public function addDetails()
    {
        if(isset($_POST['addDetails']))
        {
            $data=array(
                'idArt'=>$_POST['idArt'],
                'image'=>$_POST['image']
            );
            // var_dump($data);
            // die();
            $add=new Product();
            $add->addImgDetails($data);
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

    public function search()
    {
        if(isset($_POST['search']))
        {
            $data=array('key'=>$_POST['key']);
            $pr=Product::chercher($data);
            return $pr;
        }
    }

    public function ControlleUpdate()
    {
        if(isset($_POST['update']))
        {
            $data=array(
                'id'=>$_POST['idArt'],
                'titre'=>$_POST['titre'],
                'prix'=>$_POST['prix'],
                'categorie'=>$_POST['categorie'],
                'genre'=>$_POST['genre'],
                'description'=>$_POST['description'],
                'image'=>$_POST['image'],
            );
            $res=Product::update($data);
            if($res == 'OK')
            {
                header('location:index');
            }
        }
    }

}
