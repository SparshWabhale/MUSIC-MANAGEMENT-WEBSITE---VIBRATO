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
    <Section class="logo">
    <img src="PICTURES/1.png" alt="logo" style="width: 150px; height: 150px;">
    <img src="PICTURES/2.png" alt="vibrato" style="width: 330px; height: 100px;">
    </SEction>
    
    <hr>
    <div align="center">
        <h1>SONGS</h1>
    <?php
            error_reporting(0);
            $query = "SELECT * FROM songs";
            $query_run = mysqli_query($conn,$query);
        
            if($query_run)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    $Song_Name = $row['Song_Name'];
                    $Artist_Name = $row['Artist_Name'];
                    $Language= $row['Language'];
                    $Genre = $row['Genre'];
                ?>
                    <div class="song_card"> 
                            <img src="PICTURES/AUDIO.jpeg" alt="logo" style="width: 150px; height: 150px;"> 
                            <h4 class="card-title"> Song Name : <?php echo $Song_Name; ?> </h4>
                            <h4 class="card-title"> Artist Name : <?php echo $Artist_Name; ?> </h4>
                            <h4 class="card-title"> Language : <?php echo $Language; ?> </h4>
                            <h4 class="card-title"> Genre : <?php echo $Genre; ?> </h4>
                            <br><br>
                    </div>
                <?php
                }
            }
            else
                {
                    echo "NO ONE FOUND !!";
                }
        ?>
  </body>
</html>