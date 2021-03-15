<?php

require_once('template_menu.php');
renderMenuToHTML('about');
?>

<?php

$currentPageId = 'khi';
if(isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
?>

<?php
  renderMenuToHTML($currentPageId);
?>


<?php
require_once('template_footer.php');
?>
