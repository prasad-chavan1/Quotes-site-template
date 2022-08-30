<?php
error_reporting(0);
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/sty.css"> -->
    <title>Document</title>
</head>
<body>

    <form action="#" method="POST" enctype="multipart/form-data">

    <input type="file" name="my_img" id="">
    <input type="submit" name="submit" value="Upload">


    </form>
    <br>

    <button class="btn btn-primary" onclick="load();">Add new pic</button>
    

    <script>

        function load(){
            window.open('/proj/motupload.php', '_SELF');
        };

    </script>
</body>
</html>

<?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $filename = $_FILES["my_img"]["name"];
            $tempname = $_FILES["my_img"]["tmp_name"];
        $folder = "motive_imgs/".$filename;
        echo $folder;    
        move_uploaded_file($tempname, $folder);

        $res=mysqli_query($mysqli, "INSERT into motive_feed values('$folder')");
        
    }
    ?>