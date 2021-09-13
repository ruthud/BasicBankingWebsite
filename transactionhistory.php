<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
  <title>TSF Basic Banking System</title>

  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
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
     <div class="header-button">
      <a href="transfermoney.php"><button class="btn">Transact</button></a>
     </div>
   </div>
 </header>

 <script src="js/script.js"></script>
</body>
</html>
	<div class="container "  >
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

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
</body>
</html>