<?php
include "../conn.php";
if (isset($_POST['register'])) {
    $firm_name = $_POST['firm_name']; //
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address']; //
    $pincode = $_POST['pincode'];
    $number = $_POST['number'];
    $subhead = $_POST['subhead']; //
    $remark = $_POST['remark'];
    $img = $_FILES['img']['name'];
    //  $status = $_POST['status'];
    $name = $_POST['userName'];
    $location_link = $_POST['location_link'];
    $email = $_POST['email'];
    $slug = $_POST['slug'];

    echo $sql = "INSERT INTO listmeon (firm_name,whatsapp,address,pincode,number,subhead,remark,img,name,location_link,email,slug) VALUES('$firm_name','$whatsapp','$address','$pincode','$number','$subhead','$remark','$img','$name','$location_link','$email','$slug')";
    if (mysqli_query($conn, $sql)) {
        //    echo "data is inserted";


        $target_dir = "../uploads/images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }

        // Check file size
        if ($_FILES["img"]["size"] > 500000) {
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
            die();
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                header("location: ../index.php?upload=success");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        // header("Location: ./index.php?msg=Data is inserted");
    } else {
        echo "not inserted";
    }


    //     $stmnt = $conn->prepare("INSERT INTO listmeon (firm_name,whatsapp,address,pincode,number,subhead,remark,link,status,name,location_link) VALUES(?,?,?,?,?,?,?,?,?,?,?");
    //     if(false==$stmnt){
    //         echo print_r($conn->query());
    //         die($conn->error);
    //     }
    //     $stmnt->bind_param("sssissssiss",$firm_name,$whatsapp,$address,$pincode,$number,$subhead,$remark,$link,$status,$name,$location_link);
    //     $stmnt->execute();
    //     echo "New records created successfully";

    //     $stmnt->close();
    //     $conn->close();
}
