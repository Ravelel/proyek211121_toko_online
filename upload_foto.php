<?php

$target_dir = "Product_img/";
$target_file = $target_dir.basename($_FILES["product_photo"]["name"]);
$uploadOk = true;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

    if(isset($_POST["submit"])) {
    
        $check = getimagesize($_FILES["product_photo"]["tmp_name"]);
    
        if($check !== false) {
        
            echo "File is an image - ".$check["mime"].".";
            $uploadOk = true;
    
        } else {
            
            echo "File is not an image.";
            $uploadOk = false;
        
        }
    }
    
    if (file_exists($target_file)) {
    
        echo "Sorry, file already exists.";
        $uploadOk = false;
}
  
  // Check file size
  
  if ($_FILES["product_photo"]["size"] > 500000) {
    
    echo "Sorry, your file is too large.";
    $uploadOk = false;

}
  
  // Allow certain file formats
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = false;
}
  

?>