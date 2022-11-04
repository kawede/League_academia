<?php include('header.php') ?>
<section class="w3l-service-breadcrum" style="background-color:black;">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
        <h2>Contact</h2>
      <p><a href="accueil">accueil</a> &nbsp; / &nbsp; contact</p>
   </div>
  </div>
</section>
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
	<div class="contacts-main">
		
		<div class="form-41-mian py-5">
			<?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($email) && !empty($nom) && !empty($message)) {
                  # code...
               $myqwery=$db->prepare("INSERT INTO contact(email,nom,message) VALUES(:email,:nom,:message)");
                 $myqwery->execute(array(
                 ':email'   =>  $email,
                 ':nom'   =>  $nom,
                 ':message'   =>  $message
                    ));
                 
                 if ($myqwery){
                 echo '<b style="background-color:green;" class="text-white text-center alert  alert-dismissible fade show" role="alert"><i class="fa fa-check" aria-hidden="true"></i>  Enregistrement reusi
                 <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                  else{
                 echo '<b class="text-white text-center alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-check" aria-hidden="true"></i>  Veuillez remplir tous les champs
                 <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> </b>';
                  }
                   $email =$_POST['email'];
	                $from = "www.info@leagueacademia.org";
	                $name ='League Academia';
	                $subject = 'League Academia';
	                $number = 'www.leagueacademia.org';
	                $cmessage = 'Bonjour "'.$nom.'"';
	                $headers = "From: $from";
	                $headers = "From: " . $from . "\r\n";
	                $headers .= " ". $from . "\r\n";
	                $headers .= "MIME-Version: 1.0\r\n";
	                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	                $csubject = "Confirmation email.";
	                $logo = './assets/images/AGA_(12).jpg';
	                $link = 'www.info@bridgeconnexions.com';
                  $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
                  $body .= "<table style='width: 100%;'>";
                  $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
                  // $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
                  $body .= "</td></tr></thead><tbody><tr>";
                  $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
                  $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
                  $body .= "</tr>";
                  $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
                  $body .= "<tr><td></td></tr>";
                  $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
                  $body .= "</tbody></table>";
                  $body .= "</body></html>";
                  if (mail($email, $subject, $body, $headers)) {
                    // echo 'Email envoyé avec succes';
                    }else{
                    // echo 'Erreur du systeme de messagerie';
                    }
                 }
         
          ?>
			<div class="container py-md-3">
				<h3 class="cont-head">Restez en contact</h3>		
				<div class="d-grid align-form-map">
					<div class="form-inner-cont">
						
						<form action="" method="post" class="main-input">
							 <input type="email" required="" placeholder="Email" name="email" id="w3lName" required="">
							<input type="text" required="" placeholder="Nom complet" name="nom" id="w3lName" required="">
							<textarea required="" placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
							<div class="text-right">
								<button type="submit" class="btn btn-theme3" name="btninscrit"style="background-color: rgb(101,179,254); border:3px solid rgb(101,179,254)">Envoyer maintenant</button>
							</div>
						</form>
					</div>
					
					<div class="contact-right">
						<img src="assets/images/liver.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="contant11-top-bg py-5">
			<div class="container py-md-3">
				<div class="d-grid contact section-gap">
					<div class="contact-info-left d-grid text-center">
						<div class="contact-info">
							<div id="img">
                  <a class="twitter-timeline" href="https://twitter.com/LeagueAcademia" data-widget-id="275430111547887616" style="width: 50px; height: `50px;">Tweets by league academia</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </div>
						</div>
						<div class="contact-info">
							<div id="fb-root"></div>
			                  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="lAZfDa0G"></script>
			                  <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100064068996688" data-tabs="timeline" data-width="750px" data-height="670px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/profile.php?id=100064068996688" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100064068996688"></a></blockquote></div>
						</div>
				
					</div>
				</div>
			</div>
		</div>

</section>
<?php include('footer.php') ?>