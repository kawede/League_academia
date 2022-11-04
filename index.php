<?php
$url='';
if(isset($_GET['url']))
{
  $url=explode('/', $_GET['url']);
}
if($url== '')
{
  require 'mains/home.php';
}
else if ($url[0]== 'accueil')
{
  require 'mains/home.php';
}
else if ($url[0]== 'about')
{
  require 'mains/about.php';
}
else if ($url[0]== 'education') 
{
  require 'mains/education.php';
}
else if ($url[0]== 'environnement') 
{
  require 'mains/environnement.php';
}
else if ($url[0]== 'member') 
{
  require 'mains/member.php';
}
else if ($url[0]== 'emploi')
{
  require 'mains/emploi.php';
}
else if ($url[0]== 'csocial')
{
  require 'mains/csocial.php';
}
else if ($url[0]== 'sante')
{
  require 'mains/sante.php';
}
else if ($url[0]== 'gouvernance')
{
  require 'mains/gouvernance.php';
}
else if ($url[0]== 'technologie')
{
  require 'mains/technologie.php';
}
else if ($url[0]== 'galerie')
{
  require 'mains/galerie.php';
}
else if ($url[0]== 'activitesBlog')
{
  require 'activitesBlog.php';
}
else if ($url[0]== 'contact')
{
  require 'mains/contact.php';
}
else if ($url[0]== 'revues') 
{
  require 'mains/revues.php';
}
else if ($url[0]== 'activitesBlog')
{
  require 'activitesBlog.php?pages=1';
}
else if ($url[0]== 'detail_article')
{
  require 'mains/detail_article.php';
}
else if ($url[0]== 'rapport')
{
  require 'mains/rapport.php';
}
else if ($url[0]== 'activites')
{
  require 'mains/activites.php';
}
else
{
  require 'mains/404.php';
}
