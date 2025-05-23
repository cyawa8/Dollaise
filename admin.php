<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
<?php
 session_start();
?>
      

    <form action="/action_page.php">
        <div class="form-group" style="text-align:center; margin-top:15%">
            <b>
                <h2>
                    <label><?php echo $_SESSION['id'];?><br></label>
                    <div class="row">
                        <div class="col-6">
                            <label>Nama Lengkap&nbsp;: </label><?php echo $_SESSION['username'];?><br>
                        </div>
                        <div class="col-6">
                            <label>Email &nbsp; : </label><?php echo $_SESSION['email'];?>
                        </div>
                    </div>
                </h2>
            </b>
        </div>
    </form>
</body>
</html>