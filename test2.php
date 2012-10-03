<?php
error_reporting(E_ALL);
$output = array();
$return  = 1;
$output = shell_exec('cd..');
//$output = shell_exec('cd..');
//$output = shell_exec('E:');
//$output = shell_exec('mkdir onkar');
//$output = shell_exec('dir');
echo "<pre>$output</pre>";
//echo exec("D:", $return);
//echo exec("mkdir class", $return);
//exec("cd class");
//exec("java login username password id name Daily Detailed  20120820",$output,$return);
?>