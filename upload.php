<!--  Author Name: Christophe Nshimiyimana.
                        GigHub Link: https://github.com/Christophe210
                        Visit My Website : tsindamedia.com -->


<?php 
// Specify the directory where the uploaded files will be stored
$uploadDirectory = 'img/';

// Check if a file was uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['file'];
    
    // Validate the file (example: allow only image files)
    $allowedTypes = ['image/jpeg', 'image/png'];
    if (!in_array($file['type'], $allowedTypes)) {
        echo 'Error: Only JPEG and PNG images are allowed.';
        exit;
    }
    
    // Generate a unique file name
    $fileName = uniqid() . '_' . $file['name'];
    
    // Move the uploaded file to the desired location
    if (move_uploaded_file($file['tmp_name'], $uploadDirectory . $fileName)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Error uploading file.';
    }
} else {
    echo 'No file uploaded.';
}
?>

<!--  Author Name: Christophe Nshimiyimana.
                        GigHub Link: https://github.com/Christophe210
                        Visit My Website : tsindamedia.com -->
