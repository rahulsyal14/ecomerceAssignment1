<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
   <?php
    
    function differentWords($string){
        
        for($i = 0; $i < strlen($string) ; $i++)
        {
            for($j = $i + 1; $j < strlen($string); $j++)
            {
                if($string[$i] == $string[$j])
                {
                    return true;
                }
            }
        }
        return false;
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['firstname'])){
            
            $checkWords = differentWords($_POST['firstname']); // checking the characters if they are duplicate or not 
            
            if($checkWords == true){
                echo '<p>Characters are duplicate</p>'; // if these are duplicate.
            }
            else{
                echo '<p>Characters are not duplicate</p>'; // if these are not duplicates.
            }
        }
            else{
                echo '<p>Please Enter Characters </p>'; //when the enteries are empty.
            }      
        }
    ?>
    
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>