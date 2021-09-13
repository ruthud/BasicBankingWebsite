<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<!-- HEADER SECTION -->
<header class="header">
   <div class="container header-flex-items">
     <div class="header-logo">
      <ul><b><li style="color:white;font-size:30px;">TSF Development Bank</ul></li></b>
     </div>
     <div class="hamburger">
       <div class="open">
         <img src="images/icons8-menu.svg" alt="hamburger" />
       </div>
       <div class="close">
        <img src="images/icons8-macos-close-30.png" alt="close" />
       </div>
     </div>
     <div class="header-navigation">
       <nav>
         <ul class="navbar">
           <li><a href="index.html">Home</a></li>
           <li><a href="transactionhistory.php">Transactions</a></li>
           <li><a href="transfermoney.php">Customers</a></li>
           <li><a href="index.html#about_us">About Us</a></li>
           
         </ul>
       </nav>
     </div>
   
   </div>
 </header>


<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="color:black">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"><button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="footer">
    <div class="container">
       <div class="footer-left">
         <div class="footer-images">
            <div class="element-one">
            </div>
            <div class="element-two">
              <a href="#"><img src="images/icon-facebook.svg" alt="facebook"></a>
              <a href="#"><img src="images/icon-youtube.svg" alt="youtube"></a>
              <a href="#"><img src="images/icon-twitter.svg" alt="twitter"></a>
              <a href="#"><img src="images/icon-pinterest.svg" alt="pinterest"></a>
              <a href="#"><img src="images/icon-instagram.svg" alt="instagram"></a>
            </div>
          </div>
          <div class="navlinks">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
            <ul>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-right">
        <p> <font color="#ffffff">Copyright &copy; 2021 Ruthu. All Rights Reserved</font></p>
        </div>
    </div>
 </footer>
<script src="js/script.js"></script>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<script src="js/script.js"></script>
</body>
</html>