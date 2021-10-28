
<?php
include 'config.php';
error_reporting(0);

session_start();
if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $member = $_POST['member'];
    $package = $_POST['package'];
    
    $sql = "INSERT INTO trip_detail(name,city,phone,email,member,package) VALUES('$name','$city','$phone','$email','$member','$package')";
    
   if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Package Booked.')</script>";
            $name = "";
			$email = "";
            $city="";
            $member="";
            $package="";
    }
    echo $sql,mysqli_error($conn);   
}

?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="DetailForm.css">
    <title>

    </title>
</head>

<body>
<a href="../website-frontend/web.php"> Back To Home </a>
    <div class="form">
        <h1>Welcome to Booking Form <?php echo $_SESSION['username'];?></h1>
    </div>
    <div class="main">
        <form action="" method="POST">
            <input class="eyn" type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <input class="eyc" type="text" name="city" id="city" placeholder="Enter Your city" required>
            <input class="eycn" type="phone" name="phone" id="phone" placeholder="Enter Your Contact No" required>
            <input class="hmpw" type="number" name="member" id="hperson" placeholder="How many person want to go" required>
            <select class="packeg" id="Packeg" name="package">
                <option value="Packeg">Select Packages(INR)</option>
                <option value="first">1. Glorious Gujarat</option>
                <option value="second">2. Gir National Park </option>
                <option value="third">3. Safari Ride </option>
                <option value="forth">4.Finest Gujarat  </option>
                <option value="fifth">5.Gujarat Temples </option>
                <option value="seventh">6.Explore Gujarat </option>
                <option value="eighth">7.Incredible Gujarat</option>
                </select>
            <input type="submit" value="Pay Now" name="btn" class="btn">
        </form>
    </div>
</body>

</html>
