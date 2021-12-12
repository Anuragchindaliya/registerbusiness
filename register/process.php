<?php
include "../conn.php";
include_once "./uploadImage.php";
if (isset($_POST['register'])) {
    // echo print_r($_FILES['firm_logo']);

    $firm_name = $_POST['firm_name']; //
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address']; //
    $pincode = $_POST['pincode'];
    $number = $_POST['number'];
    $subhead = $_POST['subhead']; //
    $remark = $_POST['remark'];
    // $img = $_FILES['img']['name'];
    $slug = $_POST['slug'];

    // $otherImg = $_FILES['otherImg']['name'];
    //  $status = $_POST['status'];
    $name = $_POST['userName'];
    $location_link = $_POST['location_link'];
    $email = $_POST['email'];
    if ($firm_logo = uploadImage($_FILES['firm_logo'], $slug, "logo")) {

        echo $sql = "INSERT INTO listmeon (firm_name,whatsapp,address,pincode,number,subhead,remark,img,name,location_link,email,slug) VALUES('$firm_name','$whatsapp','$address','$pincode','$number','$subhead','$remark','$firm_logo','$name','$location_link','$email','$slug')";
        if ($res = mysqli_query($conn, $sql)) {

            if ($otherImgs = uploadImage($_FILES['otherImg'], $slug, "gallery")) {
                $userId = mysqli_insert_id($conn);
                foreach ($otherImgs as $currentImg) {
                    echo $imageUploadSql = "INSERT INTO `listmeon_images`(`uid`, `img_link`) VALUES ('$userId','$currentImg')";
                    if (mysqli_query($conn, $imageUploadSql)) {
                        header("location: ../index.php?upload=success");
                    } else {
                        echo "Error in inserting gallery images";
                    }
                }
            } else {
                echo "error in uploading gallery images";
            }
        } else {
            echo "not inserted";
        }
    } else {
        echo $errorMsg =  "Sorry, there was an error uploading your file.";
        header("location:../index.php?msg=$errorMsg");
    }
}
