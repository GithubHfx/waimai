<?php 
session_start();
require("conn.php");

?>
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>���Ի����ܲ����Ƽ�ϵͳ</title>

<link rel="stylesheet" type="text/css" href="css/font.css">

  </head>

  <body>

<table width="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="119"  align="center">
<img src="images/logo.png">
	</td>
      </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td width="950" height="48" background="images/navbg.gif"  >&nbsp;
    	<a href="index.php" style="color:#fff;font-size:14px;font-weight:bold">��վ��ҳ</a>&nbsp; <font color=white>|</font> 
    	<a href="notice.php" style="color:#fff;font-size:14px;font-weight:bold">���Ź���</a>&nbsp; <font color=white>|</font> 
    	<a href="all.php" style="color:#fff;font-size:14px;font-weight:bold">�����Ƽ�</a>&nbsp; <font color=white>|</font> 
    	<a href="hot.php" style="color:#fff;font-size:14px;font-weight:bold">�����Ƽ�</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="tuijianhot" style="color:#fff;font-size:14px;font-weight:bold">���Ի��Ƽ�</a>&nbsp; <font color=white>|</font>
    	<a href="reg.php"style="color:#fff;font-size:14px;font-weight:bold">�û�ע��</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="myorder.php" style="color:#fff;font-size:14px;font-weight:bold">�ҵĶ���</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="user.php" style="color:#fff;font-size:14px;font-weight:bold">�ҵ���Ϣ</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="cart.php" style="color:#fff;font-size:14px;font-weight:bold">�ҵĹ��ﳵ</a>&nbsp;<font color=white>|</font>&nbsp;
    	
    	 </td>

      <?php 
	  if($_SESSION[username]!=""){
	    echo "��ǰ�û�:$_SESSION[username]";
	  }
	?>
	<?php 
	if($_SESSION[username]!=""){
	    echo "<a href='logout.php'>ע���뿪</a>";
	  }
	?>
    </td>
  </tr>

</table>
<table width="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"  align="center"><br>
	<form id="searchForm" action="./search.php" method="post">

					�����Ʒ����<input class="inputText" id="goodsName" size="20" onKeyPress="if(event.keyCode==13){searchFormSubmit();return false;}" name="goodsName" type="text" />

					<input type="submit" value="����">

		</form></td>
        <td height="30" align="center">
		<script type="text/javascript">

	        function login()
	        {
	           if(document.userLogin.userName.value=="")
	           {
	               alert("�������û���");
return(false);
}
	           if(document.userLogin.userPw.value=="")
	           {
	               alert("����������");
	              return(false);
	           }
   return(true);
	        }

	</script>
<?php 
if($_SESSION[login]=="")
{
?><form action="login.php?act=login" name="userLogin" method="post" onSubmit="return login()">�û�����<input class="input" id="username" title="�û�������Ϊ��" size="14" name="userName" type="text" value="zhaoyi" />�ܡ��룺<input class="input" title="���벻��Ϊ��" type="password" size="16" name="userPw" value="123456"/>  <input type="submit" value="��  ¼"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />


<?php 
}  else
  {
   ?>

			     ��ӭ����<?php  echo $_SESSION[login]?> &nbsp;&nbsp;<a href="./myorder.php">�ҵĶ���</a>&nbsp;&nbsp;
			    <a href="./logout.php">��ȫ�˳�</a>  &nbsp;&nbsp;&nbsp;&nbsp;

<?php 
	}
	?>
</td>
  </tr>
</table></form>