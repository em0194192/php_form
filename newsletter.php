<?php  
    include "includes/cdnlinks.php";
    if($_GET['login'] == "false")
    {
        header('Location:index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "includes/nav.php"; //adds the navbar here at top of body
    ?>
    <h1>Newsletter</h1>
<?php 
    print_r($_POST);
    //print_r($_SERVER);
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include "submitted-form.php";
    } else {
        include "subscribe-form.php";
    }
    
    
?>

</body>
</html>