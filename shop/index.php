
<?php 
$pageTitle = "Top Pop Card | Shop";
$descCont = "A complete gallery of all our bottle openers";
$section = "shop";

require_once("../inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

  <body>
  <div class="panel mancard-shop-panel">
    <div class="row shop-mancard">
      <h2>Man Card</h2>
    </div>
  <div class="row">
    <div class="small-12 small-centered large-6 large-uncentered columns">
      <ul class="clearing-thumbs clearing-feature man-border" data-clearing>
        <li class="clearing-featured-img"><a href="<?php echo BASE_URL; ?>img/man-card.jpg"><img src="<?php echo BASE_URL; ?>img/man-card.jpg"></a></li>
        <li><a href="<?php echo BASE_URL; ?>img/Man-Card-Open.jpg"><img src="<?php echo BASE_URL; ?>img/Man-Card-Open.jpg"></a></li>
        <li><a href="<?php echo BASE_URL; ?>img/man-card-wallet.jpg"><img src="<?php echo BASE_URL; ?>img/man-card-wallet.jpg"></a></li>
      </ul>
    </div>
    <div class="large-6 columns mancard-info">
      <p>The Mancard bottle opener is a 36 gauge stainless steel bottle opener that fits 
         in your wallet.  Complete with manly mustache.  Never leave home without it! - 
         $10
      </p>
      <a href="#" class="button radius expand">Buy Me</a>
  </div>
  </div>
</div>

<!-- ace card section -->

<div class="row shop-ace-card">
      <h2>Ace of Dimonds</h2>
    </div>
  <div class="row ace-container">
    
    <div class="large-6 columns">
      <ul class="clearing-thumbs clearing-feature ace-border" data-clearing>
        <li class="clearing-featured-img"><a href="<?php echo BASE_URL; ?>img/man-card.jpg"><img src="<?php echo BASE_URL; ?>img/man-card.jpg"></a></li>
        <li><a href="<?php echo BASE_URL; ?>img/Man-Card-Open.jpg"><img src="<?php echo BASE_URL; ?>img/Man-Card-Open.jpg"></a></li>
        <li><a href="<?php echo BASE_URL; ?>img/man-card-wallet.jpg"><img src="<?php echo BASE_URL; ?>img/man-card-wallet.jpg"></a></li>
      </ul>
    </div>
    <div class="large-6 columns mancard-info">
      <p>The Mancard bottle opener is a 36 gauge stainless steel bottle opener that fits 
         in your wallet.  Complete with manly mustache.  Never leave home without it! - 
         $10
      </p>
      <a href="#" class="button radius expand ace-button">Buy Me</a>
  </div>
    
  </div>
    
<?php include(ROOT_PATH . 'inc/footer.php'); ?>