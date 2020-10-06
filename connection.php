<?php
    $con = mysqli_connect("localhost", "root" , "" , "alinea")
        or die ("Failed to connect mysql server " .mysqli_connect_error ());

    $emails = mysqli_real_escape_string($con, $_POST['email']);
 

    $query = "INSERT INTO base(email) 
    VALUES('$email')";

    if (!mysqli_query($con, $query))
    {
        echo "Error" .mysqli_error($con);
    }

 {
    echo 'Inserted';
    
}        

        header("refresh:2; url=sec.html");
?>