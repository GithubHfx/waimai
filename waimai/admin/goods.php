<?php  include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ʒ</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<style type="text/css">
<!--
@import url("base.css");
-->
</style>
</head>
<?php 
  include("../conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">  <br><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
 <tr>
    <td height="75" ><form name="form1" method="post" action="?act=search">
  <p align="center">��Ʒ����:
    <input type="text" name="name" id="name">
    <input type="submit" name="button" id="button" value="��ѯ">
  </p>
</form></td>
  </tr>
</table>
<?php 
 $where =" where 1=1";
	 // if($name=="") exit("�������Ʒ����");
	  if($name!="") $where.=" and name like '%$name%'";
$q="select count(*) as total from goods $where";
	   $sql=mysql_query($q);
	   $data=mysql_fetch_array($sql);
	   $total=$data[total];

?>
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="75" ><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">

	  <tr>
        <td height="20" colspan="10"><div align="center" >��Ʒ��Ϣ�༭   &nbsp;&nbsp;<a href="goods_add.php">��Ӳ�Ʒ</a></div></td>
      </tr>
      <tr>

        <td width="302" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center">��Ʒ���</div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center">���</div></td>
       

        <td width="60" bgcolor="#FFFFFF"><div align="center">�г���</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">��Ա��</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">����</div></td>
      </tr>
	  <?php 

	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			}
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;

			}else{
			   $pagecount=$total/$pagesize;

			}
			if(($_GET[page])==""){
			    $page=1;

			}else{
			    $page=intval($_GET[page]);

			}

           $sql1=mysql_query("select * from goods $where order by addtime desc limit ".($page-1)*$pagesize.",$pagesize");
		   while($list=mysql_fetch_array($sql1))
		    {
	  ?>
      <tr>

        <td height="25" bgcolor="#FFFFFF">

          <div align="center"><?php  echo $list[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo
			get_name($list[leibie],'leibie')?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $list[xinghao];?></div></td>
        

        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $list[shichangjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $list[huiyuanjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="goods_edit.php?id=<?php  echo $list[id];?>">�޸�</a> |  <a href="goods_del.php?id=<?php  echo $list['id']; ?>" class="ajaxlink"  onclick="return confirm('ȷ��Ҫɾ����');" >ɾ��</a></div></td>
      </tr>
	 <?php 
	    }

      ?>

    </table></td>
  </tr>
</table>
<table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"></td>
    <td width="585"><div align="right">&nbsp;��վ���в�Ʒ
        <?php 
		   echo $total;
		  ?>
        &nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php  echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php  echo $page;?>&nbsp;ҳ/��&nbsp;<?php  echo $pagecount; ?>&nbsp;ҳ
        <?php 
		  if($page>=2)
		  {
		  ?>
        <a href="shu.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="shu.php?id=<?php  echo $id;?>&page=<?php  echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php 
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="shu.php?page=<?php  echo $i;?>"><?php  echo $i;?></a>
        <?php 
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="shu.php?page=<?php  echo $i;?>"><?php  echo $i;?></a>
        <?php  }?>
        <a href="shu.php?page=<?php  echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="shu.php?id=<?php  echo $id;?>&page=<?php  echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php  }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>

</body>
</html>
