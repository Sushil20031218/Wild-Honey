<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];


    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Feedback: " . $feedback . "<br>";

    
    


} 
   
?>

</body>
</html>
