<?php

// look where it is come from
if(isset($_POST["MailName"])) {
  
$CarMeet_mail = "carmeetproject2020@gmail.com";
$customer_name = $_POST['name'];
$customer_mail = $_POST['email'];
$customer_headers = "From: CarMeet Webshop " . $CarMeet_mail;

  switch ($_POST["MailName"]) {
    case "ContactForm":
      $dontSendMail = FALSE;

      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $customer_subject = "Je contactaanvraag over: " . $subject . " ingediend";
      $customer_body = "Wij zullen onderstaande bericht zo snel mogelijk uw mail beantwoorden.<br><br>" . $message;
      $customer_body .= "<br><br>Met Vriendelijke Groet,<br>Team CarMeet";

      $CarMeet_subject = "Klantvraag van " . $customer_name;
      $CarMeet_body = "Mailadres klant: " . $customer_mail . "<br>die stelde onderstaande vraag<br><br>" . $message;
      $CarMeet_headers = "From: Contactformulier " . $CarMeet_mail;
      break;
    
    // case "OrderConfirm":
    //   $dontSendMail = FALSE;

    //   $order_id = $_POST["id"];
    //   $product_id = $_POST["product_id"];
    //   $product_name = $_POST["product_name"];
    //   $qty = $_POST["qty"];

    //   $customer_subject = "Order Bevestiging#" . $order_id;
    //   $customer_body = "<h1>Bedankt voor je bestelling</h1><br>";
    //   $customer_body = "we hopen je snel weer te zien op onze site<br>";
    //   $customer_body = "Met Vriendelijke Groet,<br>Team CarMeet";

    //   $CarMeet_subject = "Nieuwe Bestelling van" . $customer_name;
    //   $CarMeet_body = $order_id . " " . $product_name . " " . $qty_ordered;
    //   $CarMeet_headers = "From: Nieuwe Order" . $CarMeet_mail;
    //   break;

    default:
      $dontSendMail = TRUE;
      break;
  }

} else {
  echo "er is een fout opgetreden";
  exit();
}

if($dontSendMail != TRUE) {

  // send mail to customer
  mail($customer_mail, $customer_subject, $customer_body, $customer_headers);

  // send mail to CarMeet team
  mail($CarMeet_mail, $CarMeet_subject, $CarMeet_body, $CarMeet_headers);

  header("Location: ../../index.php?action=contact&al=mail&suc=1");
} else {
  header("Location: ../../index.php?action=contact&al=mail&suc=0");
}



?>