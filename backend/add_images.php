<?php
    $count = $_GET['count'];
    if($count==0) {
        $id = rand(100,99999);
        mkdir("../DataImages/".$id);
        if ($_FILES['exterior']['name']!='') {
            $test = explode('.',$_FILES['exterior']['name']);
            $extension = end($test);
            $link_name = rand(100,999).'.'.$extension;
            $location = '../DataImages/'.$id."/".$link_name;
            move_uploaded_file($_FILES['exterior']['tmp_name'], $location);
            echo $id." ".$link_name;
        }
    }
    else if($count==1) {
        $id = $_GET['hotel_id'];
        if ($_FILES['room_1']['name']!='') {
            $test = explode('.',$_FILES['room_1']['name']);
            $extension = end($test);
            $link_name = rand(100,999).'.'.$extension;
            $location = '../DataImages/'.$id."/".$link_name;
            move_uploaded_file($_FILES['room_1']['tmp_name'], $location);
            echo $link_name;
        }
    }
    else if($count==2) {
        $id = $_GET['hotel_id'];
        if ($_FILES['room_2']['name']!='') {
            $test = explode('.',$_FILES['room_2']['name']);
            $extension = end($test);
            $link_name = rand(100,999).'.'.$extension;
            $location = '../DataImages/'.$id."/".$link_name;
            move_uploaded_file($_FILES['room_2']['tmp_name'], $location);
            echo $link_name;
        }
    }
?>