<?php 
require("header.php");

?><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">�ؼ���:"<font color=red> <?php  echo $goodsName?> </font>"���������</td>
  </tr></table>
		  	                <table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>��Ʒ����</td>
					                  <td>�г���</td>
					                  <td>��Ա��</td>
					                  <td>��ƷͼƬ</td>
					                  <td>����</td>
					              </tr>
<?php 

$sql="select * from goods where name like '%$goodsName%' order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){


?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="goodsDetail.php?goodsId=<?php  echo $data[id]?>"><?php  echo $data[name]?></a></td>
									  <td>��<?php  echo $data[shichangjia]?><br/></td>
									  <td>��<?php  echo $data[huiyuanjia]?></td>
									  <td><a href="goodsDetail.php?goodsId=<?php  echo $data[id]?>"> <img width="60" height="60" src="<?php  echo $data[tupian]?>"/> </a></td>
									  <td><a href="cart.php?id=<?php  echo $data[id]?>&act=buy"><img alt="" src="./images/icon_buy.gif" border=0/></a></td>
								  </tr>
<?php 
}
	?></table>

<?php 
require("footer.php");
?>