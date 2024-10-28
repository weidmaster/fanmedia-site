<?php
	include_once("config.php");
	//Instalar BD da Horizonte
	$sql = "CREATE TABLE `users` (
  `id` int(5) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  `nasc` date NOT NULL,
  `email` varchar(255) default NULL,
  `nick` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `permis` varchar(37) NOT NULL,
  `fp` int(7) NOT NULL,
  PRIMARY KEY  (`id`)
)";
	$res1 = mysql_query($sql);
	$sql = "INSERT INTO `users` (`id`, `nome`, `nasc`, `email`, `nick`, `pass`, `permis`, `fp`) VALUES 
(1, 'Darksign', '1988-11-05', 'eduwb.horizonte@gmail.com', 'eduardowb', 'Herj1988', '1.2.3.4.5.6.7.8.9.10.11.12.13.14', 10000),
(2, 'Fastspeedy', '1991-03-06', 'ttspeedy@hotmail.com', 'fastspeedy', 'ttsfoz', '1.2.3.4.5.6.7.8.9.10.11.12.13.14', 30533),
(3, 'Ze Mane', '2008-02-15', 'ze@mane.com', 'zemane', '123', '0', 10)";
	$res2 = mysql_query($sql);
?>