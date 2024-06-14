<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDirectory = 'uploads/';
        $uploadFile = $uploadDirectory . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Image uploaded successfully!";
            
            // Pass the uploaded image path to the PDF generation script
            header("Location: generate_pdf.php?image=".$uploadFile);
            exit();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No image file uploaded.";
    }
}
?>