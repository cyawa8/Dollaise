<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Purchase Transaction</title>
     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</head>
<form method="post" action="addmember.php">
    <div class="container">

    <div class="row">
        <div class="col-6">
            <label for="exampleInputText1">First Name</label>
            <input type="text" class="form-control" name='fname' id="exampleInputText1" required>
        </div>

        <div class="col-6">
            <label for="exampleInputText2">Last Name</label>
            <input type="text" class="form-control" name='lname' id="exampleInputText2" required>
        </div>
    </div>

    <div class="form-date" style="margin:2% 0%;">
        <label for="exampleInputDate1">Join Date</label>
        <input type="date" id="datemin" name="datemin" name='date' min="1500-01-02" class="form-control">
    </div>

    <div class="form-group">
            <label for="exampleInputText1">Address</label>
            <input type="text" class="form-control" name='alamat' id="exampleInputText1" required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <button type="submit" name='btnsubmit' class="btn btn-primary">ADD</button>
    </div> 
</form>
<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Member ID</th>
        <th>Name</th>
        <th>Join Date</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
            $sql = "SELECT * FROM `tb_member` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)  
            {
                while($row = $result->fetch_assoc()) 
                {
                    $mem_id = $row['member_id'];
                    $lname = $row['member_lname'];
                    $fname = $row['member_fname'];
                    $name = $fname.' '.$lname;
                    $date = $row['member_date'];
                    $address = $row['member_address'];
                    $email = $row['member_email'];
                    print("<tr>");
                    printf('<td>%s</td>',$mem_id);
                    printf('<td>%s</td>',$name);
                    printf('<td>%s</td>',$date);
                    printf('<td>%s</td>',$address);
                    printf('<td>%s</td>',$email);
                    printf('<td><a href="updatemember.php?member_id=%s"><b>UPDATE</b></a> | <a href="deletemember.php?member_id=%s"><b>DELETE</b></a></td>',$mem_id,$mem_id);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
</div>
</body>
</html>