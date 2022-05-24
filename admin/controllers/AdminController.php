<?php

class AdminController{

    public function auth()
    {
        if(isset($_POST['login']))
        {
            $data['email']=$_POST['email'];
            $res=Admin::Login($data);
            if($res->email === $_POST['email'] && password_verify($_POST['password'],$res->password))
            {
                $_SESSION['connecter']=true;
                $_SESSION['username']=$res->nom.' '.$res->prenom;
                header('location:home');
            }else{
                header('location:login');
            }
        }
    }

    public function register()
    {
        if(isset($_POST['login']))
        {
            $options=['cost' => 12];

            $password=password_hash($_POST['password'],PASSWORD_BCRYPT,$options);

            $data=array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => $password
            );

            Admin::CreateAcount($data);
        }
    }


    public static function logout()
    {
        session_destroy();
    }
}


?>