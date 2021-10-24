<?php 
    include "../conn.php";
    if(isset($_POST['register'])){
        $firm_name = $_POST['firm_name'];//
        $whatsapp = $_POST['whatsapp'];
        $address = $_POST['address'];//
        $pincode = $_POST['pincode'];
        $number = $_POST['number'];
        $subhead = $_POST['subhead'];//
        $remark = $_POST['remark'];
        $link = $_POST['link'];
        //  $status = $_POST['status'];
        $name = $_POST['userName'];
         $location_link = $_POST['location_link'];
       echo $sql = "INSERT INTO listmeon (firm_name,whatsapp,address,pincode,number,subhead,remark,link,name,location_link) VALUES('$firm_name','$whatsapp','$address','$pincode','$number','$subhead','$remark','$link','$name','$location_link')";
       if(mysqli_query($conn,$sql)){
        //    echo "data is inserted";
           header("Location: ./index.php?msg=Data is inserted");
       }else{
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

    

?>