<?php
 require_once 'db/conn.php';
// get values from post operation
if(isset($_POST['submit'])){
    //extract values from the $POST array
    $id = $_POST['id'];
    $fname =  $_POST['firstname'];
    $lname =  $_POST['lastname'];
    $dob =  $_POST['dob'];
    $email =  $_POST['email'];
    $contact =  $_POST['phone'];
    $specialty =  $_POST['specialty'];
    //call CRUD function
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);
    //redirect to index.php
    if($result){
        header("Location: viewrecords.php");
    }
    else{

        include 'includes/errormessage.php';
    }
}
else{

    include 'includes/errormessage.php';
}

?>