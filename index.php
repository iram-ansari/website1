<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- font cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- animate js.cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css"
    integrity="sha512-gFn7XRm5v3GlgOwAQ80SXDT8pyg6uaV9JbW2OkNx5Im2jR8zx2X/3DbHymcZnUraU+klZjRJqNfNkFN7SyR3fg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
    integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"
    integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css.css">
  <!-- animate.css cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    wow = new WOW(
      {
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
      }
    )
    wow.init();
  </script>
     <script src="jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="shortcut icon" href="" type="image/x-icon">
  <style>
  
  </style>
  <script>
      $(document).ready(function () {
            $("#popup1").click(function () {
                swal("REGISTRATION SUCCESSFULL!", "You clicked the button!", "success");
            });
            $("#popup2").click(function () {
                swal("LOGIN SUCCESSFULL!", "You clicked the button!", "success");
            });
          
        });
    </script>

  </script>
</head>

<body >
 

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
    <a class="navbar-brand" href="#">
      <img src="https://iconape.com/wp-content/png_logo_vector/bright-comercial-logo.png" alt="" width="200" height="70">
    </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold; font-size: 13px;">HOME</a>
          </li>
          <li class="nav-item">
          
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="font-weight: bold; font-size: 13px;">
              LOGIN
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ACCESS YOUR ACCOUNT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" >
                    <form action="logincode.php" method="post" >
                      Mobile: <input type="number" name="mob"> <br>
                      Password: <input type="password" name="pass"> <br>
                     
                      <button class="btn btn-primary" id="popup2"><a href="i2.php"></a>Login</button>
                  </form>
                  </div>
                
                </div>
              </div>
            </div>
            
            <!-- Button trigger modal -->
          </li>
         
         
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="find.php" style="font-weight: bold;  font-size: 13px;">FIND JOBS</a>
          </li>
         
          <li class="nav-item">
          
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal1"  style="font-weight: bold; font-size: 13px;">
              REGISTRATION
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREATE YOUR ACCOUNT FOR FREE</h5>
                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="registercode.php" method="post" >
  Name: <input type="text" name="name"> <br>
  Mobile: <input type="number" name="mob"> <br>
  Password: <input type="password" name="pass"> <br><br>
  <button class="btn btn-primary" id="popup1">Save</button>
</form>
 
                  </div>
                
                </div>
              </div>
            </div>
            
            <!-- Button trigger modal -->
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="feed.php" style="font-weight: bold;  font-size: 13px;">FEEDBACK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="help.php" style="font-weight: bold;  font-size: 13px;">HELP CENTER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php" style="font-weight: bold;  font-size: 13px;">CONTACT US</a>
          </li>
         
         



         
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="font-weight: bold;  font-size: 13px;"><i
                class="bi bi-cart3"></i></a>
          </li>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  </div>
  </div>
  <!-- nav end  -->
  
         <div class="container">

          <video autoplay loop muted plays-inline class="background-clip">
          <source src="v1.mp4" type="video/mp4">
    </video>
         <div class="content">
          <h1>YOUR BRIGHT FUTURE STARTS HERE NOW </h1>
          <h4>Find your career or job on bright.com</h4>
          <a href="find.php">GET STARTED</a>
           

         </div>
         
             
         </div>
         
        
    <!-- content  -->
  <!-- main cont fluid div  -->
   </div> 

</body>

</html>