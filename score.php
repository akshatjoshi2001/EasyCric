        <?php
     $id = $_REQUEST["id"];
$string = file_get_contents("http://cricscore-api.appspot.com/csa?id=".$id);
$parsed = json_decode($string,true);
echo "<h2>".$parsed["0"]["si"]."</h2><br /><br />More Details: ".$parsed["0"]["de"];
echo "<br /><a href='index.php'>&larr; Go Back</a>";
?>