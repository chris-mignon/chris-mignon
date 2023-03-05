<?php

$con = mysqli_connect('localhost','u641204627_christopher','DSP@2007dsp');

mysqli_select_db($con,'u641204627_chris_db');

$sql = "INSERT INTO Messages_DB(name,email,subject,message ) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')";

if ($con->query($sql) == TRUE) {
    echo "<h3>Message Sent Successfully.</h3>";
    echo "<br>";
    echo "<h4>I will reply to you shortly.</h4>";
	header("refresh:3,index.html");
        
    }
    else {
   
    echo $con->error;
    header("refresh:3,index.html");
    }
    $con->close();
    ?>
