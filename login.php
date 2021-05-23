<?php
include 'connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email=$_POST['EmailLogin'];
    $Password=$_POST['PasswordLogin'];


    $sql="SELECT * FROM `utente` WHERE `Email`='$Email'";
    $res=mysqli_query($con,$sql);  //esecuzione query
    
    $rows=mysqli_num_rows($res);  //restituisce il numero delle righe
    
    if($rows==1){
        $data=mysqli_fetch_assoc($res);
        $passwordFromDB=$data['Password'];
        $passVerified=password_verify($Password,$passwordFromDB);
      
    
        if($passVerified){
            session_start();
            $_SESSION['idUtente']=$data['Id'];
            $_SESSION['username']=$data['Username'];
            $_SESSION['loggedIn']=true;
            echo 'loggato';
         
        }else{
            echo 'Non loggato';
        
        }
    }else{
      echo 'Registrati Prima';
    }
    

}
?>