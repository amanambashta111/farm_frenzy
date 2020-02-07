<?php

/*session_start();
if(!isset ($_SESSION['user'])){
  header('location:index.html');
}*/
//if(array_key_exists('submit',$_POST)){
$conn = mysqli_connect('localhost','aman','aman','farm');
$contact = $_SESSION['user'];
    echo $contact;
$ctype = $_POST['ctype'];
$crops = $_POST['crop'];
$cropAmount = $_POST['cropAmount'];
$price = 11;//$_POST['amount'];

$query = "INSERT INTO crop
VALUES('$contact','$ctype','$crops','$cropAmount','$price')";
$res = mysqli_query($conn,$query);
    if($res){
        echo"hello";
    }
    else{
        echo"get";
    }
header("location:crops.php");


?>
<!DOCTYPE HTML>

<html>

<head>
    <title>My Crops</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="elements.js"></script>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>MY CROPS</strong></a>

                </header>
                <br>
                <!-- Content -->
                <section>
                    <header class="main">
                        <h1>MY CROPS</h1>
                        <hr class="bg-danger">
                    </header>
                </section>

                <section>
                    <form method="post">
                             <div class="field-wrap">
                            <label for="cropType">Crop Type</label>
                  <select class="box-size option-size" name="ctype" value = "ctype" placeholder = "ctype" onchange="fetchcities(this.value)">
                    <option value="ctype">select crop</option>
                          <option value="kharif ">Kharif</option>
                          <option value="rabi">Rabi</option>
                           <option value="zaid">Zaid</option>            
          </select>
                       
            <label for="cropName">Crop Name</label>
            <select class="option-size box-size" name="crop" id="crops">
              <option value="crops"> select crop type first</option>

            </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Select Quantity</label>
                            <input type="number" class="form-control" name="cropAmount" id="exampleInputPassword1" placeholder="Quantity in Kilograms">
                        </div>
                        
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1" >Price</label>
                            <input type="number" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Quantity in Kilograms">
                        </div>-->
                    
                        <div class="float-right">
                            <button type="submit" class="btn"><i class="fas fa-leaf fa-2x"></i>Add Crop </button>
                        </div>
                    </form>
                </section>

                    </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="profile.php">Your Profile</a></li>
                        <li><a href="crops.php">My Crops</a></li>
                        <li><a href="#">Transaction History</a></li>
                        <li><a href="#">Help Desk</a></li>
                        <li><a href="logout.php">Log Out</a></li>


                    </ul>
                </nav>




            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>