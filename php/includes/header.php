<?php
// header.php - included in all php pages
?><!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?php echo $title ?? 'Bumenze Grocery'; ?></title><link rel="stylesheet" href="../style.css"></head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <div class="brand"><img src="../images/logo.png" alt="Bumenze"><strong>BUMENZE GROCERY</strong></div>
    <nav>
      <ul>
        <li><a href="/php/index.php">Home</a></li>
        <li><a href="/php/about.php">About</a></li>
        <li><a href="/php/products.php">Products</a></li>
        <li><a href="/php/contact.php">Contact</a></li>
        <li><a href="/php/cart.php" class="cart-link">Cart <span id="cart-count">0</span></a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="container">
