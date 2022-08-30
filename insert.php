<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">

        Quote<input type="text" id="inputQuote" name="name">
        <!-- <input type="text" id="inputQuoteTag" placeholder="tagquote"> -->
        <input type="submit" name="submit">

    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
        

        $res=mysqli_query($mysqli, "INSERT into qutrec values('','$name')");
        
    }
    ?>

</body>
</html>