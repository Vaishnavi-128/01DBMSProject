<?php
if(isset($_POST["submit"])) {
  $file = $_FILES["image"];
  $fileName = $file["name"];
  $fileTmpName = $file["tmp_name"];
  $fileSize = $file["size"];
  $fileError = $file["error"];
  $fileType = $file["type"];

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("jpg", "jpeg", "png");

  if(in_array($fileActualExt, $allowed)) {
    if($fileError === 0) {
      if($fileSize < 500000) {
        $fileNameNew = uniqid("", true).".".$fileActualExt;
        $fileDestination = "uploads/".$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);

        // Redirect the user back to the gallery page
        header("Location: index.html");
        exit();
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload files of this type!";
  }
}
?>
