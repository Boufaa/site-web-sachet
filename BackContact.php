<?php

// isset button Commander 

if(isset($_POST['Commander'])){

    if(!empty($_POST["Nom"] && $_POST['Email'] && $_POST['Message'])){


        $message="";
        $to = "lamarinerestaurant@gmail.com"; // this is your Email address
        $from = "lamarinerestaurant@gmail.com"; // this is the sender's Email address
        $Nom = $_POST['Nom'];
        $Email= $_POST['Email'];
        $Message= $_POST['Message'];
        $subject = "Contact";
        $message = "Client: " .$Nom . "\n\n Son Email : " . $Email . "\n\n a Dit: " . $Message.  "\n\n" ;
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

       
    }
}

?>