
<?php
include("config.php");
$query = "select * from sadpoet";
$result=mysqli_query($mysqli, $query);
$toReturn="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/sty.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/9e5b378df7.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="#">
            <!-- <svg xmlns="https://www.svgrepo.com/show/19153/heart.svg" width="24" height="24</circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> -->
            <img id="logo" src="https://www.svgrepo.com/show/33090/heart.svg" alt="">
          </a>
          <a class="py-2 d-none d-md-inline-block" href="/proj/web.php">Home</a>
          <a class="py-2 d-none d-md-inline-block" href="/proj/brkquotes.php">Broken Quotes</a>
          <a class="py-2 d-none d-md-inline-block" href="/proj/motiv.php">Motivation</a>
          <!-- <a class="py-2 d-none d-md-inline-block" href="/healheart.html">Healing Hearts</a> -->
          <a class="py-2 d-none d-md-inline-block" href="/proj/sadpoet.php">Sad Poetry</a>
          <a class="py-2 d-none d-md-inline-block" href="#">Connect me</a>
        </div>
      </nav>
     
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bgg">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Sad Poetry</h1>
            <p class="lead font-weight-normal">Welcome to my little world of quotes : )<br>Using words to talk of words is like using a pencil to draw a picture of itself, on itself. Impossible. Confusing. Frustrating ... but there are other ways to understanding</p>
            <!-- <a id="talkme" class="btn btn-outline-secondary fs" href="#">Talk To Me</a> -->
        </div>
    </div>
  
    <!-- Image gallery -->
    
    <div class="row mx-4 my-5">
      <?php
        while($rows=mysqli_fetch_assoc($result))
        {
          ?>
      <div class="col-md-4 mb-5">
              <div class="thumbnail">
                <!-- <a href="/src/bgg2.jpeg"> -->
                  <img src="<?php echo $rows['sadpoet_img'] ?>" alt="Lights" style="width:100%">
                  <div class="caption">
                  </div>
                <!-- </a> -->
              </div>
      </div>
      <?php } ?>
    </div>

    <!-- footer -->
    <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <!-- <svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> -->
            <img id="logo" src="https://www.svgrepo.com/show/33090/heart.svg" alt="">
            <small class="d-block mb-3 text-muted">© 2021-2022</small>
          </div>
          <div class="col-6 col-md">
            <h5>Broken Heart</h5>
            
          </div>
          <div class="col-6 col-md">
            <h5>Motivation</h5>
            
          </div>
          <div class="col-6 col-md">
            <h5>Healing Hearts</h5>
            
          </div>
          <div class="col-6 col-md">
            <h5>Sad Poetry</h5>
            
          </div>
          <div class="col-6 col-md">
            <h5>About Us</h5>
            
          </div>
        </div>
      </footer>

    <script src="/script/admin.js"></script>
</body>
</html>