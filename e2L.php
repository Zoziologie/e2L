Hello world!
<?php
echo "My first PHP script!";
?>


<?php 

$item=$_SERVER['QUERY_STRING'];

echo "<br><br>";
echo	$item;
echo "<br><br>";

$tmp = exec("python3 /var/www/zoziologie/wp-content/plugins/e2L/script_web_e2L.py ". $item);
echo $tmp;


header('Location: '.$tmp); exit();

//$command = escapeshellcmd('/var/www/zoziologie/wp-content/plugins/eBirdToLaTeX-Checklist-Generator/Script_Python.py');
//$output = shell_exec($command);
//echo $output;

?>
