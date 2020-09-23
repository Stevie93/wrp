<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
if(login_check($mysqli) == true) {
        // Add your protected page content here!
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebReceiptPro | Receipt</title>
  <link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  <script>
function myFunction() {
    location.reload();
}
</script>
</head>
<body>
  <!-- Request Invitation section -->
  <section class="section" style="padding: 1rem 1.5rem; background:#f5f5f5;">
    <div class="container">
      <nav class="level" style="padding:10px; margin:20px; margin-top:5px;">
        <!-- Left side -->
        <div class="level-left">
          <div class="level-item">
            <a href="dashboard.php"><img src="./img/WebForge.png" width="300px" alt=""></a>
            
          </div>
        </div>

        <!-- Right side -->
        <div class="level-right is-hidden-mobile">
        </div>
      </nav>
    </div>
    <div class="container" style="max-width:500px; padding:20px; background:#e6e4e4;">
      <div class="level">
        <div class="level-item">
          <figure class="image is-96x96">
            <img src="./img/WebForge2.png">
          </figure>
        </div>
      </div>
      
<form method="post" action="includes/submit.php">
      <br>
      <div class="field">
        <p class="help is-dark">Customer Information<span class="has-text-danger">*</span></p>
        <p class="control has-icons-left has-icons-right">
          <input class="input is-primary" type="text" placeholder="Akwasi Boadu" name = "clientname" required>
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
        </p>

      </div>
      <div class="field">
        <p class="control has-icons-left">
          <input class="input is-primary" type="number" placeholder="0203328141" name = "phone" required>
          <span class="icon is-small is-left">
            <i class="fas fa-phone"></i>
          </span>
        </p>
      </div><br>
      <div class="field">
        <p class="help is-dark">Purchase Summary<span class="has-text-danger">*</span></p>
        <p class="control has-icons-left has-icons-right">
          <input class="input is-primary" type="text" placeholder="Item/Service Sold" name = "item" required>
          <span class="icon is-small is-left">
            <i class="fas fa-shopping-basket"></i>
          </span>
        </p>
      </div>
      <div class="field is-horizontal">
        <div class="field-body">
          <div class="field has-addons">
            <p class="control">
              <a class="button is-static">
                ¢
              </a>
            </p>
            <p class="control">
              <input class="input is-primary" type="number" step="0.01" placeholder="Original Cost" name = "amount" required>
            </p>
          </div>
          <div class="field has-addons">
            <p class="control">
              <a class="button is-static">
                ¢
              </a>
            </p>
            <p class="control">
              <input class="input is-primary" type="number" step="0.01" placeholder="Amount Received" name = "received" required>
            </p>
          </div>
          
        </div>
      </div><br>

      <div class="field">
        <p class="help is-dark">Delivery Options<span class="has-text-danger">*</span></p>
        <div class="control has-icons-left">
          <div class="select is-primary">
            <select name = "product" required>
              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option>Pick-Up</option>
              <option>Delivery</option>
              <option>Not Applicable</option>
            </select>
          </div>
          <div class="icon is-small is-left">
            <i class="fa fa-shopping-bag "></i>
          </div>
        </div>
      </div>
      <div class="field">
        <p class="help is-dark">Comments (Optional) - Limit:30 Characters</p>
        <div class="control">
          <textarea maxlength="30" class="textarea is-primary" type="text" placeholder="Any other information" name = "comment"></textarea>
        </div>
      </div>
      <br><br>
      <div class="field is-grouped is-grouped-centered">
        <p class="control">
         <button type="submit" class="button is-primary" value=" Submit " >Submit</button>
         
        </p>
        <p class="control">
          <a class="button is-light" onclick="myFunction()">
            Cancel
          </a>
        </p>
      </div>
      </form>
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
            <li><a href="includes/logout.php">Log Out</a></li>
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
        echo 'You are not authorized to access this page, please login.';
}
?>
