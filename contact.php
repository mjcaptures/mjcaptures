<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phome=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $to='mjcapturesmj@gmail.com';
    $subject=" Form Submission";
    $message="Name: ".$name."\n"."phone: ".$phone."\n". "wrote the following : "."\n\n".$message;
    $headers="from: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h1> Sent Sucessfuly Thank you"." ".$name.", We will contact you shortly</h1>";

        else{
            echo "Something went wrong";
        }

    }
}


}
?>