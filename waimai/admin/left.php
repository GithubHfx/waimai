<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="resource/theme/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="resource/theme/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//�����л�
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})
</script>
</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>���ܲ˵�</div>
<!--��ʼ-->
<dl class="leftmenu">
    <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>���Ź������</div> 
	<ul class="menuson">
 <li><cite></cite><a href="notice.php?action=list" target="manFrame">���Ź������</a><i></i></li>
  <li><cite></cite><a href="notice.php?action=add" target="manFrame">������Ź���</a><i></i></li>

	</ul>
    </dd>   
     <!--����-->

<!--��ʼ-->
<dl class="leftmenu">
    <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>�û�����</div> 
	<ul class="menuson">
 <li><cite></cite><a href="user.php" target="manFrame">ע���û�����</a><i></i></li>
	</ul>
    </dd>   
     <!--����-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>��Ʒ����</div>
    <ul class="menuson">
 <li><cite></cite><a href="goods_add.php" target="manFrame">��Ӳ�Ʒ</a><i></i></li>
 <li><cite></cite><a href="goods.php" target="manFrame">��Ʒ����</a><i></i></li>
 <li><cite></cite><a href="leibie.php" target="manFrame">��Ʒ������</a><i></i></li>
  <li><cite></cite><a href="pingjia.php" target="manFrame">��Ʒ���۹���</a><i></i></li>

 	</ul>
    </dd>   
     <!--����-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>��������</div>
    <ul class="menuson">
 <li><cite></cite><a href="order.php" target="manFrame">��������</a><i></i></li>



 	</ul>
    </dd>   
     <!--����-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>����Ա����</div>
    <ul class="menuson">
 <li><cite></cite><a href="admin_add.php" target="manFrame">��ӹ���Ա</a><i></i></li>
 <li><cite></cite><a href="admin.php" target="manFrame">����Ա����</a><i></i></li>
 
 	</ul>
    </dd>   
     <!--����-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>�˳�ϵͳ</div>
    <ul class="menuson">
 <li><cite></cite><a href="../logout.php" target="_top">�˳���̨</a><i></i></li>
</ul>
    </dd>   
    </dl><!--����-->
    </body>
</html>