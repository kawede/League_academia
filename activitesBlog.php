<?php include('mains/header.php') ?>
<!-- <section class="w3l-service-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">

      <h2>Our Services</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Services</p>
   
	 </div>
  </div>
</section> -->
 <!--  services section -->
<section class="locations-1" id="locations">
<div class="locations py-5">
 <div class="container py-md-3">
    <div class="heading text-center mx-auto">
        <h3 class="head">Nos nouvelles</h3>
        <p class="my-3 head" style="color:black;font-weight:bold;"> nous offrons aux scientifiques les outils et methodes intellectuelles pour leur apprentissages</p>
          <br>
          <br>
      </div>
      <div class="card-deck">
           <?php 
          $count=$db->prepare("SELECT count(id) AS records FROM article ");
          $count->setFetchMode(PDO::FETCH_ASSOC);
          $count->execute();
          $tcount=$count->fetchAll();
          $recordsOnPage = 6;
          $pagesNumber = ceil($tcount[0]['records']/$recordsOnPage);
          
          @$p = $_GET['pages']; 
          $start = ($p-1)*$recordsOnPage;
          $myqwery=$db->prepare("SELECT *FROM article  ORDER BY id DESC LIMIT $start, $recordsOnPage");
          $myqwery->execute();
          foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token):    
        ?>
           <a href="detail_article.php?id=<?=$token->id;?>"><div class="card">
            <img class="card-img-top img-thumbnail" src="admin_a/images/<?= $token->image;?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?=$token->titre;?></h5>
              <p class="card-text"><?= substr($token->description,0,250);?><a href="detail_article.php?id=<?=$token->id;?>" style="color: rgb(101,179,254); font-weight: bold;"> plus...</a></p>
            </div>
            <div class="card-footer"style="background-color: rgb(101,179,254); ">
             <small class="text-white">Posté le <?=$token->date;?> | Par: <?=$token->poste_par;?></small>
            </div>
          </div></a>
          <?php endforeach ?>
    </div>
    <hr>
     <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" style="border:1px solid rgb(101,179,254);">Precedent</a>
        </li>
        <?php for ($i=1; $i <= $pagesNumber; $i++) { 
        ?>
        <li class="page-item"><a class="page-link" href="?pages=<?=$i;?>" style="background-color:rgb(101,179,254); border:1px solid rgb(101,179,254); color:white; font-weight: bold;"><?=$i?></a></li>
        <?php } ?>
          <a class="page-link" style="border:1px solid rgb(101,179,254);">Suivant</a>
        </li>
      </ul>


  </nav>
  </div>
 </section>
 <!--  //services section -->
<!-- //services block3 -->
 <?php include('mains/footer.php') ?>