<?php 
error_reporting(E_ALL ^ E_NOTICE);//����������
 $conn=mysql_connect("localhost","root","1234") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("db_waimai",$conn) or die("���ݿ���ʴ���".mysql_error());
     mysql_query("set names gbk");
date_default_timezone_set('PRC');

function get_name($id,$table)
{
	$sql="select * from $table where id=$id";
	$r=mysql_query($sql);
	$rows=mysql_fetch_array($r);

	return $rows[name];
}

@extract($_POST);
@extract($_GET);

?>
