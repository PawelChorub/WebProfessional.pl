<?php
require_once('naglowek.php');
require_once('nawigacja.php');
	if($_GET != null)
	{     
        if(isset($_GET['tresc-start'])){
            require_once('tresc-start.php');
        }  
        if(isset($_GET['wymiana-oleju'])){
            require_once('wymiana-oleju.php');
        }             
        if(isset($_GET['naprawy-biezace'])){
            require_once('naprawy-biezace.php');
        }
        if(isset($_GET['sprzedam'])){
            require_once('sprzedam.php');
        }        
	}
	else 
	{		
		require_once('tresc-start.php');
    }	
require_once('stopka.php');
?>


    