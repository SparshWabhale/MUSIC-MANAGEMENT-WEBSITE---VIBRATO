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
    <link rel="stylesheet" href="./style_song.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/albburtsev/jquery.typist/f4f429fad5bab374b1cf01da52ce4e469758afe6/dist/jquery.typist.min.js"></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="MAIN PAGE.php">VIBRATO</a>
    </nav>
    <SEction class="logo">
    <img src="PICTURES/1.png" alt="logo" style="width: 150px; height: 150px;">
    <img src="PICTURES/2.png" alt="vibrato" style="width: 330px; height: 100px;">
    </SEction>
    
    <hr>
    <div align="center">
        <h1>SONGS</h1>
        <br>
    </div>
        <?php if(isset($_GET['L_ID']))  ?>
        <?php
                error_reporting(0);
                $query2= "SELECT * FROM songs WHERE L_ID = ".$_GET['L_ID']."";
                $query_run2 = mysqli_query($conn,$query2);
            
                if($query_run2)
                {
                    while($row2=mysqli_fetch_assoc($query_run2)) {
                        $Song_Name = $row2['Song_Name'];
                        $Artist_Name = $row2['Artist_Name'];
                        $Language = $row2['Language'];
                        $Genre = $row2['Genre'];
                    ?>
                        <div class="song_card">
                                <img src="PICTURES/AUDIO.jpeg" alt="logo" style="width: 150px; height: 150px;">  
                                <h3> <?php echo $Song_Name; ?> </h3>  
                                <h3> <?php echo $Artist_Name; ?> </h3>
                                <h3> <?php echo $Language; ?> </h3>
                                <h3> <?php echo $Genre; ?> </h3> 
                            </div>
                        </div>
                <?php
            }
        }
    ?>
  </body>
</html>
<br>
<a href = "LANGUAGE.php" class="btn btn-success">BACK </a> 
<br><br>
            