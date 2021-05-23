<?php
include './connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Username=$_POST['Username'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $confermaPassword=$_POST['ConfermaPassword'];
 
    

    $sql="SELECT * FROM `utente` WHERE `Email`='$email'";
    
    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);  //restituisce il numero di righe

    if($row>=1){

        echo'Utente già registrato';

    }else if($password==$confermaPassword){
        $newEncryptedPassword =password_hash($password,PASSWORD_BCRYPT); //FUNZIONE PER CRIPTARE LE PASSWORDs
        $confermaEncryptedPassword=password_hash($confermaPassword,PASSWORD_BCRYPT);
        echo $confermaPassword."<br>";

        $sql1= "INSERT INTO `utente`( `Username`, `Email`, `Password`, `ConfermaPassword`)
        VALUES ('$Username','$email','$newEncryptedPassword','$confermaEncryptedPassword')";
        $result1=mysqli_query($con,$sql1); //query excution
    
        if($result1){
            echo 'ok';
        }else{
            echo 'non è andato a buon fine';
        }
    }  
}

?>