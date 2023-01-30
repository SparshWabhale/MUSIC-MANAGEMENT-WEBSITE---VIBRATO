<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIBRATO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./style3.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/albburtsev/jquery.typist/f4f429fad5bab374b1cf01da52ce4e469758afe6/dist/jquery.typist.min.js"></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="MAIN PAGE.php">VIBRATO</a>
    </nav>
    </section>
    <img src="PICTURES/1.png" alt="logo" style="width: 150px; height: 150px;">
    <img src="PICTURES/2.png" alt="vibrato" style="width: 330px; height: 100px;">
    <div align="center">
      <form action="" method="POST">
        <div class="container-fluid">
            <button type="submit" class="btn btn-success" name="SONGS">SONGS</button>
            <button type="submit" class="btn btn-success" name="ARTISTS">ARTISTS</button>
            <button type="submit" class="btn btn-success" name="LANGUAGE">LANGUAGE</button>
            <button type="submit" class="btn btn-success" name="GENRE">GENRE</button>
        </div>
       </form>
      </div>
    </section>
  </body>
</html>

<?php
if(isset($_POST['SONGS']))
{
    header('Location: SONGS.php');
}
else if(isset($_POST['ARTISTS']))
{
    header('Location: ARTISTS.php');
}
else if(isset($_POST['LANGUAGE']))
{
    header('Location: LANGUAGE.php');
}
else if(isset($_POST['GENRE']))
{
    header('Location: GENRE.php');
}
?>
