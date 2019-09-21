<?php
session_start();

if(isset($_POST["submit"])) 
{
    $_SESSION['username'] = $username;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
<?php
if(isset($_SESSION['username']))
    {
        echo "<h1> Hello {$_SESSION['username']}</h1><br>";
   
    }
?>
</div>
    
</body>
</html>