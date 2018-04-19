<?php
    include("database.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM hotels WHERE Id = '$id'";
    $query = mysqli_query($conn,$sql);

    if($query) {
        $row = mysqli_fetch_array($query);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Hotel</title>
    <link href="https://fonts.googleapis.com/css?family=Padauk" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../design/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
     <div class="container">
        <div id="header">
            <h2><?php echo $row['Name'] ?></h2>
        </div>
    </div>
    <div id="main">
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../DataImages/<?php echo $row['Link'].'/'.$row['ExterierView']; ?>" style="width:100%">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="../DataImages/<?php echo $row['Link'].'/'.$row['RoomView1']; ?>" style="width:100%">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="../DataImages/<?php echo $row['Link'].'/'.$row['RoomView2']; ?>" style="width:100%">
              <div class="text">Caption Three</div>
            </div>

        </div>
        <br>
        <div style="text-align:center" id="image_div">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <hr>
        <div id="description">
            <h2>Details : </h2>
            <table id="description_table">
                <tr>
                    <th colspan="2"><b>Description : </b></th>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $row['Description']; ?></td>
                </tr>
                <tr>
                    <th colspan="2"><b>Address : </b></th>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $row['Address']; ?></td>
                </tr>
            </table>
            <table id="description_table2">
                <tr>
                    <th><b>City : </b></th>
                    <td><?php echo $row['City']; ?></td>
                </tr>
                <tr>
                    <th><b>State : </b></th>
                    <td><?php echo $row['State']; ?></td>
                </tr>
                <tr>
                    <th><b>Country : </b></th>
                    <td><?php echo $row['Country']; ?></td>
                </tr>
                <tr>
                    <th><b>Pincode : </b></th>
                    <td><?php echo $row['Pincode']; ?></td>
                </tr>
                <tr>
                    <th><b>Contacts : </b></th>
                    <td><?php echo $row['Mobile']; ?></td>
                </tr>
                <tr>
                    <th><b>Pincode : </b></th>
                    <td><?php echo $row['Pincode']; ?></td>
                </tr>
                <tr>
                    <th><b>Single Room rate : </b></th>
                    <td><?php echo $row['Single_value']; ?></td>
                </tr>
                <tr>
                    <th><b>Double Room rate : </b></th>
                    <td><?php echo $row['Double_value']; ?></td>
                </tr>
                <tr>
                    <th><b>Family Room rate : </b></th>
                    <td><?php echo $row['Family_value']; ?></td>
                </tr>
            </table>
            <button id="book_button">Book</button>
        </div>
    </div>
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html>