
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Account</title>
         <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
        <script type="text/javascript">
         $(document).ready(function(){
              $('#se').keypress(function(e){
                    var  x =  $('#se').val();
                    if(e.which==13){ 
                    window.location="view.php?search="+x;
                    //alert($('#se').val());
                    }
                });
    
    
            });
        </script>
    </head>
    <body>
        <div>
            <div><? include("menu.php");?></div>
            <div style="clear: both;"></div>
            
            <div align="center" style="margin-top: 200px;">
            <a href="view.php"style="margin-top: 20px;" ><img src="image/view.png" alt="project" /></a>
            <input  type="text"  id="se" value="Search"/>
            <a href="project.php" style="margin-left: 60px; padding-top: 20px;" ><img width="140px" height="140px"src="image/add1.png" alt="project" /></a>
            </div>
        </div>
    </body>
</html>