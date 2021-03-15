
<?php
require_once('template_menu.php');
renderMenuToHTML('acceuil');

$currentPageId = 'acceuil';
if(isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
?>

<?php
  renderMenuToHTML($currentPageId);
?>
<?php
if(isset($_GET['lang'])){
  if($_GET['lang']=='fr'){ $pageToInclude = "fr/".$currentPageId . ".php";}
  else if($_GET['lang']=='en'){ $pageToInclude = "en/".$currentPageId . ".php";}
}
else{$pageToInclude = "fr/".$currentPageId . ".php";}
if(is_readable($pageToInclude))
require_once($pageToInclude);
else 
require_once("error.php");
?>


<?php
  $pageToInclude = $currentPageId . ".php";
  if(is_readable($pageToInclude))
  require_once($pageToInclude);
  else
  require_once("error.php");
?>
</section>




<?php
require_once('template_footer.php');
?>






