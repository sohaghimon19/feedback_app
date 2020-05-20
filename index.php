<!doctype html>
<html lang="de">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
 
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147063632-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147063632-1');
</script>

   <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dein Feedback ist uns wichtig!">
     <!-- favicon link -->
     <link rel="shortcut icon" type="image/png" href="img/faviconLogoTRBC.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawseom Icon CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  
   <title>Dein Feedback</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
  <body>
         <div class="container main-wrap">
              <header class="social-links">
                    <div class="social-links-items pt-3 pb-3">
                      <a href="https://www.facebook.com/TheRoyalBarberClub/" target="_blank"><i class="fab fa-facebook"></i>Like uns auf Facebook</a><br>
                      <a href="https://www.instagram.com/the_royal_barber_club/" target="_blank"><i id="instagram" class="fab fa-instagram"></i>Folg uns auf Instagram</a>
                    </div>
              </header>
                  <!-- .social-links-->
                  <div class="main-content text-center mt-5 mb-5">
                    <div class="app-logo"><a href="https://www.trbc-bhv.com/" target="_blank"><img src="img/Logo-ohne-HG.png" class="img-fluid" alt="logo"></a></div>
                          <h1 class="mt-5">Bist du mit unserem<br>Service heute zufrieden?</h1>
                    <div class="emojis-link mt-5">
                      <a href="#" id="button2"><img src="img/smiley.png" class="emojis-img" alt=""></a>
                      <a href="#" id="button1"><img src="img/angry.png" class="emojis-img" alt=""></a>
                    </div>
                   </div>
                   <!-- .main-content -->
                  <footer class="footer-items text-center pt-2 pb-2">
                      <span>Powered by    <a href="https://rating-star.de" target="_blank"><img src="img/Favicon-RS.png" class="img-fluid" alt="logo"></a></span><br>
                      <a class="mr-3" href="Datenschutzerklaerung.html" target="_blank">Datenschutz</a>
                      <a href="Impressum.html" target="_blank">Impressum</a>
                  </footer>
          </div>

            
            <!-- Modal section1 starts -->
                  <div class="bg-modal text-center" id="modal-contact-form">
                    <div class="modal-content">
                        <div class="modal-header pt-3 pb-3">
                          <h5>Danke für deine Hilfe!</h5>
                          <div class="close" id="close-1">+</div>
                        </div>
                        <div class="modal-body">
                             <p>
							 <h5>Was können wir verbessern?</h5>
							 </p>
                             <div id="error"></div>
                             <form name="contactform" id="form" method="post" action="mail.php">
                               <textarea name="comments" id="comments" cols="70" rows="3" placeholder="Dein Feedback" class="form-control mb-2"></textarea>
                               <input name="full_name" id="full_name" type="text"  maxlength="30" size="20" class="form-control mb-2" placeholder="Name  [optional]">
                               <input name="email" id="email" type="text"  maxlength="30" size="20" class="form-control mb-2" placeholder="E-Mail-Adresse  [optional]">
                               <input id="submit" type="submit" value="Senden" class="btn btn btn-lg main-button">
							               </form>
                        </div>
                        <div class="modal-footer pt-4 text-white">
                            <p>Du kannst uns auch <a href="https://search.google.com/local/writereview?placeid=ChIJwcCA0gSxtkcRJf90YPc0YMg" target="_blank" class="text-white">auf Google</a> bewerten</p>
                        </div>
                    </div>
                  </div>
             <!-- Modal section1 ends -->

             <!-- Modal section2 starts -->
             <div class="bg-modal text-center" id="modal-review-link">
              <div class="modal-content">
                  <div class="modal-header pt-3 pb-3">
                    <h5>Unterstütz uns mit deiner Empfehlung!</h5>
                    <div class="close" id="close-2">+</div>
                  </div>
                  <div class="modal2-body">
                       <a href="https://search.google.com/local/writereview?placeid=ChIJwcCA0gSxtkcRJf90YPc0YMg" target="_blank"><img src="img/Picture4.png" alt="Google" class="img-fluid"></a>
                  </div>
                  <div class="modal-footer pt-4">
                      <a href="https://search.google.com/local/writereview?placeid=ChIJwcCA0gSxtkcRJf90YPc0YMg" target="_blank" class="text-white font-weight-bold text-uppercase">Klick hier</a>
                  </div>
              </div>
            </div>
			
       <!-- Modal section2 ends -->
   
   
    <!-- Custom Js file -->
    <script src="js/app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>