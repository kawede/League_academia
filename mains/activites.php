<?php include('header.php') ?>

<section class="locations-1" id="locations">
<div class="locations py-5">
 <div class="container py-md-3">
    <div class="heading text-center mx-auto">
        <h3 class="head">Education</h3>
        <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p>
      </div>
      <div class="card-deck">
        <?php 
          $myqwery=$db->prepare("SELECT * FROM article WHERE categorie =2  ORDER BY id DESC");
          $myqwery->execute();
          $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
          if ($datas):
          foreach($datas as $token): 
        ?>
        <a href="detail_article.php?Edit=<?=$token->id;?><?=$token->id;?>"><div class="card">
        <img class="card-img-top img-thumbnail" src="./admin_a/images/<?= $token->image;?>" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><?=$token->titre;?></h4>
          <p class="card-text"><?= substr($token->description,0,250);?><a href="detail_article.php?Edit=<?=$token->id;?>" style="color: red; font-weight: bold;"> plus...</a></p>
        </div>
        <div class="card-footer"style="background-color: rgb(101,179,254); ">
          <small class="text-white">Posté le <?=$token->date;?> | Par: <?=$token->poste_par;?></small>
        </div>
      </div></a>
      <?php
        endforeach;
        else: 
      ?>
      <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:15px;" class="text-white text-center alert ">Aucune Information pour le moment!</span></center>
      <?php
      endif;
      ?>
      </div>
    </div>
  </div>
 </section>
 <!--  //services section -->
<!-- //services block3 -->
 <?php include('footer.php') ?>