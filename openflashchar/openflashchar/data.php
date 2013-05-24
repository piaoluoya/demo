<?php 


$date = $_GET['date'];
$hour = $_GET['hour'];

$start = "$date $hour:00:00";
$end = "$date $hour:59:59";

$pdo = new PDO('mysql:host=192.168.85.143;dbname=monitor', 'writeuser', 'ddbackend');

$sth = $pdo->prepare('select user_id, api_call_num from user_count where creation_date between ? and ?');
$sth->execute(array($start,$end));

$user_result = $sth->fetchAll();



require_once('OFC/OFC_Chart.php');


$arrY = array();
$xxData = array();
foreach ($user_result as $user) 
{
	$xxData[] = $user[0];
	$arrY[] = 3;
}
#print_r($xyData);exit;



$line_dot = new OFC_Charts_Line();
$x =  $arrY;
$str = 
$title = new OFC_Elements_Title("$start-$x[0] --$end" );
$line_dot->set_values($x);

$chart = new OFC_Chart();
$chart->set_title( $title );
$chart->add_element( $line_dot );

echo $chart->toPrettyString();

/*
require_once('OFC/OFC_Chart.php');

$title = new OFC_Elements_Title("$start---$end" );

$bar = new OFC_Charts_Bar_3d();
$bar->set_values( $yData );
$bar->colour = '#D54C78';

$x_axis = new OFC_Elements_Axis_X();
$x_axis->set_3d(count($xData) );
$x_axis->colour = '#909090';
$x_axis->set_labels( $xData);

$chart = new OFC_Chart();
$chart->set_title( $title );
$chart->add_element( $bar );
$chart->set_x_axis( $x_axis );

echo $chart->toPrettyString();

*/

?>