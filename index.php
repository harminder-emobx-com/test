<? 
//put your html code here 

define("DB_HOST","127.0.0.1");
define("DB_USER","mPlay_user");
define("DB_PASSWORD","admin123");
define("DB_NAME","newmusic");


$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Unable to connect.  Check your connection parameters');

mysql_select_db(DB_NAME, $con);
	
$result=mysql_query("select * from `msite_performer`") or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
	//print_r($row);
	$artist=mysql_real_escape_string($row['pname']);
	echo $sql="update `msite_album` set `aperformer_id`='{$row[pid]}' where `aid` in (select `album_id` from music where `album_artist`='$artist');";
	//mysql_query($sql);
}	
	
?>  

