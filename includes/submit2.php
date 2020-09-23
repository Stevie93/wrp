<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();

if (isset($_SESSION['username'])) :

$ourname = "NozaBank";

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
$query = "SELECT * FROM users WHERE shop='$ourname'";
  $result1 = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));;




endif;
 $result = $phone = $item = $amount = $message = $clientname = $product = $outstanding = $reference = $comment = $year = $received = '';
 
  if (!empty($_REQUEST["phone"])) {
        $phone = ($_REQUEST["phone"]);    
    }  
 if (!empty($_REQUEST["item"])) {
        $item = ($_REQUEST["item"]);    
    }
   if (!empty($_REQUEST["amount"])) {
        $amount = ($_REQUEST["amount"]);    
    }
    if (!empty($_REQUEST["clientname"])) {
        $clientname = ($_REQUEST["clientname"]);    
    }
    if (!empty($_REQUEST["product"])) {
        $product = ($_REQUEST["product"]);    
    }
    if (!empty($_REQUEST["outstanding"])) {
        $outstanding = ($_REQUEST["outstanding"]);    
    }
    if (!empty($_REQUEST["reference"])) {
        $reference = ($_REQUEST["reference"]);    
    }
    if (!empty($_REQUEST["comment"])) {
        $comment = ($_REQUEST["comment"]);    
    }
    if (!empty($_REQUEST["received"])) {
        $received = ($_REQUEST["received"]);    
    }
    
    $amount = trim($amount);
    $received = trim($received);
    $outstanding = $amount - $received;
    $item = trim($item);
    $phone = trim($phone);
    $comment = trim($comment);

    $year = date("Y-m-d");
     $day = substr($year, 8, 2); 
    $month = substr($year, 5, 2);
    $year1 = substr($year, 0, 4);
    
        $clientname = trim($clientname);
   
    $cnspace = substr_count($clientname, ' ');

    switch ($cnspace) {
        case 0:
            $clientname1 = substr($clientname, 0, 3);
            break;
        case 1:
            $words = explode(" ", $clientname);
            $output = substr($words[0], 0, 2) . substr($words[1], 0, 1);
            $clientname1 = $output;
            break;

        case 2:
            $cname1 = explode(" ", $clientname);
            $acronymc = "";
    
            foreach ($cname1 as $c) {
                if (!empty($c)) {
                    $acronymc .= $c[0];
                }
            }
            $cn1 = implode('', $cname1);
            $clientname1 = substr($acronymc, 0, 3);
            break;

        case 3:
             $patterns = array();
            $patterns[0] = '/and /';
            $patterns[1] = '/of /';
            $patterns[2] = '/for /';
            $replacements = array();
            $replacements[2] = ' ';
            $replacements[1] = '';
            $replacements[0] = '';
            $nclientname = preg_replace($patterns, $replacements, $clientname);
       

            $cname1 = explode(" ", $nclientname);
            $acronymc = "";
    
            foreach ($cname1 as $c) {
                if (!empty($c)) {
                    $acronymc .= $c[0];
                }
            }
            $cn1 = implode('', $cname1);
            $clientname1 = substr($acronymc, 0, 3);
            break;
 
        default:
            $patterns = array();
            $patterns[0] = '/of /';
            $patterns[1] = '/and /';
            $patterns[2] = '/the /';
            $patterns[3] = '/for /';
            $replacements = array();
            $replacements[3] = ' ';
            $replacements[2] = '';
            $replacements[1] = '';
            $replacements[0] = '';
            $nclientname = preg_replace($patterns, $replacements, $clientname);
       

            $cname1 = explode(" ", $nclientname);
            $acronymc = "";
    
            foreach ($cname1 as $c) {
                if (!empty($c)) {
                    $acronymc .= $c[0];
                }
            }
            $cn1 = implode('', $cname1);
            $clientname1 = substr($acronymc, 0, 3);
            break;
    }
    
    $product = trim($product);
    $product1 = substr($product, 0, 3);
    
     $incremental  = mt_rand(11, 99);
     
      $serial1 = $clientname1.'/'.$product1.'/'. $incremental;
      
       $out1 = "Sales Reference Number ";
    $out2 = strtoupper($serial1);
    $out3 = $out1.': '.$out2;
    
    $newphone = substr($phone, 1, 9);
    $MOBILENUMBERS = '+233547763647';
   
    $recipients = array("yozohoje@cobin2hood.com");

                                  $to = implode(',', $recipients);
                                  $headers = "From: webreceipt@webforgegh.com \r\n";
                                  $email_subject = "Web Receipt";
  
                                  $message  = 'Your Acct XXXXXXX9494 has been credited with GHS 5,000.00'."\n";                            
                                  $message .= 'At this point i can add any other message i want but i dont have time'. "\n";
                                  /*$message .= 'Price: GHS ' . $amount . "\n";
                                  if ($outstanding>0){
                                  $message .= 'Paid: GHS '. $received. "\n";
                                  $message .= 'Outstanding: GHS ' . $outstanding. "\n";
                                  }
                                  if ($product != "Not Applicable"):
                                  $message .= 'Option: ' . $product . "\n";
                                  endif;
                                  $message .= 'Date: '. $year . "\n";
                                  $message .= $comment ."\n";
                                  $message .= "\n";
                                  if ($ourname == "Megmorrison"){
                                  $message .= "Thanks for doing business with MegMorrison Designs \n";
                                  }
                                  elseif ($ourname == "RijacoAutos"){
                                  $message .= "Contact 032249276 or 0322492616 for further enquiries \n";
                                  }
                                  elseif ($ourname == "AppleHub"){
                                  $message .= "Contact 0500013785 or 0245149050 for further enquiries \n";
                                  }
                                  else{ 
                                  
                                   while ($row = mysqli_fetch_array($result1)) {
 $phone_1= $row['phone_1'];
 $phone_2= $row['phone_2'];
 }
                                  $message .= "Contact 0".$phone_1." or 0".$phone_2." for further enquiries \n";
                                //  }
                                  $message .= 'powered by wrp.webforgegh.com' ;*/
                                


                                 $status = mail($to, $email_subject, $message, $headers);

				$ENCODEDMESSAGE=urlencode($message);
				
				$url = 'http://api.nalosolutions.com/bulksms/';

				$fields = array(
    					'username'      => "webforgegh",
				   	'password'      => "web1234567890",
					'type'          => "0",
    					'dlr'           => "1",
    					'destination'   => $MOBILENUMBERS,
    					'source'        => "NozaBank",
    					'message'       => $message
					);

				//open connection
				$ch = curl_init();

				//set the url, number of POST vars, POST data
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, count($fields));
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

				//execute post
				$result = curl_exec($ch);

				//close connection
				curl_close($ch);

				var_dump($result);
				
				 if ($status) {
				     
				      echo '<p>Receipt has been sent to </p>'.$MOBILENUMBERS;
                          echo '<p>Your File has been updated. Click <a href=../datasheet.php>here</a> to view</p>';
                          echo '<p>Click <a href=../receipt.php>here</a> to genereate another reference</p>';
                    } else {
                           echo '<p>Something went wrong, Please try again!</p>';
                    }
                    
           
            
?>