<!--

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">Fast Dev</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Me</a></li>
          <li><a href="works.php" class="smoothscroll">FAQ</a></li>
          <li><a href="contact.php" class="smoothscroll">Blog</a></li>
        </ul>
      </div>
     
    </div>
  </div>
-->

<?php
require_once('template_header.php');
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Home' , ''),
'about' => array( 'About Me','' ),
'works' => array('FAQ' ,''),
'contact' => array('Contact Me' ,''),

);
echo "  <div class='navbar navbar-default navbar-fixed-top' role='navigation'>
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

foreach($mymenu as $pageId => $pageParameters) {
  if($pageId == $currentPageId) {
  
  }
  echo "<li><a href=\"$pageId.php\" class=\"active\" class=\"smoothscroll\">".$pageParameters[0]."</a></li>";


}

echo " </ul></div></div></div>";
}
?>
    