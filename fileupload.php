<?php
?>
<form action="fileupload.php" method="post" enctype="multipart/form-data">  
Select File:  
<input type="file" name="fileToUpload"/>  
<input type="submit" value="Upload Image" name="submit"/>  
</form>  
<?php  
if(isset($_POST["submit"])){
$target_path = "assets/images/user/";
  
$target_path = $target_path.basename( $_FILES['image']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
}
?>