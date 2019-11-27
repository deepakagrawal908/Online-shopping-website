<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html  lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About Us || GLA Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">GLA Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>GLA Sports Shop is a project on E-Commerce Website. All products listed are good. This project just gives a preview to what a real world implementation of E-Commerce Website. Well if you do like the website then visit
        <a href="http://www.glauniversity.in" target="_blank" title="GLA SPORTS Solutions">GLA Sports Solutions</a>.</p>

        <p>Why BOLT? I am a big fan of Usain Bolt. He is diligent and tries to surpass his previous achievements. And lastly, it was an instant thought. So went for it.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; GLA Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







     </body>
</html>
