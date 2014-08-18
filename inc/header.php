<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content=<?php echo $descCont; ?>>
    <title><?php echo $pageTitle; ?></title>

    <!-- Foundation Script tags -->
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" href="stylesheets/foundation-icons.css" />
    <link rel="stylesheet" href="stylesheets/style.css" />

    <!--Javascript tags -->
    <script src="bower_components/modernizr/modernizr.js"></script> 
  </head>

  <header>

<!-- Main Header -->
    <div class="main_title">
      <h1>Top Pop Card</h1>
      <h3>Stainless Steel Bottle Openers</h3>
    </div>

    <!-- Navagation -->
  <div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar data-options="sticky_on: large">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Top Pop Card</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="index <?php if ($section == "index") {echo "active";} ?>"><a href="index.php">About</a></li>
      <li class="contact <?php if ($section == "contact") {echo "active";} ?>"><a href="contact.php">Contact</a></li>
      <li class="has-dropdown shop <?php if ($section == "shop") {echo "active";} ?>"><a href="shop.php">
        Shop</a>
        <ul class="dropdown">
          <li><a href="#">Man Card</a></li>
          <li><a href="#">Ace of Dimonds</a></li>
        </ul>
      </li>
    </ul>
    </nav>
    </div>

    <!-- Navagation End -->
  </header>