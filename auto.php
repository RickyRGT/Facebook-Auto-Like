<?php
if(isset($_POST['like'])){
$id = $_POST['id'];
$limit = $_POST['limit'];

$query= mysqli_query('select * from Likers ORDER BY RAND() DESC LIMIT '.$limit);
while($result = mysql_fetch_array($edwin)){
$me = json_decode(file_get_contents('https://graph.facebook.com/me?&access_token='.$result['access_token' ]),true);

$com = 'https://graph.facebook.com/'.$id.'/likes?method=post&access_token='.$result['access_token'];
}
}

?>  
