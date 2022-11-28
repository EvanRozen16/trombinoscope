<?php 

    include_once('../functions/test.php');
    include_once('../functions/function.php');


    session_start();


    $pageToReturn = "http://localhost/EVAN_ROZEN_trombinoscope/";
    

    if (!((isset($_POST['username']) && $_POST['username'] != ''))) { 

        header("Location: http://localhost/EVAN_ROZEN_trombinoscope/");
    } 
    
    else {

        $datas_to_verify =[
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        if (crud_exist ('users', $datas_to_verify, "id")){

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: http://localhost/EVAN_ROZEN_trombinoscope/"); }

        else{ header("Location:http://localhost/EVAN_ROZEN_trombinoscope/");}
    }

?>