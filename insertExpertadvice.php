<?php
// Include the database configuration file 
include_once 'dbConfig.php';

if (isset($_FILES["file"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $language = $_POST["Language"];
    $address = $_POST["textarea"];
    $fileName = $_FILES["file"]["name"];
    $tmpname = $_FILES['file']['tmp_name'];
    $folder = "img/" . $fileName;
    $insert = $db->query("INSERT INTO expert_data(name,email,mobile,language,queries,file) VALUES ('$name','$email','$mobile','$language','$address','$fileName')");
    if ($insert) {
        if (move_uploaded_file($tmpname, $folder))
            echo "Your Question was sent successfully." . "<br>" . "Our Expert Team reach you by email or call.";
    } else {
        echo "files upload failed, please try again.";
    }
} else {
    echo "Please select an files file to upload.";
}
?>