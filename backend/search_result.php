<?php
    $key = $_GET['key'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Search</title>
    <link rel="stylesheet" type="text/css" href="../design/search.css">
    <link href="https://fonts.googleapis.com/css?family=Padauk" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div id="header">
            <h2>Hotel Search Engine</h2>
            <div id="search_span">
                <input type="text" id="search_key" name="search_key" placeholder="Search Document Here" value="<?php echo $key; ?>">
                <i class="fa fa-search fa-lg" aria-hidden="true" id="search_icon"></i>
            </div>
        </div>
        <div id="main">
            <div id="filter">
                <h2>Filters</h2>
                <ul id="hotel_filter_ul">
                    <li>
                        <label>Hotel Class</label><br/>
                        <button id="category_1"><i class="far fa-star"></i>1</button>
                        <button id="category_2"><i class="far fa-star"></i>2</button>
                        <button id="category_3"><i class="far fa-star"></i>3</button>
                        <button id="category_4"><i class="far fa-star"></i>4</button>
                        <button id="category_5"><i class="far fa-star"></i>5</button>
                    </li>
                    <li>
                        <input type="radio" name="check" id="check_1" value="1000">&lt1000&emsp;<br/>
                        <input type="radio" name="check" id="check_2" value="2000">&lt2000&emsp;<br/>
                        <input type="radio" name="check" id="check_3" value="3000">&lt3000&emsp;<br/>
                        <input type="radio" name="check" id="check_4" value="4000">&lt4000&emsp;<br/>
                    </li>
                </ul>
                <input type="hidden" value="" id="filter_input">
            </div>
            <ul id="display_result"></ul>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        //var key = $("#search_key").val().replace(/,/g,'');
        var key;
        search();
        function search() {
            var key = $("#search_key").val().replace(/,/g,'');
            if(key!="") {
                $.ajax ({
                    url:"search.php",
                    method:"POST",
                    data:{key:key},
                    beforeSend: function() {
                        $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                    },
                    success: function(data) {
                        setTimeout(function(){
                            $("#display_result").html(data);
                        },2000);
                    },
                    error: function (error) {
                        alert(error.status);
                    }
                });
            }
        }
        $("#search_icon").click(function(){
            search();
        });
        $('#search_key').keyup(function(e) {
            if(e.keyCode == 13) {
                search();
            }
        });
        // star category 1
        $("#category_1").click(function() {
            var key = $("#search_key").val().replace(/,/g,'');
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{key:key,star:1},
                beforeSend: function() {
                    $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                },
                success: function(data) {
                    setTimeout(function(){
                        $("#display_result").html(data);
                        $("#filter_input").val(1);
                    },2000);
                },
                error: function (error) {
                    alert(error.status);
                }
            });
        });
        // star category 2
        $("#category_2").click(function() {
            var key = $("#search_key").val().replace(/,/g,'');
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{key:key,star:2},
                beforeSend: function() {
                    $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                },
                success: function(data) {
                    setTimeout(function(){
                        $("#display_result").html(data);
                        $("#filter_input").val(2);
                    },2000);
                },
                error: function (error) {
                    alert(error.status);
                }
            });
        });
        // star category 3
        $("#category_3").click(function() {
            var key = $("#search_key").val().replace(/,/g,'');
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{key:key,star:3},
                beforeSend: function() {
                    $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                },
                success: function(data) {
                    setTimeout(function(){
                        $("#display_result").html(data);
                        $("#filter_input").val(3);
                    },2000);
                },
                error: function (error) {
                    alert(error.status);
                }
            });
        });
        // star category 4
        $("#category_4").click(function() {
            var key = $("#search_key").val().replace(/,/g,'');
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{key:key,star:4},
                beforeSend: function() {
                    $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                },
                success: function(data) {
                    setTimeout(function(){
                        $("#display_result").html(data);
                        $("#filter_input").val(4);
                    },2000);
                },
                error: function (error) {
                    alert(error.status);
                }
            });
        });
        // star category 5
        $("#category_5").click(function() {
            var key = $("#search_key").val().replace(/,/g,'');
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{key:key,star:5},
                beforeSend: function() {
                    $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                },
                success: function(data) {
                    setTimeout(function(){
                        $("#display_result").html(data);
                        $("#filter_input").val(5);
                    },2000);
                },
                error: function (error) {
                    alert(error.status);
                }
            });
        });
        //checkbox..
        $('input[name="check"]').change( function() {
            var radioValue = $("input[name='check']:checked").val();
            var key = $("#search_key").val().replace(/,/g,'');
            if($("#filter_input").val()!="") {
                var star = $("#filter_input").val();
                alert(star);
                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{key:key,star:star,price:radioValue},
                    beforeSend: function() {
                        $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                    },
                    success: function(data) {
                        setTimeout(function(){
                            $("#display_result").html(data);
                        },2000);
                    },
                    error: function (error) {
                        alert(error.status);
                    }
                });
            }
            else {
                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{key:key,price:radioValue},
                    beforeSend: function() {
                        $("#display_result").html('<img src="../Images/Facebook.gif" alt="loading.." width="5%" style="display:block;margin:auto;"></img>');
                    },
                    success: function(data) {
                        setTimeout(function(){
                            $("#display_result").html(data);
                        },2000);
                    },
                    error: function (error) {
                        alert(error.status);
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('search_key');
      var autocomplete = new google.maps.places.Autocomplete(input);
   }
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAogGuCuiD6eAUWHiQgjkvptaKWeCQTPjs&libraries=places&callback=initialize" type="text/javascript"></script>
</html>