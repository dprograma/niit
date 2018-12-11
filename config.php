<?php
	$conn = mysqli_connect('localhost','root','');

	$sql = "CREATE DATABASE IF NOT EXISTS workbase";
	$query = mysqli_query($conn,$sql);

	mysqli_select_db($conn,'workbase');

	$table = "CREATE TABLE IF NOT EXISTS usertable(
				id int(10) not null auto_increment,
				firstname varchar(50) not null,
				lastname varchar(50) not null,
				gender char(6) not null,
				password varchar(50) not null,
				email varchar(50) not null,
				phone varchar(50) not null,
				address varchar(50) not null,
				state varchar(20) not null,
				image varchar(20) not null,
				dateadded date not null default '0000-00-00',
				PRIMARY KEY(id))";

	$mysql = mysqli_query($conn,$table);
	?>

