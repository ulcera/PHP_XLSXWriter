<?php
include_once("xlsxwriter.class.php");

$writer = new XLSXWriter();
$arr_lenght = array(150,16,5,50);//array with lenght of column
$writer->writeSheetHeader('Sheet1', array('c1'=>'string','c2'=>'string','c3'=>'string','c4'=>'string'),$arr_lenght );//optional
for($i=0; $i<50000; $i++)
{
    $writer->writeSheetRow('Sheet1', array(rand()%10000,rand()%10000,rand()%10000,rand()%10000) );
}
$writer->writeToFile('output.xlsx');
echo '#'.floor((memory_get_peak_usage())/1024/1024)."MB"."\n";
