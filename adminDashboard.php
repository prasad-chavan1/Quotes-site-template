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

    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .div{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20%;
        }
        .btn{
            margin-right: 12px;
        }
    </style>
</head>
<body>

    <div class="div">
    <button id="brkqut" onclick="openbrk();" class="btn btn-warning">Go to brk quote Upload</button>
    <button id="motqut" onclick="openmotive();" class="btn btn-warning">Go to motive quote Upload</button>
    <button id="sadpoet" onclick="opensadpoet();" class="btn btn-warning">Go to sad poetry Upload</button>
    <button id="heartheal" class="btn btn-warning">Go to Heart heal quote Upload</button>
    </div>


    <script>

        function openbrk(){
            window.open('/proj/upload.php', '_SELF');
        }
        function openmotive(){
            window.open('/proj/motupload.php', '_SELF');
        }
        function opensadpoet(){
            window.open('/proj/sadpoetupld.php', '_SELF');
        }
        function openheartheal(){
            // window.open('/proj/sadpoetupld.php', '_SELF');
        }

    </script>
    
</body>
</html>