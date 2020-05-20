<?php

if (isset($_POST['email'])) {

  $email_to = "fb-trbc@rating-star.de";

  $email_subject = "Rating Star: Neues Kundenfeedback";

  //Errors to show if there is a problem in form fields.

  function died($error)
  
  {

    echo "Es tut uns leid, aber wir können deine Anfrage aufgrund folgender Fehler nicht bearbeiten.<br /><br />";

    echo $error . "<br /><br />";

    echo "Bitte geh zurück und behebe die Fehler.<br /><br />";

    die();
  }

  // validation expected data exists

  if (
    !isset($_POST['full_name']) ||

    
    !isset($_POST['email']) ||
    

    !isset($_POST['comments'])

    

  ) {

    died('Es tut uns leid, aber wir können deine Anfrage aufgrund eines Fehlers in den Angaben nicht bearbeiten');
  }

  $full_name = $_POST['full_name']; // Not required

 
  $email_from = $_POST['email']; // Not required
  

  $comments = $_POST['comments']; // required

  $error_message = "";

 

  $string_exp = "/^[A-Za-z .'-]+$/";
  
  if (strlen($comments) < 2) {

    $error_message .= 'Ungültiger Kommentar<br />';
  }
  

  if (strlen($error_message) > 0) {

    died($error_message);
  }


  $email_message = "Sie haben ein neues Feedback erhalten:\n\n";

  function clean_string($string)
  {

    $bad = array("content-type", "bcc:", "to:", "cc:", "href");

    return str_replace($bad, "", $string);
  }

  $email_message .= "Name: " . clean_string($full_name) . "\n";

  

  $email_message .= "E-Mail: " . clean_string($email_from) . "\n";

 

  $email_message .= "Kommentar: " . clean_string($comments) . "\n";

  // create email headers

  $headers = 'From: ' . $email_from . "\r\n" .

    'Reply-To: ' . $email_from . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

  @mail($email_to, $email_subject, $email_message, $headers);
  ?>

  <!-- Success message -->
 <!-- Modal section1 starts -->
      <div class="bg-modal text-center" style="display: block;">
              <div class="modal-content">
                  <div class="modal-header pt-5">
                   </div>
                  <div class="modal2-body pt-5 pb-5 font-weight-bold" style="color: #BFA161">
                      <h4>Vielen Dank! Dein Feedback wurde gesendet.</h4>
                  </div>
                  
                  <div class="modal-footer pt-5">
                      
                  </div>
              </div>
   </div>
       <!-- Modal section1 ends -->
  <!-- end message -->
<?php

}

?>
<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dein Feedback">
     <!-- favicon link -->
     <link rel="shortcut icon" type="image/png" href="img/faviconLogoTRBC.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawseom Icon CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  
   <title>Feedback</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>

<body>



    <!-- Custom Js file -->
    <script src="app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>