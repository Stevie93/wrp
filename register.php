<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebReceiptPro | Request Invitation</title>
  <link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</head>
<body>
<?php 
$phone = $business = $username = $contact_email = '';

?>
  <!-- Request Invitation section -->
  <section class="section" style="padding: 1rem 1.5rem;">
    <div class="container">
      <nav class="level" style="padding:10px; margin:20px; margin-top:5px;">

        <!-- Left side -->
        <div class="level-left">
          <div class="level-item">
            <a href="./index.php"><img src="./img/WebForge.png" width="250px" height="50px" alt=""></a>
            
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
          <p class="level-item heading">Already have an account?</p>
          <p class="level-item">
            <a href="./index.php#log" class="button is-primary">Log In</a></p>
          </div>
        </nav>
      </div>

      <!-- webreceiptpro form -->
      <div class="container" style="max-width:500px; padding:20px; background:#e6e4e4">
        <div class="level">
          <div class="level-item">
            <figure class="image is-96x96">
              <img src="./img/WebForge2.png">
            </figure>
          </div>
        </div>

        <!-- instructions -->

        <div class="has-text-centered">
          <p class="heading is-italic">1. Fill out the webreceiptpro form with your basic details</p>
          <p class="heading is-italic">2. A member will contact you and assit you to complete</p>
          <p class="heading is-italic">3. Feel free to call <a href=tel:+233203328141>020-3328-141</a> for assistance</p>
        </div>

        <br><br>

        <!-- main form -->
        <form action="email.php" method="post">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="text" placeholder="Full Name" name="username" value="<?php echo $username; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
            <p class="help is-dark">Enter Full Name</p>
          </div><br>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="email" placeholder="email" name="contact_email" value="<?php echo $contact_email; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
            <p class="help is-dark">Enter email</p>
          </div><br>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="number" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-phone"></i>
              </span>
            </p>
            <p class="help is-dark">Enter Phone Number</p>
          </div><br>
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="text" placeholder="Name of Business" name="business" value="<?php echo $business; ?>" required>
              <span class="icon is-small is-left">
                <i class="fas fa-shopping-basket"></i>
              </span>
            </p>
            <p class="help is-dark">Enter the offically recognised name of your business</p>
          </div>

          <br><br><br>

          <div class="buttons is-centered">
            <button type="submit" class="button is-primary" name="reg_user" >Request Invitations </button>
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