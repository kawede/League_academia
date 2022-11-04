<?php include('./admin_a/includes/_headersec.php');
  if(isset($_GET['id']) and !empty($_GET['id'])):
  $id=htmlspecialchars($_GET['id']);
  $myqwery=$db->prepare("SELECT article.id,article.date, article.image,article.titre, article.description,article.categorie as cat,article.poste_par,categorie.id as ids,categorie.designation FROM 
    article 
    INNER JOIN 
    categorie 
    ON article.categorie = categorie.id WHERE article.id=:id");
  $myqwery->execute(array(
  'id'=>$id
  ));
  if ($myqwery):
  $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
  // var_dump($data);
  if (!empty($data)):
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Ligue academia" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="www.ligueacademia.org" />
    <meta property="og:image" content="assets/images/academia1.jpg" />
    <title><?=$data[0]->titre;?></title>
    <!-- Shareable -->
    <meta property="og:title" content="<?=$data[0]->titre;?>" />
    <meta property="og:type" content="www.ligueacademia.org"/>
    <meta property="og:url" content="www.ligueacademia.com"/>
    <meta property="og:image" content="admin_a/images/<?= $data[0]->image;?>"/>
    <!--End Shareable-->
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="shortcut icon" href="assets/images/academia1.png">
  </head>
  <body>
<!-- Top Menu 1 -->
<!-- <section class="w3l-top-menu-1" >
  <div class="top-hd" style="background-color: rgb(101,179,254);">
    <div class="container">
  <header class="row">
    <div class="social-top col-lg-3 col-6">
      <li>Follow Us</li>
      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
      <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
    </div>
    <div class="accounts col-lg-9 col-6">
        <li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">+142 5897555</a> </li>
        
    </div>
    
  </header>
</div>
</div>
</section> -->
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg py-lg-2 py-2" style="background-color: rgb(101,179,254);font-size: 18px;">
    <div class="container">
      <a class="navbar-brand" href="accueil"><img src="assets/images/academia1.png" style="max-width:100px;"></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:rgb(101,179,254);" >
        <span class="navbar-toggler-icon fa fa-bars" style="color:white;"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="accueil" style="color: white; font-size: 20px;"><strong>Accueil</strong></a>
          </li>
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-size: 20px;"><strong> Recherches Scientifiques</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="" style="background-color:rgb(101,179,254);width:300px;">
          <a class="dropdown-item" href="activitesBlog.php?pages=1" style="color: white;">Education</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rapport" style="color: white;">Technologie</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="revues" style="color: white;">Gouvernance</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rapport" style="color: white;">Santés</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="revues" style="color: white;">Cohésion sociale</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rapport" style="color: white;">Emploi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="revues" style="color: white;">Environnement</a>
        </div>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: white;font-size: 20px;"><strong>Activités</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:rgb(101,179,254);width:150px;">
          <a class="dropdown-item" href="activitesBlog.php?pages=1" style="color: white;">Nos activités</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rapport" style="color: white;">Nos Raports</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="revues" style="color: white;">Nos Revues</a>
        </div>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="about" style="color: white;font-size: 20px;"><strong>A propos</strong> </a>
          </li>
          
          <!--  <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li> -->
        
          <li class="nav-item mr-0">
            <a class="nav-link" href="contact" style="color: white;font-size: 20px;"><strong>Contact</strong></a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>
<!-- <section class="w3l-about-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      
      <h2>About Us</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; About</p>
   
    </div>
  </div>
</section> -->
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5"> 
        <div class="container py-md-3">
           <h3 class="head"><?=$data[0]->titre;?></h3>
            <br>
            <div class="cwp4-two row">

                <div class="cwp4-text col-lg-8">
                    <img src="admin_a/images/<?= $data[0]->image;?>" class="img-fluid" width="100%;" height="300px;" alt="" />
                    <br>

                     
                    <br>
                    <p style="font-size:20px;"><?=$data[0]->description;?></p>
                    <hr>
                    <div class="alert alert-info alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <div style="font-size:20px; font-weight: bold; color:black;">Par: <?=$data[0]->poste_par;?></div>
                      <?=$data[0]->date;?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9 mb-3 mb-sm-0">
                        
                        <nav role="navigation">
                          <ul class="nav text-light">
                            <li class="nav-item mr-2 share_facebook" data-url="<?php echo('https:/www.ligueacademia.org/detail_article.php?id='.$_GET['id'])?>" style="background-color: rgb(93,117,161);; border-radius: 50%;"><a class="nav-link" href="" title="Facebook"><i class="fa fa-facebook"style="color:white;"></i><span class="menu-title sr-only">Facebook</span></a></li>
                            <li class="nav-item mr-2 share_twitter" data-url="<?php echo('https:/www.ligueacademia.org/detail_article.php?id='.$_GET['id'])?>" style="background-color: rgb(101,153,255);; border-radius: 50%;"><a class="nav-link" href="" title="Twitter"><i class="fa fa-twitter"style="color:white "></i><span class="menu-title sr-only" >Twitter</span></a></li>
                          </ul>
                        </nav>
                       
                      </div>
                   </div>
                   <hr>
                    <a class="btn btn-secondary btn-theme3 mt-3" href="member"style="border:2px solid white;background-color:rgb(101,179,254);"> Devenir membre</a>
                </div>
                <div class="cwp4-image col-lg-4 pl-lg-5 mt-lg-0 mt-5">
                          <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29" style="font-weight:bold;">Documents articles</h6>
                      <hr>
                      <?php 
                        $myqwery=$db->prepare("SELECT * FROM article_pdf WHERE id_article=:id_article");
                        $myqwery->execute(array("id_article"=>$id));
                        $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
                        if ($datas):
                        foreach($datas as $token1): 
                      ?>
                      <li class="media">
                          <a href="admin_a/documents/<?=$token1->image;?>"><img src="assets/svg/file.svg" class="mr-3 " width="100px" alt="..."></a>
                          <div class="media-body">
                           <a href="admin_a/document/<?=$token1->image;?>"><h6 class="mt-0 mb-1"><?=$token1->designation?></h6></a>
                          <!--   <p class="footer-title-29"><?=$token1->date?></p> -->
                            <a href="admin_a/documents/<?=$token1->image;?>"><p class="footer-title-29" style="color: red;">Lire ici!</p></a>
                          </div>
                        </li>
                        <hr>
                         <?php
                          endforeach;
                          else: 
                        ?>
                        <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:12px;" class="text-white text-center alert ">Aucun document pour cet article!</span></center>
                        <?php
                        endif;
                        ?>

                      <hr>
                      <h6 class="footer-title-29" style="font-weight:bold;">Dernières publications</h6>
                      <hr>
                      <ul class="list-unstyled">
                        <?php 
                          $myqwery=$db->prepare("SELECT article.id, article.date, article.image,article.titre,article.description,article.categorie as cat,article.poste_par,categorie.id as ids,categorie.designation FROM article 
                        INNER JOIN categorie ON article.categorie = categorie.id ORDER BY id DESC limit 0,6");
                          $myqwery->execute();
                          $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
                          if ($datas):
                          foreach($datas as $token): 
                        ?>
                        <li class="media">
                          <img src="admin_a/images/<?=$token->image;?>" class="mr-3 " width="100px" alt="...">
                          <div class="media-body">
                            <h6 class="mt-0 mb-1"><?=$token->titre?></h6>
                            <p class="footer-title-29"><?=$token->date?></p>
                          </div>

                        </li>
                         <hr>
                        <?php
                          endforeach;
                          else: 
                        ?>
                        <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:12px;" class="text-white text-center alert ">Aucune publication pour le moment!</span></center>
                        <?php
                        endif;
                        ?>

                      </ul>
                      <hr>
                      <div id="img">
                          <a class="twitter-timeline" href="https://twitter.com/LeagueAcademia" data-widget-id="275430111547887616" style="width: 50px; height: 50px;">Tweets by league academia</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </div>
                      <hr>
                      
                  </div>
              </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
<?php endif;?>
<?php endif;?>

<?php include('mains/footer.php') ?>
  <script type="text/javascript">
(function(){


//la partie de jquery et integration de partage

   var popupCenter = function(url, title, width, height){
       var popupWidth = width || 640;
       var popupHeight = height || 320;
       var windowLeft = window.screenLeft || window.screenX;
       var windowTop = window.screenTop || window.screenY;
       var windowWidth = window.innerWidth || document.documentElement.clientWidth;
       var windowHeight = window.innerHeight || document.documentElement.clientHeight;
       var popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2 ;
       var popupTop = windowTop + windowHeight / 2 - popupHeight / 2;
       var popup = window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft);
       popup.focus();
       return true;
   };

    document.querySelector('.share_twitter').addEventListener('click', function(e){
       e.preventDefault();
       var url = this.getAttribute('data-url');
       var shareUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.title) +
           "&via=Marevan" +
           "&url=" + encodeURIComponent(url);
       popupCenter(shareUrl, "Partager sur Twitter");
   });

    document.querySelector('.share_facebook').addEventListener('click', function(e){
       e.preventDefault();
       var url = this.getAttribute('data-url');
       var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=https://www.marevan.net/single.php?icValue=<?=$data[0]->id ?>" + encodeURIComponent(url);
       popupCenter(shareUrl, "Partager sur facebook");
   });

   document.querySelector('.share_gplus').addEventListener('click', function(e){
       e.preventDefault();
       var url = this.getAttribute('data-url');
       var shareUrl = "https://plus.google.com/share?url=https://www.marevan.net/single.php?icValue=<?=$data[0]->id ?>" + encodeURIComponent(url);
       popupCenter(shareUrl, "Partager sur Google+");
   });

   document.querySelector('.share_linkedin').addEventListener('click', function(e){
       e.preventDefault();
       var url = this.getAttribute('data-url');
       var shareUrl = encodeURIComponent(url);
       popupCenter(shareUrl, "Partager sur Linkedin");
   });
    document.querySelector('.share_whatsapp').addEventListener('click', function(e){
       e.preventDefault();
       var url = this.getAttribute('data-url');
       var shareUrl = encodeURIComponent(url);
       popupCenter(shareUrl, "Partager sur whatsapp");
   });

})();
</script>
<script>
  $(document).ready(function() {
  $('meta[property="og:title"]').remove();
  $('meta[property="og:description"]').remove();
  $('meta[property="og:url"]').remove();
  $("head").append('<meta property="og:title" content="nom_de_la_salle">');
  $("head").append('<meta property="og:description" content="capactite">');
  
  $("head").append('<meta property="og:url" content="https://www.marevan.net/single.php?icValue=<?=$data[0]->id?>"');
});
</script> 