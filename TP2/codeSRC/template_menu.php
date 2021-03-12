<?php 
function renderMenuToHTML($currentPage){
    $mymenu = array(
        // idPage titre
          'index' => array( 'index' ),
          'about' => array( 'about' ),
          'projects' => array('projects'),
          'blog' => array('blog')
        );  'info_technique' => 'Contact',
    );
    foreach ($mymenu as $pageId => $pageParameters){
        if ($pageId==$currentPage){
            echo "<a href='$pageId.php' id=current>";
            echo $pageParameters;
        }
        else {
           echo "<a href='$pageId.php'>";
           echo $pageParameters;
        
        }
    }
   echo "</div>";
}
?>