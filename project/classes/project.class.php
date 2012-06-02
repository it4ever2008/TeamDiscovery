<?php

//$nametable = "account";
class project {
    public function __construct() {
        $conn = mysql_connect("localhost", "root", "root");
        mysql_set_charset("utf8", $conn);
        mysql_select_db("advanced", $conn);
        // $nametable ="account";
    }

    public function Addproject($title,$des,$pic) {
            mysql_query("INSERT INTO project(title,des,pic)
                                            VALUES('$title','$des','$pic')");
    }

    public function Updateproject($id,$title,$des) {
        mysql_query("UPDATE project SET 
        title ='$title',
        des ='$des',
        WHERE `account`.`id` ='$id'");
    }

    public function Deleteproject($id) {
        mysql_query("delete from project where id = $id");
    }

    public function getid($id) {
        $result = mysql_query("select * from project where id = $id");
        $row = mysql_fetch_array($result);
        return $row[id];
    }

    public function gettitle($id) {
        $result = mysql_query("select * from project where id = $id");
        $row = mysql_fetch_array($result);
        //echo $r['sname'];
        return $row['title'];
        //echo $sname;
        //echo "get done";
    }

    public function getdes($id) {
        $result = mysql_query("select * from project where id = $id");
        $row = mysql_fetch_array($result);
        //echo $r['sname'];
        return $row['des'];
        //echo $sname;
        //echo "get done";
    }

    public function getpic($id) {
        $result = mysql_query("select * from project where id = $id");
        $row = mysql_fetch_array($result);
        return $row['pic'];
    }
    
    

    public function displayproject($msg) {
        $result = mysql_query("select * from  project");
        while ($row = mysql_fetch_array($result)) {
            echo " 
                <tr>
                <td> <input name='cx1[]' type='checkbox' value='$row[id]'  class='allcheck' /></td>
                <td>$row[title]</td>
                <td>$row[des]</td>
                <td>$row[pic]</td>
                <td>
                <a href=\"account.php?upid=$row[id] \"><img src=\"image/update.png\" border='0'  /></a>
                <a href=\"account.php?delid=$row[id]\"><img src=\"image/delete.png\" border='0'   onclick = \"return confirm('$msg')\"/></a>
                </td>
                </tr>
                ";
        }
    }
    public function search($title){
        $result = mysql_query("select * from  project where  title like '%$title%'");
        while($row = mysql_fetch_array($result)) {
             echo " 
                <tr>
                <td>$row[title]</td>
                <td>$row[des]</td>
                <td><img src='pic/$row[pic]' class='imgv'/></td>
                </tr>
                ";
        }
    }

}

?>
