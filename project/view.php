
<?php
include("classes\project.class.php");
$p = new project();

function getRandomstr($length){
            $validcharacters = "abcdefghijklmnopqrstuxyvwzQWERTYUIOPLKJHGFDSAZXCVBNM";
            $validcharnumber= strlen($validcharacters);
                $result ="";
        for($i=0;$i<$length;$i++){
            $index = mt_rand(0,$validcharnumber-1);
                $result .= $validcharacters[$index];
        }
        return $result;
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Account</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
    </head>
    <body> 
    <div><? include("menu.php");?></div>
        <div>
             <table border="0" width="90%" cellpadding="0" cellspacing="0" id="celebs" >
                            <thead>
                                <tr>	
                                <td>title</td>
                                <td>des</td>
                                <td>pic</td>
                                  </tr>
                            </thead>
                            <?php
                            $p->search($_GET[search]);
                       ?>
                </table>
        
        </div>

    </body>
</html>