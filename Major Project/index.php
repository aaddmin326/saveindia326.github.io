<?php
session_start();
if(!isset($_SESSION['d_user'])){
   ?>
   <script>
         location.replace('login.php');
   </script>
   <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav Bar</title>
    <script src="https://kit.fontawesome.com/c11d013803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">DonateX</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Service</a></li>
            
            <li><a href="contact.php">Feedback</a></li>
            <li><a> <?php echo $_SESSION['d_user'] ?>   </a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="main">
        <div class="content">
            <h1>SAVE FOOD<br><span>SAVE</span> <br>LIFE</h1>
            <p class="par">Our organisation is based on the website 
               <br>collect the extra food from different programs, hotels, restaurants and also from households
                <br> The extra food is being distributed among the beggars and street children</p>

                <button class="cn"><a href="https://chat.whatsapp.com/IBOCEWyPncHFx1HnwssePN">JOIN US</a></button>
        </div>
        <div class="center">
            <label for="" class="close-btn fas fa-times"> </label>
            <h1>Services</h1>
            <form action="service1.php" method="POST">
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Full name</label>
                </div>
               <div class="txt_field">
                <input type="text" name="mobile" required>
                <span></span>
                <label>Mobile no</label>
            </div>
            <div class="txt_field">
                <input type="number" name="num" required>
                <span></span>
                <label>Food Quantity in KG</label>
            </div>
               <div class="txt_field">
                   <input type="text"  name="text" required>
                   <span></span>
                   <label>Address</label>
               </div>
               <div class="txt_field">
                <input type="text"  name="type" required>
                <span></span>
                <label>Veg or Non-Veg</label>
            </div>
            <div class="txt_field">
                <input type="text"  name="dtype" required>
                <span></span>
                <label>Services</label>
            </div>
                <input type="submit"  name="service" value="Submit">
            </form>
   
        </div>

           <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </div>
    
</body>
</html>