<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

if(!empty($_POST['firstname'])){
    
    $firstname = $_POST['firstname'];  // if firstname is not empty
    
    echo '<p> First Name is ' .$firstname. '</p>'; // display the data
}

else {
    
    echo '<p>Please Enter Firstname </p>'; // if firstname is not entered.
}

if(!empty($_POST['lastname'])){
    
    $lastname = $_POST['lastname']; // if lastname is not empty.
    
    echo '<p>Last Name is ' .$lastname. '</p>'; // display the data
}

else
{
    echo '<p>Please Enter the last name</p>';
    
}  // if lastname is not entered.

if(!empty($_POST['age']))
{
    $age = $_POST['age'];  // if age is not empty
    echo '<p> Age is ' .$age. '</p>' ;  // display the data
}

else 
{
    echo '<p>Please Enter Age</p>'; // if age is not entered.
}

if(isset($_POST['newsletter']))
{
    $newsletter = $_POST['newsletter'];
    echo '<p>Selected newsletter is ' . $newsletter. '</p>';
    
    // display the data
}
else
{
    echo '<p>Please select a button</p>'; // if radio button is not selected.
}
}

?>