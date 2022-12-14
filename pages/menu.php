<?php
 if(isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = '';
}

switch ($menu) {
    	       
        case "main":
            $src_page = 'index.php';
            break;
                                       
        case "out":
            $src_page = 'out.php';
            break;            
                    
        default:
			$src_page = 'index.php';
			}
?>