#!php
<?php
print_r($argv);
//exit;
$cmd = "sed -i '/RequestHandler/d' ".$argv[1]."/src/Controller/AppController.php";
echo $cmd.PHP_EOL;
$output = [];
exec($cmd,$output,$code);
print_r($output);
echo $code.PHP_EOL;
?>