<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors

    if (isset($_FILES["file_insert"]) && $_FILES["file_insert"]["error"] == 0) {
        $target_dir = "upload/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file_insert"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed

        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory

            if (move_uploaded_file($_FILES["file_insert"]["tmp_name"], $target_file)) {

                // File upload success, now store information in the database
                $filename = $_FILES["file_insert"]["name"];
                $filesize = $_FILES["file_insert"]["size"];
                $filetype = $_FILES["file_insert"]["type"];

                // Database connection
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "crud";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert the file information into the database
                $sql = "INSERT INTO file_insert (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file " . basename($_FILES["file_insert"]["name"]) . " has been uploaded and the information has been stored in the database.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}


?>