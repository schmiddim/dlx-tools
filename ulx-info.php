#!/usr/bin/php
<?php
#require_once '//home/ms/bin/Identify.php';
require_once '/home/ms/bin/ulx-tools/php/MetaInfo.php';
require_once '/home/ms/bin/ulx-tools/php/GetOps.php';


$ops=new GetOps($argv);
foreach ($ops->getArguments() as $arg){
	#$adt= new AdtMovieInfo($arg);
	#echo $adt;
	$m =new MetaInfo($arg);
#	echo $adt->getBitrateWithFFmpeg($arg).'\n';
echo "-----------------\n";
	echo $m;	
}
?>
