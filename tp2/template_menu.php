
<?php
require_once('template_header.php');
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'acceuil   ' => array( 'Home' , ''),
'about' => array( 'About Me','' ),
'works' => array('FAQ' ,''),
'contact' => array('Contact Me' ,''),
'en' => array('en' ,''),
'fr' => array('fr' ,''),
);
echo "  <div class='navbar navbar-default navbar-fixed-top' role='navigation'>
<style>
      #active{
        color:#FFC801;
      }
</style>
<div class='container'>
  <div class='navbar-header'>
    <button type='button class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    <a class='navbar-brand' href='index.php'>Fast Dev</a>
  </div>
  <div class='navbar-collapse collapse'>
    <ul class='nav navbar-nav navbar-right'>";

if(isset($_GET['lang'])){ 
  if($_GET['lang']=='en'){    
  foreach($mymenu as $pageId => $pageParameters) {
    if($pageId == $currentPageId) {
    
    }
    echo "<li><a href=\"index.php?page=$pageId&lang=en\    \" id=\"active smoothscroll\">".$pageParameters[0]."</a></li>";
    

  }

  echo " </ul></div></div></div>";
  }}}

?>
    