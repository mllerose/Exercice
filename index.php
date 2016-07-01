<?php
if(file_exists('config.php')){
	require 'config.php';
}else{
	echo "Vous devez configurer votre base de données.";
}