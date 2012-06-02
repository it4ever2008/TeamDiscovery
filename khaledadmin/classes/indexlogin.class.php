
<?
class login{

public function __construct(){
$connect=mysql_connect("localhost","root","root");
mysql_set_charset("utf8",$connect);
mysql_select_db("team",$connect);
}
public function islogin($a,$b){

$res=mysql_query("select user_name  from accountadmin where user_name='$a' and password='$b' ");

$c1=mysql_num_rows($res);
if($c1==0)
return false;
else
return true;

}
}
?>