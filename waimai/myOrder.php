<?php 
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('���ȵ�¼');history.back();</script>";
	exit;
  }
  if($act=="del")
  mysql_query("delete from orders where id=$id");
?><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">�ҵĶ���</td>
  </tr></table>
<table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>������</td>
					                  <td>��Ʒ�ܼ�</td>
					                  <td>�µ�ʱ��</td>
					                  <td>����״̬</td>
					                  <td>����</td>
					              </tr><?php 

$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){
//if($data['zt']=='�������') 
$a="<a href=?act=del&id=$data[id]>ɾ��</a>";
//else
	//$a="";

?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="orderDetail.php?orderid=<?php  echo $data[orderid]?>"><?php  echo $data[orderid]?></a></td>
									  <td>��<?php  echo $data[total]?><br/></td>
									  <td><?php  echo $data['time']?></td>
									  <td><?php  echo $data['zt']?></td>
									  <td><a href="orderDetail.php?orderid=<?php  echo $data[orderid]?>">�鿴����</a> <?php  echo $a?></td>
								  </tr>
<?php 
}
	?>
		        			</table>

		</div>
<?php 
require("footer.php");
?>