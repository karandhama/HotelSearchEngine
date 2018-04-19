<?php
    include("database.php");
    $name = $_POST['name'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $mobile = $_POST['mobile'];
    $star = $_POST['star'];
    $single_value = $_POST['single_value'];
    $double_value = $_POST['double_value'];
    $family_value = $_POST['family_value'];
    $description = $_POST['description'];
    $exterior = $_POST['img1'];
    $room_1 = $_POST['img2'];
    $room_2 = $_POST['img3'];
    $link = $_POST['hotel_id'];

    $sql = "INSERT INTO hotels(Name,Address,State,Country,City,Pincode,Mobile,Star_category,Single_value,
Double_value,Family_value,Description,ExterierView,RoomView1,RoomView2,Link) VALUES('$name','$address',
'$state','$country','$city','$pincode','$mobile','$star','$single_value','$double_value',
'$family_value','$description','$exterior','$room_1','$room_2','$link')";
    $result = mysqli_query($conn,$sql);

    if($result) {
        //echo "Inserted";
    }
    else {
        $result = $conn->error;
    }

    echo $result;
?>