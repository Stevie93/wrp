<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

if (isset($_SESSION['username'])) :

$ourname = $_SESSION['username'];

endif;

if(login_check($mysqli) == true) {

        // Add your protected page content here!
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebReceiptPro | Datasheet</title>
	<link rel="shortcut icon" href="./img/WebForge2.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</head>
<body>
</body>
<!-- header section -->


<section class="hero is-light is-bold is-medium">
  <div class="hero-head">
   <div class="container">
    <nav class="level" style="padding:10px; margin:20px; margin-top:5px;">
     <!-- Left side -->
     <div class="level-left">
      <div class="level-item">
       <a href="dashboard.php"><img src="./img/WebForge.png" width="250px" height="50px" alt=""></a>
     </div>
   </div>

   <!-- Right side -->
   <div class="level-right">
    <p class="level-item heading">powered by <strong><a href="https://webforgegh.com"> Webforge Technologies</a></strong></p>
    <p class="level-item"><a href="includes/logout.php" class="button is-primary is-small">Log Out</a></p>
  </div>
</nav>
</div>
</div>

<!-- table area -->
<div class="hero-body" style="padding-top:80px;">	
  <div class="container">
    <table class="table is-fullwidth is-striped is-hoverable">
      <thead>
        <tr>
          <th><abbr title="Client Name">Client</abbr></th>
 <!--         <th>Reference</th> -->
          <th>Phone</th>
          <th>Item</th>
          <th>Option</abbr></th>
          <th>Timestamp</th>
          <th>Value</abbr></th>
          <th>Paid</th>
          <th>Outstanding</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th><abbr title="Client Name">Client</abbr></th>
<!--          <th>Reference</th> -->
          <th>Phone</th>
          <th>Item</th>
          <th>Option</abbr></th>
          <th>Timestamp</th>
          <th>Value</abbr></th>
          <th>Paid</th>
          <th>Outstanding</th>
        </tr>
      </tfoot>
       <tbody>
         <?php

$servername = "localhost";
$username = "webfocfm_noza";
$password = "paa93!!!";
$dbname = "webfocfm_wrp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM data WHERE shop='$ourname'";
  $result1 = mysqli_query($conn, $query);
}

               while ($row = mysqli_fetch_array($result1)) {
                   echo "<tr>";
                   echo "<td>".$row['client']."</td>";
       //            echo "<td>".$row['reference']."</td>";
                   echo "<td>".$row['phone']."</td>";
                   echo "<td>".$row['item']."</td>";
                   echo "<td>".$row['product']."</td>";
                   echo "<td>".$row['reg_date']."</td>";
                   echo "<td>".$row['amount']."</td>";
                   $amount = $row['amount'];
                   $outstanding = $row['outstanding'];
                   $paid = $amount-$outstanding;
                   echo "<td>".$paid."</td>";
                   echo "<td>".$row['outstanding']."</td>";
                   if ($row['outstanding']>0){
                   echo "<td><a href='payoff.php?id=" . $row['id'] . "'><i class='fas fa-calculator'></i></a></td>";}
                   echo "</tr>";
               }

            ?>
      </tbody>
    </table>
    <?php mysqli_close($conn); ?>
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
</html>
<?php
/*
} else { 
        echo 'You are not authorized to access this page, please login.';
}

 ?> */