<?php 
include("check_login.php");
 include("../conn.php");
function getname($exname){
   $dir = "upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }

   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}
 //��Ӳ�Ʒ
if($action=="add")
{
	if(is_numeric($shichangjia)==false || is_numeric($huiyuanjia)==false)
	{
		echo "<script>alert('�۸�ֻ��Ϊ���֣�');history.back();</script>";
		exit;
	}
	if(is_numeric($shuliang)==false)
	{
		echo "<script>alert('����ֻ��Ϊ���֣�');history.back();</script>";
		exit;
	}

	$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
if(trim($_FILES['upfile']['name']!=""))
 {
  $uploadfile="admin/".$uploadfile;
}
else
 {
  $uploadfile="";
 }

$sql="insert into goods(name,jianjie,xinghao,tupian,shichangjia,huiyuanjia,leibie,shuliang,cishu)values('$name','$jianjie','$xinghao','$uploadfile','$shichangjia','$huiyuanjia','$leibie','$shuliang','0')";

mysql_query($sql);
echo "<script>alert('��Ʒ��ӳɹ�!');window.location.href='goods.php';</script>";
 }

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ӳ�Ʒ</title>
<link rel="stylesheet" type="text/css" href="base.css">

</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >��Ӳ�Ʒ</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#E7E7E7"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.name.value=="")
	   {
	     alert("�������Ʒ����!");
		 form.name.select();
		 return(false);
	   }



	  if(form.huiyuanjia.value=="")
	   {
	     alert("�������Ʒ��Ա��!");
		 form.huiyuanjia.select();
		 return(false);
	   }



	  if(form.shichangjia.value=="")
	   {
	     alert("�������Ʒ�г���!");
		 form.shichangjia.select();
		 return(false);
	   }


	   if(form.leibie.value=="")
	   {
	     alert("�������Ʒ��Ʒ���!");
		 form.leibie.select();
		 return(false);
	   }

	   if(form.xinghao.value=="")
	   {
	     alert("�������Ʒ���!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("�������Ʒ����!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("�������Ʒ���!");
		 form.jianjie.select();
		 return(false);
	   }

	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="?action=add" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">��Ʒ���ƣ�</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="name" size="25" class="inputcss"></div></td>
      </tr>
  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">��ƷͼƬ��</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" class="inputcss" size="30"></div></td>
      </tr>

      
        <td height="25" bgcolor="#FFFFFF"><div align="center">�۸�</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">�г��ۣ�<input type="text" name="shichangjia" size="10" class="inputcss" >
          Ԫ&nbsp;&nbsp;��Ա�ۣ�
          <input type="text" name="huiyuanjia" size="10" class="inputcss">
          Ԫ</div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center">��Ʒ���</div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="left"><select name="leibie" id="leibie">
  <?php 
  $sql="select * from leibie order by id DESC";
 $res=mysql_query($sql);
 while($rs=mysql_fetch_array($res))
 {
	 ?>

	  <option value="<?php  echo $rs[id]?>" <?php  if($rs[id]==$data[leibie]) echo "selected"; ?>><?php  echo $rs[name]?></option>
	 <?php 
	 }
  ?>

  </select></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">��Ʒ��ţ�</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="xinghao" class="inputcss" size="20"></div></td>
      </tr>
      
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">��Ʒ������</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shuliang" class="inputcss" size="10"></div></td>
      </tr>

      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">��Ʒ��飺</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="80" rows="8" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="���">
        &nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
