<?php
    include("database.php");
    if(isset($_POST['key'])) {
        $key = $_POST['key'];
        $output = '';

        if(!isset($_POST['star']) && !isset($_POST['price'])) {
            $sql = "SELECT * FROM hotels WHERE MATCH(City) AGAINST ('".$key."' IN NATURAL LANGUAGE MODE)";
        }
        else if (isset($_POST['star'])) {
            if(isset($_POST['price'])) {
                $star = $_POST['star'];
                $price = $_POST['price'];
                $sql = "SELECT * FROM hotels WHERE MATCH(City) AGAINST ('".$key."' IN NATURAL LANGUAGE MODE) AND Star_category = ".$star. " AND Single_value < ".$price;
            }
            else {
                $star = $_POST['star'];
                $sql = "SELECT * FROM hotels WHERE MATCH(City) AGAINST ('".$key."' IN NATURAL LANGUAGE MODE) AND Star_category = ".$star;
            }
        }
        else if (isset($_POST['price'])) {
                $price = $_POST['price'];
                $sql = "SELECT * FROM hotels WHERE MATCH(City) AGAINST ('".$key."' IN NATURAL LANGUAGE MODE) AND Single_value < ".$price;
        }
        $query = mysqli_query($conn,$sql);
        if(!$query) {
            $output .= $conn->error;
        }
        if (mysqli_num_rows($query)==0){
            $output .= "No Hotels Available here";
        }
        else {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['Id'];
                $name = $row['Name'];
                $address = $row['Address'];
                $star = $row['Star_category'];
                $single_value = $row['Single_value'];
                $double_value = $row['Double_value'];
                $family_value = $row['Family_value'];
                $exterier = $row['ExterierView'];
                $link = $row['Link'];

                $output .= "<li id='search_result'>
                    <div id='image_exterier_div'>
                        <img src='../DataImages/$link/$exterier'>
                    </div>
                    <div id='hotel_info'>
                        <a href='view.php?id=".$id."'><b>".$name."</b></a>
                        <p><b>Address:</b><br/> ".$address." <br/><br/><b>Star Category:</b> ".$star."</p>
                    </div>
                </li>";
            }
        }
        echo $output;
    }
?>