<?php 
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('���ȵ�¼');history.back();</script>";
	exit;
  }
  if($act=="save")
  {
	  if($pass!="")
	  $sql="update `user` set email='$email',truename='$truename',sfzh='$sfzh',tel='$tel',qq='$qq',dizhi='$dizhi',youbian='$youbian',pwd='$pass' where name='$_SESSION[login]'";
	  else
$sql="update `user` set email='$email',truename='$truename',sfzh='$sfzh',tel='$tel',qq='$qq',dizhi='$dizhi',youbian='$youbian' where name='$_SESSION[login]'";
mysql_query($sql);
 echo "<script language='javascript'>alert('�޸ĳɹ���');location.href='user.php';</script>";
  }
?><script language="javascript">
		     function chkinput1(form)
			  {
			   
				if(form.truename.value=="")
				{
				  alert("��ʵ��������Ϊ��!");
				  form.truename.select();
				  return(false);
				}
				if(form.sfzh.value=="")
				{
				  alert("���֤�Ų���Ϊ��!");
				  form.sfzh.select();
				  return(false);
				}
				if(form.tel.value=="")
				{
				  alert("��ϵ�绰����Ϊ��!");
				  form.tel.select();
				  return(false);
				}
				if(form.dizhi.value=="")
				{
				  alert("��ϵ��ַ����Ϊ��!");
				  form.dizhi.select();
				  return(false);
				}
				if(form.num.value=="")
				{
				  alert("ѧ�Ų���Ϊ��!");
				  form.num.select();
				  return(false);
				}

				return(true);
			  }
		   </script><div class="page_row">
			<!--��ߵ� -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <table width="950" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
                             <tr>
    <td width="950" height="34" class="menu_bar" colspan="20">��Ա����</td>
  </tr>
<form name="form1" method="post" action="?act=save" onsubmit="return chkinput1(this)">
                <?php 
				$sql="select * from user where name='".$_SESSION[login]."'";
		   $res=mysql_query($sql);
		   $info=mysql_fetch_array($res);

		  ?>
                <tr>
                  <td width="200" height="20" bgcolor="#FFFFFF"><div align="center">�ǳƣ�</div></td>
                  <td width="397" bgcolor="#FFFFFF"><div align="left"><?php  echo $_SESSION[login];?></div></td>
                </tr><tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">�����룺</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="pass" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">��ʵ������</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="truename" size="25" class="inputcss" value="<?php  echo $info[truename];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">ѧ�ţ�</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="num" size="25" class="inputcss" value="<?php  echo $info[num];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">QQ���룺</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="qq" size="25" class="inputcss" value="<?php  echo $info[qq];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">�绰����</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcss" value="<?php  echo $info[tel];?>">
                  </div></td>
                </tr>
               
               
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">���֤�ţ�</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="sfzh" size="25" class="inputcss" value="<?php  echo $info[sfzh];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="�޸���Ϣ">
      &nbsp;&nbsp;

                  </div></td>
                </tr>
              </form>
          </table>
							</div>
		         </div>
	        </div>
			

			<!-- �ұߵ� -->
		</div>
<?php 
require("footer.php");
?>