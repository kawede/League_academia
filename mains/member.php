<?php include('header.php') ?>

<!-- contact form -->
<section class="col-md-12">
	<div class="container">
		<div class="form12 py-5 center">
			<?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($nom) && !empty($Email) && !empty($telephone)&& !empty($proffession)&& !empty($Adresse)&& !empty($categorie)&& !empty($message)) {
                  
                  # code...
               $myqwery=$db->prepare("INSERT INTO member(nom,Email,telephone,proffession,Adresse,categorie,message) VALUES(:nom,:Email,:telephone,:proffession,:Adresse,:categorie,:message)");
                 $myqwery->execute(array(
                 ':nom'   =>  $nom,
                 ':Email'   =>  $Email,
                 ':telephone'   =>  $telephone,
                 ':proffession'   =>  $proffession,
                 ':Adresse'   =>  $Adresse,
                 ':categorie'   =>  $categorie,
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
	                $from = "www.info@bridgeconnexions.com";
	                $name ='Bridge connexions';
	                $subject = 'Bridge Connexions';
	                $number = 'www.bridgeconnexions.com';
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
				<h3 class="cont-head">Devenir Membre</h3>
				
				<br>

				<div class="d-grid align-form-map">
					<div class="form-inner-cont">
						
						<form action="" method="post" class="main-input">
							<div class="top-inputs d-grid">
								<label style="color: black;font-weight: bold;">Nom complet <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Nom complet" name="nom"  required="">
								<br>
								<label style="color: black;font-weight: bold;">Email <span style="color: red;">*</span></label>
								<input type="email" class="form-control" required="" name="Email" placeholder="Email"  required="">
							</div>
							<br>
							<label style="color: black;font-weight: bold;">Telephone <span style="color: red;">*</span></label>
							<input type="phone" class="form-control" required="" placeholder="Phone Number" name="telephone"  required="">
							<br>
							<label style="color: black;font-weight: bold;">Proffession <span style="color: red;">*</span></label>
							<input type="text" class="form-control" placeholder="Profession" name="proffession"  required="">
							<br>
							<label style="color: black;font-weight: bold;">Adresse <span style="color: red;">*</span></label>
							<input type="text" class="form-control" required="" placeholder="Adresse" name="Adresse"  required="">
							<br>
							<label style="color: black;font-weight: bold;">Que voulez-vous devenir? <span style="color: red;">*</span></label>
							<select  class="form-control" style="font-family: candara;" required=""  rows="9" name="categorie" style="color:black; font-family: candara;" >
			                    <option value="-------------">----------------------</option>
			                    <option value="volontaire" style="font-family: candara;">Membre</option>
			                    <option value="volontaire" style="font-family: candara;">Volontaire</option>
			                  </select>
							<br>
							<label style="color: black;font-weight: bold;">Ta Motivation <span style="color: red;">*</span></label>
							<textarea placeholder="Message" required="" class="form-control" name="message"  required=""></textarea>
							<br>
							<div class="text-right">
								<button type="submit" class="btn btn-theme3" name="btninscrit" style="background-color: rgb(101,179,254); border:3px solid rgb(101,179,254)">Envoyer</button>
							</div>
						</form>
					</div>
				
				</div>
			</div>
	</div>
</section>
<?php include('footer.php') ?>