<?php require 'CONNECT.php'; ?> 

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                            <fieldset>
                                <label> NAME </label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="Artist_Name" required>
                            </div>
                            </fieldset>

                            <div class="form-group">
                            <fieldset>
                                <label> IMAGE UPLOAD </label>
                                    <input type="file"  class="form-control" name="Artist_Image" required>
                            </div>
                            </fieldset>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                            <input type="SUBMIT" class="btn btn-success btn-sm" name='S_SAVE' value ="SAVE"> 
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>            

<?php
error_reporting(0);
if(isset( $_POST['S_SAVE']))
{
    $Artist_Name = $_POST['Artist_Name'];
    
    $Artist_Image = $_FILES['Artist_Image']['name'];
    $IMG_LOC = $_FILES['Artist_Image']['tmp_name'];
    $IMG_EXT = pathinfo($Artist_Image,PATHINFO_EXTENSION);

    $IMG_DES = "Artist/".$uname.".".$IMG_EXT;
    
    move_uploaded_file($IMG_LOC, "Artist/". $Artist_Image);

    $query = "INSERT INTO artists (Artist_Name, Artist_Image) VALUES ('$Artist_Name','$Artist_Image')";

        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('ENTERED SUCCESSFULLY !!');</script>";
        }
}
?>