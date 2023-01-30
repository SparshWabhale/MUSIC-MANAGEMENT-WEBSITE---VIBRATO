<?php require 'CONNECT.php'; ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIBRATO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/albburtsev/jquery.typist/f4f429fad5bab374b1cf01da52ce4e469758afe6/dist/jquery.typist.min.js"></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="LOGIN.php">VIBRATO</a>
    </nav>
    <img src="PICTURES/1.png" alt="logo" style="width: 150px; height: 150px;">
    <img src="PICTURES/2.png" alt="vibrato" style="width: 330px; height: 100px;">
    <div align="center">
      <div class="container-fluid">
      <form action="" method="POST">
            <div class="form-group">
                <div class="col-4" >
                    <input type="text" name="NAME" placeholder="Whats your name?" class="form-control" autocomplete="off">
                    <p class="text-danger"><?php if(isset($errors['N'])) echo $errors['N']; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input type="text" name="USER_NAME" placeholder="Enter your Username" class="form-control" autocomplete="off">
                    <p class="text-danger"><?php if(isset($errors['U'])) echo $errors['U']; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input type="email" name="EMAIL" placeholder="Enter your Email" class="form-control" autocomplete="off">
                    <p class="text-danger"><?php if(isset($errors['E'])) echo $errors['E']; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input type="password" name="U_PASSWORD" placeholder="Password" class="form-control" autocomplete="off">
                    <p class="text-danger"><?php if(isset($errors['P'])) echo $errors['P']; ?></p>
                </div>
            </div>
                <button type="SUBMIT" class="btn btn-success" name="REG" style="margin:10px;">REGISTER</button>
                <a href='LOGIN.PHP' class="btn btn-success" style="margin:12px;">LOGIN</a>
        </form>
        </div>
      </div>
      <br><br><br>
    </div>
  </body>
</html>

<?php
if(isset( $_POST['REG']))
{
    $NAME = $_POST['NAME'];
    $USER_NAME = $_POST['USER_NAME'];
    $EMAIL = $_POST['EMAIL'];
    $U_PASSWORD = $_POST['U_PASSWORD'];

    $errors= array();
    
    if(empty($NAME))
    { $errors['N'] = "NAME REQUIRED"; }

    if(empty($USER_NAME))
    { $errors['U'] = "USER NAME REQUIRED"; }

    if(empty($EMAIL))
    { $errors['E'] = "EMAIL REQUIRED"; }

    if(empty($U_PASSWORD))
    { $errors['P'] = "PASSWORD REQUIRED"; }


    if(count($errors)==0)
    {
      $query = "INSERT account (NAME,USER_NAME,EMAIL,U_PASSWORD) VALUES ('$NAME','$USER_NAME','$EMAIL','$U_PASSWORD')";
    
      if(mysqli_query($conn,$query))
      {
          echo"<script>alert('REGISTERED SUCCESSFULLY !!');</script>";
      }
      else
      {
         echo "ERROR".$query."<br>". mysqli_error($conn);
      }
    }
}  