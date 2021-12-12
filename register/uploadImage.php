<?php
// 1 $_FILES["img"] array
// slug
$target_dir = "../uploads/images/";

//get extension of image by giving image
function getExtension($imageName)
{
    return strtolower(pathinfo($GLOBALS['target_dir'] . basename($imageName), PATHINFO_EXTENSION));
}
//generateImgName by giving extension, prefix and postfix
function generateImgName($imageFileType, $prefix, $postfix)
{
    return $prefix . "_" . time() . uniqid(rand()) . "_" . $postfix . "." . $imageFileType;
}
// calling other function and upload images
function checkAndUpload($name, $type, $tmp_name, $size, $slug, $postfix)
{
    global $target_dir;
    $imageFileType = getExtension($name);
    $imgName = generateImgName($imageFileType, $slug, $postfix);
    // $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $target_file = $target_dir . $imgName;
    //counter flag for check error while uploading image
    $uploadOk = 1;
    // Check file size
    if ($size > 5000000) {
        echo "<br />$imgName Sorry, your file is too large.<br />";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "<br />$imgName Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo " <br />$imgName Sorry, your file was not uploaded.<br />";

        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($tmp_name, $target_file)) {
            echo "<br />The file " . htmlspecialchars($imgName) . " has been uploaded.<br />";
            return $imgName;
        } else {
            echo "<br />problem in uplading  your file $imgName <br />";
            die();
        }
    }
}

function uploadImage($image, $slug, $postfix)
{
    if (is_array($image["name"])) {
        $imgArray = [];
        for ($i = 0; $i < count($image['name']); $i++) {
            $imgArray[$i] = checkAndUpload($image['name'][$i], $image['type'][$i], $image['tmp_name'][$i], $image['size'][$i], $slug, $postfix);
        }
        return $imgArray;
    } else {
        return checkAndUpload($image['name'], $image['type'], $image['tmp_name'], $image['size'], $slug, $postfix);
    }
}
