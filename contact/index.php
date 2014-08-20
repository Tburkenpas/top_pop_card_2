<?php 
require_once("../inc/config.php");

$pageTitle = "Contact Top Pop Card";
$descCont = "Leave us a quick message and we'll contact you shortly.";
$section = "contact";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" OR $email == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, and message.";
    }

    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Message: " . $message;

        $mail->SetFrom($email, $name);
        $address = "toppopcard@gmail.com";
        $mail->AddAddress($address, "Top Pop Card");
        $mail->Subject    = "Top Pop Contact Form Submission | " . $email;
        $mail->MsgHTML($email_body); 

        if($mail->Send()) {
            header("Location: " . BASE_URL . "contact/?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
}

include(ROOT_PATH . "inc/header.php");  ?>

  <body>

    <!-- Contact Socailmedia -->
    <div class="row contact-page">
      <div class="large-6 columns socail-column">
      <h3>Social Media</h3>
      <p>Follow us on Social Media.  Doing so will help you keep up on what Top Pop Card is up too.  We, currently have a facbook, twitter, and Youtube page.  So be sure to like, follow and subscribe!</p>
      <a href="#"><i class="fi-social-facebook social-media-icons"></i></a>
      <a href="#"><i class="fi-social-twitter social-media-icons"></i></a>
      <a href="#"><i class="fi-social-youtube social-media-icons"></i></a>
      </div>

      <div class="large-6 columns">
      <h3>Contact Form</h2>
      <p>Send us a message!  If you have a question about shipping, ebay, paypal, or really anything else, just fill out the form below.  We will get back to you within 48 hours!</p>

      <!-- PHP -->
          
          <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
            <p class="thankYouMessage">Thanks for the email! We'll get back to you in less than 48 hours!</p>
                <?php } else { ?>
        
          <?php
              if (!isset($error_message)) {
            echo    '<div class="contact_info">
                <p>Got a Question?  Having issues with shipping, or you just want to chat.  Send us a Message we will respond within 48 hours!</p>
              </div>';
              } else {
            echo '<p class="message">' . $error_message . '</p>';
              }
          ?>

          <!-- End PHP -->


       <form method="post" action="<?php echo BASE_URL; ?>contact/">
        <div class="row">
          <div class="large-12 columns">
            <label>Name
              <input type="text" name="name" placeholder="Name" id="name"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>E-mail
              <input type="text" name="email" placeholder="Email" id="email"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Message
            <textarea name="message" placeholder="Message"id="message"></textarea>
            </label>
            <div style="display: none;">
              <input type="text" name="address" id="address">
              <p>Please leave this field blank.</p> 
            </div> 
             <a href="#" class="button radius expand send-button" type="submit" value="send">Send</a>
          </div>
        </div>
      </form>
      <?php } ?>
      </div>
    </div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>