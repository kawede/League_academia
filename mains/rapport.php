<?php include('header.php') ?>
<section class="w3l-service-breadcrum" style="background-color:black;">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
        <h2>Nos rapports</h2>
      <p><a href="accueil">accueil</a> &nbsp; / &nbsp; Rapports</p>
   </div>
  </div>
</section>
 <!--  services section -->
<section class="w3l-index6" id="service">
  <div class="features-with-17_sur py-5">
    <div class="container py-lg-3">
      <div class="features-with-17-top_sur">
        <div class="row">
        <?php 
          $myqwery=$db->prepare("SELECT rapport.id,rapport.designation as d,rapport.pdf,rapport.rpt,rapport.date, categorie_r.id as ids,categorie_r.designation from rapport INNER JOIN categorie_r ON rapport.rpt = categorie_r.id WHERE rpt=1 ORDER BY id DESC ");
          $myqwery->execute();
          $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
          if ($datas):
          foreach($datas as $token): 
        ?>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4 ">
            <div class="features-with-17-right-tp_sur shadow">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-file" aria-hidden="true" style="color: rgb(101,179,254);"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="./admin_a/documents/<?=$token->pdf;?>"><?=$token->d?></a></h6>
                <p>Mise à jour: <?=$token->date?> | <span style="color:rgb(101,179,254); font-weight: bold;"><?=$token->designation;?></span></p>
                <span ><a href="./admin_a/documents/<?=$token->pdf;?>"style="color:red;"><i class="fa fa-file"></i>  Telecharger</a></span>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        else: 
        ?>
        <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:15px;" class="text-white text-center alert ">Aucun rapport pour le moment!</span></center>
        <?php
        endif;
       ?>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--  //services section -->
<!-- //services block3 -->
 <?php include('footer.php') ?>