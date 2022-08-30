<?php
include("config.php");
$query = "select * from qut_img";
$result=mysqli_query($mysqli, $query);
$toReturn="";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/sty.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/9e5b378df7.js" crossorigin="anonymous"></script>
    <title>Arnav Says</title>
    <style>
      h2{
        text-decoration: none;
        color: black;
      }
      h5{
        font-size:18px;
      }
    </style>
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

      <!-- <div id="form" class="py-4">
        <div class="mb-3 px-4">
            <label for="exampleFormControlInput1" class="form-label">Enter Your Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nehu chavan">
          </div>
          <div class="mb-3 px-4">
            <label for="exampleFormControlTextarea1" class="form-label">Mention Your Problem...</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="button" id="sendmsg" class="btn btn-dark my-4">Send Message</button>
            <button type="button" id="cancle" class="btn btn-dark my-4">Cancle</button>
          </div>
      </div> -->
      
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bgg">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Arnav Quotes</h1>
            <p class="lead font-weight-normal">Welcome to my little world of quotes : )<br>Using words to talk of words is like using a pencil to draw a picture of itself, on itself. Impossible. Confusing. Frustrating ... but there are other ways to understanding</p>
            <!-- <a id="talkme" class="btn btn-outline-secondary fs" href="#">Talk To Me</a> -->
            <button type="button" id="talkme" class="btn btn-dark my-4" onclick="popup();">Talk To Me</button>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div id="bgdark" class="bg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3 text-black" id="brkkquote">
            <a href="/proj/brkquotes.php"><h2 class="display-5">Broken Quotes</h2></a>
            <p class="lead">The best way to not get your heart broken, is pretending you don't have one.</p>
          </div>
          <!-- <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->

          <div id="carouselExampleIndicators" class="carouselmargin carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="src/bgg.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bgg2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div id="bglight" class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
          <a href="/proj/motiv.php"><h2 class="display-5">Motivation</h2></a>
            <p class="lead">Daily motivation quotes to get motivation and being positive.</p>
          </div>
          <!-- <div class="bg box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
          <div id="carouselExampleIndicators" class="carouselmargin carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bgg.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
    </div>

    <!-- next 2 parts -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div id="bgdark" class="bg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3 text-black">
          <a href="/proj/sadpoet.php"><h2 class="display-5">Sad Poetry</h2></a>
            <p class="lead">The best way to not get your heart broken, is pretending you don't have one.</p>
          </div>
          <!-- <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->

          <div id="carouselExampleIndicators" class="carouselmargin carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bgg2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div id="bglight" class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
          <a href="/proj/contact.php"><h2 class="display-5">Contact Us</h2></a>
            <p class="lead">Daily motivation quotes to get motivation and being positive.</p>
          </div>
          <!-- <div class="bg box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
          <div id="carouselExampleIndicators" class="carouselmargin carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="src/bgg.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bgg.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/bggg1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
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

      <script>
        function popup(){
         window.open("https://www.instagram.com/arnav__quotes/", '_SELF');
};
      </script>
      

    <script src="script/web.js"></script>
</body>

</html>