<?php
function get_data()
{
    $message = $_POST['message'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $email = $_POST['email'];

    $file_name = 'blogs.json';

    if (file_exists($file_name)) {
        $current_data = file_get_contents($file_name);
        $array_data = json_decode($current_data, true);
        $image_path = uploadImage(); // Function to handle image upload

        $extra = array(
            'title' => $title,
            'author' => $author,
            'email' => $email,
            'message' => $message,
            'image' => $image_path, // Add image path to the data
        );

        $array_data[] = $extra;

        return json_encode($array_data, JSON_PRETTY_PRINT);
    } else {
        $data = array();
        $image_path = uploadImage(); // Function to handle image upload

        $data[] = array(
            'title' => $title,
            'author' => $author,
            'email' => $email,
            'message' => $message,
            'image' => $image_path,  // Add image path to the data
        );

        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
function uploadImage()
{
    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) { // Check if file input is set and not empty
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return "";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                return $target_file; // Return the path to be stored in the JSON
            } else {
                echo "Sorry, there was an error uploading your file.";
                return "";
            }
        }
    }

    // If no file is selected, return an empty string
    return "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = 'blogs.json';
    if (file_put_contents($file_name, get_data())) {
        echo 'success';
        // Redirect to the home page after successful submission
        header('Location: index.php');
        exit; // Make sure to exit after the redirect
    } else {
        echo 'There is some error';
    }
}
