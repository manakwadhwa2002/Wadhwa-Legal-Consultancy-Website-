<?php
    if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email_add = $_POST['email_add'];
    $phone_num = $_POST['phone_num'];
    $address = $_POST['address'];
    $case_subject = $_POST['case_subject'];
    $case_discription = $_POST['case_discription'];

    $to='manakwadhwa2002@gmail.com';
    $subject='WLC Enquiry';
    $message="Name: ".$fullname."\n". "Phone: ".$phone_num. "\n". "E-Mail: ".$email_add. "\n". "Address: ".$address. "\n". "Case Subject: ".$case_subject. "\n". "Case Description: "."\n\n".$case_discription;

        if(mail($to, $subject, $message)){
            "thankyou()"
        }
        else{
            echo "Something Went Wrong ! :(";
        }

    }
?>