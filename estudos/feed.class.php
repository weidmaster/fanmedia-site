<?php

class Feed
{
	public $obj_feed;
	
	function __construct($nome_feed)
	{
		$this->obj_feed = simplexml_load_file($nome_feed);
	}
	
	function exibeFeed()
	{
		foreach ($this->obj_feed->channel->item as $noticia)
		{
			echo '<br>';
			echo '<h3>'.$noticia->title . '</h3><br>';
			echo "<a href=\"$noticia->link\">
				 $noticia->link</a>".'<br>';
			echo '<p>'.$noticia->description . '</p><br>';
		}
	}
}
?>