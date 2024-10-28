<?php

#exibe_noticia.php

include_once('feed.class.php');

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';

$noticia = new feed('feed.xml');
$noticia->ExibeFeed();

?>