<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f4dd3b6b5a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>index</title>

       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><b>DOLLIASE</b> </a> 
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="logins" style="display: flex; width: 100%; justify-content: flex-end;">           
                    <a class="btn btn-secondary" href="login.php" role="button">Login</a> &nbsp;
                    <a class="btn btn-secondary" href="register.php" role="button">Register</a>
              </div>
          </div>
    </nav>

    <div class='container'>
        <div class='row' style="justify-content: center; padding-top: 125px; padding-bottom: 125px; margin-bottom: 5px;">
            <div class=' col-xl-5 p-5' style='margin-top: 40px;'>
                <h4 class='form-judul text-center' style='color: sandybrown;'><b> Form Masukan</b></h4>
                
                <form method="post" action="addpesan.php">

                    <div class='form-group'>
                        <label for="name">Your Name</label>
                        <input type="text" class='form-control'  name="name" placeholder="Your name..">
                    </div>

                    <div class='form-group'>
                    <label>Email</label>
                    <input type='email' class='form-control' name='email' placeholder='Alamat E-mail Anda' id='e-mail'>
                    </div>
            
                    <div class='form-grpup'>
                    <label>Pesan Anda</label>
                    <textarea class='form-control' name='message' rows='5' placeholder='Masukan anda' id='pesan'></textarea>
                    </div> 
                    <br>
                    <button type='submit' class='btn btn-primary'>Submit</button>
                </form>
            </div>
      
            <div class='col-xl-5 p-5'  style='margin-top: 40px; '>
                <h4 style="color: sandybrown; text-align: center; margin-top:100px">Anda juga bisa menghubungi kami melalui cara menghubungi nomor dibawah ini.</h4>
                <p style="text-align: center;">Nomor Telepon: 089654092550</p>
            </div>
      
        </div>
      </div>

</body>

<footer class="footer-07" style="margin-top:80px">
  <div class="container">
    <div class="row justify-content-center">
      <div class="menu col-md-12 text-center">
        <h2 class="footer-heading"><a href="#" class="logo"><b>DOLLIASE</b></a></h2>
          <p class="option">
            <a class="link" href="index.php">Home |</a>
            <a class="link" href="aboutus.html">About</a>
            <a class="link" href="contact.php">| Contact</a>
          </p>

        <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>


      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="copyright">
          Copyright ©<script>document.write(new Date().getFullYear());</script>
        </p>
      </div>
    </div>
  </div>
</footer>
</html>