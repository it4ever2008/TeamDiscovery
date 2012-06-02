<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>Free Lancer</title>
        <script>
            $(document).ready(function(){
               $('#sea').keypress(function(e){
                    var  x =  $('#sea').val();
                    if(e.which==13){ 
                    window.location="view.php?search="+x;
                    //alert($('#sea').val());
                    }
                    
                });
    
            });
            /*
             
                
         <span>SEARCH:</span>
                                <form  class="search" style="position:relative;display: inline;"><input type="text"  id="search" value="Find your Project" />
                                <a href="#" style="width:10px; height:10px;position: absolute ;top:-1px;right:20px;"><img src="images/find.png" alt="freelancer"  /></a>
                                </form>
             */
        </script>
    </head>


    <body>
        <div id="menul">
            <div style="float: left;">
                <div id="nav" style="padding-top: 10px; padding-left: 10px;">
                    <nav>
                        <a href="index.php">Home</a>
                        <img src="image/n.gif" alt="freelancer" />
                        <a href="project.php">Projects</a>
                        <img src="image/n.gif" alt="freelancer" />
                        <a href="recent.php">Recent Projects</a>
                        <img src="image/n.gif" alt="freelancer" />
                        <a href="top.php">Top Ten Producer</a>
                        <img src="image/n.gif" alt="freelancer" />
                        <a href="faqm.php">FAQ</a>
                        <img src="image/n.gif" alt="freelancer" />
                        <a href="#">Contact Us</a>
                    </nav>

                </div>
            </div>

            <div style="float: right;">
                <div class="search" id="serchin" style="padding-top: 4px; padding-right: 10px;">
                    <span>SEARCH:</span>
                    <input type="text"  id="sea" value="Find your Project" />
                </div>

                <div style="clear: both;"></div>
                <br />
            </div>
    </body>
</html>