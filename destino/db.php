<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/

function con(){
	return new mysqli("localhost","root","12345678","carousel");
}

function insert_img($title, $folder, $image){
	$con = con();
	$con->query("insert into image (title,folder,src,otra_img,created_at) value (\"$title\",\"$folder\",\"$image\",\"$otra_img\",NOW())");
}
function insert_img2($title2, $otra_img){
	$con = con();
	$con->query("insert into image (title2,otra_img) value (\"$title2\",\"$otra_img\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

?>