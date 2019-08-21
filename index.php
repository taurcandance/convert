<?php
require_once 'autoload.php';
use \Convertio\Convertio;

$API = new Convertio("6ef9d4fe25fef131ea87057b87e496a0");
$documentsPath = $_SERVER['DOCUMENT_ROOT'];
$file = $documentsPath.'/images/1.png';
$show = file_exists($file);
$fileUpgrade = './images/2.webp';
$fileUpgrade_ = $documentsPath.'/images/2.webp';

$API->start("$file", 'webp')->wait()->download($fileUpgrade_)->delete();

?>

<img src="/images/2.webp" />
<?php var_dump($API->status()); ?>