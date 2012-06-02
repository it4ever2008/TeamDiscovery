
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

    </head>
    <body> 

        <div >
           
        </div>
        <!-- end page-heading -->


        <div >
            <div align="center" >
                <?php
                if (isset($_POST[b1])) {
                     $filename = $_FILES['f1']['name'];
                        $file     = $_FILES['f1']['tmp_name'];
                        $ext = end(explode(".",$filename));
                        $rname = getRandomstr(10).".".$ext;
                        copy($file,"pic/".$rname);
                    $p->Addproject($_POST[t1], $_POST[t2],$rname);
                }
                if (isset($_POST[b2])) {
                    $p->Updateproject($_POST[t], $_POST[t1], $_POST[t2]);
                }
                if (isset($_GET[delid])) {
                    $p->Deleteproject($_GET[delid]);
                }

                if (isset($_POST[delsel])) {
                    for ($i = 0; $i < count($cx1); $i++) {
                        $p->Deleteproject($cx1[$i]);
                    }
                }
                ?>
            </div>

            <div align="center" >
                <form method="post" action="project.php" enctype="multipart/form-data">

                    <table border="0">

                        <tr>
                            <td></td>
                            <td><input  type="hidden" name="t" id="t" class="inp-form" value="<?
                if (isset($_GET[upid])) {
                    echo $_GET[upid];
                }
                ?>"/></td>
                        </tr>

                        <tr>
                            <td>Enter title</td>
                            <td><input  type="text" name="t1" id="t1"  value=" <?
                if (isset($_GET[upid])) {
                    echo $p->gettitle($_GET[upid]);
                }
                ?>"/></td>
                        </tr>

                        <tr>
                            <td>Enter descrption</td>
                            <td> <input  type="text" name="t2"  id="t2" value="<?
                if (isset($_GET[upid])) {
                    echo $p->getdes($_GET[upid]);
                }
                ?>"/></td>
                        </tr>

                        <tr>
                            <td>Enter tour pic</td>
                            <td><input type="file" name="f1"  id="f1" /></td>
                        </tr>


                        <tr>
                            <td></td>
                            <td><input name="b1" type="submit" id="b1" class="add" value="أضافة" /> <input name="b2" type="submit" id="b2" class="edit" value="تعديل" /> </td>
                        </tr>
                    </table>          
                </form>
            </div>


            <form id="mainform" method="post" action="project.php">
                <table border="1" width="100%" >
                    <tr>
                        <td><a id="toggle-all" ><input type="checkbox" name="ch"  id="ch"/></a> </td>	
                        <td><a href="">title</a></td>
                        <td><a href="">descrption</a></td>
                        <td><a href="">pic</a></td>
                        <td><a href="">process</a></td>

                    </tr>
                        <?php
                        $p->displayproject('هل أنت  متأكد من الحذف ؟');
                        ?>
                </table>
                <input name="delsel" type="submit" id="delsel"  value="حذف المحدد" onclick = "return confirm('هل أنت  متأكد من الحذف ؟')"/>
            </form>
        </div>

    </body>
</html>