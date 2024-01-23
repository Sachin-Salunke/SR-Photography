<?php
// Check if the request contains a file
if (isset($_FILES['photo'])) {
    $file = $_FILES['photo'];

    // Specify the target directory to save the file
    $targetDirectory = "photos/";

    // Create the target directory if it doesn't exist
    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    // Generate a unique file name for the uploaded photo
    $filename = uniqid() . '_' . $file['name'];

    // Construct the target path to save the file
    $targetPath = $targetDirectory . $filename;

    // Move the uploaded file to the target path
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        // File saved successfully
        $photoURL = 'http://localhost/photos/' . $filename;
        echo $photoURL;
    } else {
        // Failed to save the file
        echo "Error: Failed to save the photo.";
    }
} else {
    // No file uploaded
    echo "Error: No file uploaded.";
}
?>
