<?php 
require("header.php");
if($act=="save")
{
$sql="select * from `user` where name='$usernc'";
$res=mysql_query($sql);
if(!mysql_num_rows($res))
	{
	$sql="insert into `user` (name,pwd,dongjie,num,sfzh,tel,qq,truename) values ('$usernc','$p1',0,'$num','$sfzh','$tel','$youbian','$truename')";
	
$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('ע��ɹ�');location.href='index.php';</script>";
	exit;
	}
	else
	{
	exit("ʧ����");
	}
	}

else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('ʧ��,�ʺ��Ѵ���');history.back();</SCRIPT>";
	exit;
}
}
?><script language="javascript">
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert("�������ʺ�!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("������ע������!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("������ȷ������!");
	 form.p2.select();
	 return(false);
	 }
	if(form.p1.value.length<6)
	 {
	 alert("ע�����볤��Ӧ����6!");
	 form.p1.select();
	 return(false);
	 }
	if(form.p1.value!=form.p2.value)
	 {
	 alert("�������ظ����벻ͬ!");
	 form.p1.select();
	 return(false);
	 }
  
   if(form.tel.value=="")
	{
	 alert("��������ϵ�绰!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("��������ʵ����!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("���������֤��!");
	 form.sfzh.select();
	 return(false);
	 }
if(form.num.value=="")
	{
	 alert("������ѧ��!");
	 form.num.select();
	 return(false);
	 }
   return(true);
  }
</script>

<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">�û�ע��</td>
  </tr></table>
<form action="?act=save" name="f" method="post" onSubmit="return chkinput(this)">
		                        <table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�ǳƣ�</td>
					                  <td align="left">
					                      <input type="text" name="usernc" size="25" class="inputcss" >
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">���룺</td>
					                  <td align="left">
                          <input type="password" name="p1" size="25" class="inputcss" >
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">ȷ�����룺</td>
					                  <td align="left">
                          <input type="password" name="p2" size="25" class="inputcss" >
					                  </td>
					              </tr>
                                   <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">ѧ�ţ�</td>
					                  <td align="left">
                          <input type="text" name="num" size="25" class="inputcss" >
					                  </td>
					              </tr>
                                  <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�˿�������</td>
					                  <td align="left">
                          <input type="text" name="truename" size="25" class="inputcss" >

		                              </td>
					              
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">��ϵqq��</td>
				                    <td align="left">                          
                          <input type="text" name="qq" size="25" class="inputcss" >
</td>
					              </tr>
					            

								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">�ֻ��ţ�</td>
					                  <td align="left">
                          <input type="text" name="tel" size="25" class="inputcss" >

		                              </td>
					              </tr>

								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">���֤�ţ�</td>
					                  <td align="left">
                          <input type="text" name="sfzh" size="25" class="inputcss" >

		                              </td>
					             
                                     <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">&nbsp;</td>
					                  <td align="left"> <input type="submit" value="ע �� �� ��"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
					              </tr>
		        				</table>

				            </form>


<?php 
require("footer.php");
?>