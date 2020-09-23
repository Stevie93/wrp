<?php
include_once 'includes/db_connect.php';
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

sec_session_start();
if(login_check($mysqli) == true) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebReceiptPro | Add Numbers</title>
  <link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  <script type="text/JavaScript" src="js/sha512.js"></script> 
  <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
<?php 
$phone = $business = $username = $contact_email = '';

?>
  <!-- Request Invitation section -->
  <section class="section" style="padding: 1rem 1.5rem;">
    
      <!-- webreceiptpro form -->
      <div class="container" style="max-width:500px; padding:20px; background:#e6e4e4">
        

        <!-- instructions -->

        <div class="has-text-centered">
          <p class="title">Add Your Business Lines</p>
        </div>

        <br>

        <br>

        <!-- main form -->
        <form method="POST" action="includes/add_numbers.php">
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="number" name="phone_1" placeholder="0203328141">   
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
            <p class="help is-dark">Phone 1</p>
          </div>
		<hr>
		<div class="field">
            <p class="control has-icons-left">
              <input class="input" type="number" name="phone_2" placeholder="0203328141">  
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
            <p class="help is-dark">Phone 2</p>
          </div>
		<br><br>
		

          <div class="buttons is-centered"> 
          <button type="submit" class="button is-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- contact us section -->
  <section id="contact" class="hero is-info is-bold">
    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          CONTACT US
        </h1>
        <div class="columns">
          <div class="column is-half">
            <h2 class="subtitle">
              <span class="icon has-text-danger" style="margin-left: auto; margin-right: auto;">
                <i class="fas fa-map-marker"></i>
              </span><br><br>
              <p>No. 1 South Loop</p>
              <p>Sunbird Stree</p>
              <p>Tesano</p>
              <p>Accra-Ghana</p>
            </h2>
          </div>
          <div class="column is-half">
            <h2 class="subtitle">
              <span class="icon has-text-warning" style="margin-left: auto; margin-right: auto;">
                <i class="fas fa-address-card"></i>
              </span><br><br>
              <p><i class="fa fa-globe"></i><a href="https://webforgegh.com"> www.webforgegh.com </a></p>
              <p><i class="fa fa-envelope has-text-dark"></i><a href="mailto:info@webforgegh.com"> info@webforgegh.com</a></p>
              <p><i class="fa fa-phone has-text-primary"></i><a href="tel:+233303328141"> 020-332-8141</a></p>
            </h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
      <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
          <ul>
            <li class="is-active"><a href="./index.php#top">Back To Homepage</a></li>
            <li><a href="./index.php#how">How It works</a></li>
            <li><a href="./index.php#log">Log In</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

  <!-- footer -->
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>WebReceiptPro</strong> is powered by <a href="https://webforgegh.com">Webforge Technologies</a>
        </p>
      </div>
    </div>
  </footer>

</body>
</html>
<?php

} else { 
        header('location: index.php#log');
}
?>