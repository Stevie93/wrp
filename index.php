<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebReceiptPro</title>
  <link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
</head>
<body>

 
  <!-- top section -->
  <section id="top" class="hero is-dark is-bold is-fullheight">

    <!-- hero-head -->
    <div class="hero-head">
      <div class="container">
        <nav class="level is-mobile" style="padding:10px; margin:20px; margin-top:5px;">
          <p class="level-item has-text-centered"><a href="#how" class="link is-dark">How it works</a></p>
          <p class="level-item has-text-centered"><a href="#log" class="link is-dark">Log In</a></p>
          <p class="level-item has-text-centered is-hidden-mobile"><img src="./img/WebForgeneg.png" width="250px" height="50px" alt=""></p>
          <p class="level-item has-text-centered"><a href="register.php" target="_blank" class="link is-dark">Sign Up</a></p>
          <p class="level-item has-text-centered"><a href="#contact" class="link is-dark">Contact Us</a></p>
        </nav>
      </div>
    </div>

    <!-- hero-body -->
    <div class="hero-body">
      <div class="container is-desktop">
        <div class="columns">
          <div class="column is-1">
          </div>
          <div class="column">
            <br class="is-hidden-mobile"><br class="is-hidden-mobile">
            <h1 class="title is-size-1 has-text-warning">WebReceiptPro</h1>
            <p class="subtitle has-text-weight-light is-size-6">
              powered by <a href="https://webforgegh.com"><strong class="has-text-info">Webforge Technologies</strong></a>
            </p>
            <p class="is-size-5">We are changing the everyday way you keep accounting records and manage customers.</p>
            <br><br>
            <div class="level is-mobile">
              <span class="level-item icon is-large has-text-danger">
                <p class="heading has-text-light">electronic receipt delivery</p>
                <i class="fas fa-3x fa-comments"></i>
              </span>
              <span class="level-item icon is-large has-text-success">
                <p class="heading has-text-light">Customer Management tool</p>
                <i class="fas fa-3x fa-users"></i>
              </span>
            </div>
          </div>
          <div class="column is-one-third is-hidden-mobile" style="margin-left:3rem; margin-right:-3rem;">
            <figure class="image">
              <img src="./img/signup.png">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- how it works section -->
  <section id="how"class="section is-medium has-text-centered" style="background:#e6e6e6;">
    <div class="container">
      <h1 class="title is-size-1">Easily create, send, and analyze receipts</h1>
      <br>
    </div>

    <!-- tiles -->
    <div class="container is-desktop">
      <div class="tile is-ancestor">
        <div class="tile is-vertical">
          <div class="tile">
            <div class="tile is-parent is-vertical">
              <article class="tile is-child notification is-danger">
                <p class="title">1</p>
                <span class="level-item icon is-large has-text-white" style="margin-left: auto; margin-right: auto;">
                  <i class="fas fa-2x fa-list-alt"></i>
                </span>
                <br>
                <p class="subtitle">Fill out the purchase form, after customer makes purchase and submit</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-link">
                <p class="title">2</p>
                <span class="level-item icon is-large has-text-white" style="margin-left: auto; margin-right: auto;">
                  <i class="fas fa-2x fa-comments"></i>
                </span>
                <br>
                <p class="subtitle">Customer intantly receives an SMS receipt, giving him details of items purchased</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-success">
                <p class="title">3</p>
                <span class="level-item icon is-large has-text-white" style="margin-left: auto; margin-right: auto;">
                  <i class="fas fa-2x fa-file"></i>
                </span>
                <br>
                <p class="subtitle">Datasheet is automatically updated with transaction details and customer records</p>
              </article>
            </div>
          </div>  
        </div>
      </div>
    </div>


    <div class="container">
      <h2 class="subtitle">
        Go paperless and save the <strong>PLANET!</strong>
      </h2><br><br>
      <a href="dashboard.php" class="button is-primary">Get Started</a>
    </div>
  </section>

  <!-- how it works sub section -->
  <section class="section" style="margin:0; padding:0;">
    <div class="container is-fullhd">
      <div class="columns">

        <!-- left column -->
        <div class="column" style="background:#e68b50;">
          <div class="columns">
            <div class="column is-2">
            </div>
            <div class="column has-text-centered" style="margin:10px;">
              <br>
              <span class="level-item icon is-large has-text-grey-lighter" style="margin-left: auto; margin-right: auto;">
                <i class="fas fa-3x fa-mobile"></i>
              </span>
              <br>
              <p class="title has-text-light is-size-4">Access WebReceiptPro from any device</p>
              <br>
              <p class="subtitle has-text-light is-size-6">Send receipts from your mobile device and check on your datasheet from anywhere.</p>
              <br>
            </div>
            <div class="column is-2">
            </div>
          </div>
        </div>

        <!-- right column -->
        <div class="column" style="background:#015a82;">
          <div class="columns">
            <div class="column is-2">
            </div>
            <div class="column has-text-centered" style="margin:10px;">
              <br>
              <span class="level-item icon is-large has-text-grey-lighter" style="margin-left: auto; margin-right: auto;">
                <i class="fas fa-3x fa-lock"></i>
              </span>
              <br>
              <p class="title has-text-light is-size-4">Protect your data</p>
              <br>
              <p class="subtitle has-text-light is-size-6">We value your privacy and hold ourselves to world-class data security standards.</p>
              <br>
            </div>
            <div class="column is-2">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- login section -->
  <section id="log" class="section is-medium">
    <div class="container">
      <nav class="level" style="padding:10px; margin:20px;">

        <!-- Left side -->
        <div class="level-left is-hidden-mobile">
          <div class="level-item">
            <img src="./img/WebForge.png" width="250px" height="50px" alt="">
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
          <p class="level-item heading">No account?</p>
          <p class="level-item"><a href="./register.php" target="_blank" class="button is-primary">Request Invitation</a></p>
        </div>
      </nav>
    </div>

    <!-- main login area -->
     
    <form action="includes/process_login.php" method="post" name="login_form"> 
      <div class="container" style="max-width:500px; padding:20px; background:#e6e4e4">
      <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?><br><br>
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="name" placeholder="Shop Name" name="shop">
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
          </span>
        </p>
      </div>
      <br><br>
      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="password" placeholder="Password" name="password">
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
      </div>
      <br>
      <div>
      <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                 //       echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>
      </div>
      <br>
      <div class="buttons is-centered">
         <button type="submit" class="button is-primary" value=" Login " onclick="formhash(this.form, this.form.password);" >Login</button>
      </div>
    </div>
    </form>
       
  </section>

  <!-- contact us section -->
  <section id="contact" class="hero is-info is-bold">

    <!-- address area -->
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
            <li class="is-active"><a href="#top">Back to the top</a></li>
            <li><a href="#how">How it works</a></li>
            <li><a href="#log">Log In</a></li>
            <li><a href="./register.php" target="_blank">Request Invitation</a></li>
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