<?php
$dt = '<?xml version="1.0" encoding="utf-8"?>;
$dt .= '<data>';
$dt .= date('M d, Y');
$dt .= '</data>';
header('Content-type: text/xml; charset=utf-8');
echo $dt;
?>