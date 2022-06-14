<?php
    if(isset($_POST['id']))
    {
        $pr=new ProductController();
        $pr->deleteVoyage();
    }
    
?>