<?php 
require("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><div align="center">
     
      <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
    <td width="950" height="34" class="menu_bar" colspan="10"> 评价列表</td>
  </tr>
        <?php 
       $sql=mysql_query("select count(*) as total from pingjia where spid='".$_GET[id]."'");
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无用户发表评论!";
	   }
	   else
	   {
	       $pagesize=3;
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
             $sql1=mysql_query("select * from pingjia where spid='".$_GET[id]."' order by time desc limit ".($page-1)*$pagesize.",$pagesize ");
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
          <br>
        <tr>
          <td width="70" height="20"><div align="center">菜品名称：</div></td>
          <td width="181"><div align="left">
              <?php 
		     $spid=$info1[spid];
			 $sql2=mysql_query("select name from goods where id=".$spid."");
			 $info2=mysql_fetch_array($sql2);
			 echo $info2[name];
		  ?>
          </div></td>
          <td width="70"><div align="center">评论时间：</div></td>
          <td width="229"><div align="left"><?php  echo $info1[time];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">评论者：</div></td>
          <td height="20" colspan="3"><div align="left">
              <?php 
		     $spid=$info1[userid];
			 $sql3=mysql_query("select name from user where id=".$spid."");
			 $info3=mysql_fetch_array($sql3);
			 echo $info3[name];

		  ?>
          </div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">评论主题：</div></td>
          <td height="20" colspan="3"><div align="left"><?php  echo $info1[title];?></div></td>
        </tr>

        <tr>
          <td height="40"><div align="center">评论内容：</div></td>
          <td height="40" colspan="3" ><div align="left"><?php  echo $info1[content];?></div></td>
        </tr>
        <tr>
          <td height="10" colspan="4" background="images/line1.gif"></td>
        </tr>
        <?php 
		   }
		  }
		  ?>
      </table>
      <table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"> &nbsp;本站共有该菜品评论&nbsp;
                  <?php 
		   echo $total;
		  ?>
          &nbsp;条&nbsp;每页显示&nbsp;<?php  echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php  echo $page;?>&nbsp;页/共&nbsp;<?php  echo $pagecount; ?>&nbsp;页
                  <?php 
		  if($page>=2)
		  {
		  ?>
                  <a href="showpl.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="showpl.php?id=<?php  echo $id;?>&page=<?php  echo $page-1;?>&spid=<?php  echo $spid;?>&id=<?php  echo $id;?>" title="前一页"><font face="webdings"> 7 </font></a>
                  <?php 
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
                  <a href="showpl.php?page=<?php  echo $i;?>&spid=<?php  echo $spid;?>&id=<?php  echo $id;?>"><?php  echo $i;?></a>
                  <?php 
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
                  <a href="showpl.php?page=<?php  echo $i;?>&spid=<?php  echo $spid;?>&id=<?php  echo $id;?>"><?php  echo $i;?></a>
                  <?php  }?>
                  <a href="showpl.php?page=<?php  echo $page-1;?>&spid=<?php  echo $spid;?>&id=<?php  echo $id;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="editgoods.php?id=<?php  echo $id;?>&page=<?php  echo $pagecount;?>&spid=<?php  echo $spid;?>&id=<?php  echo $id;?>" title="尾页"><font face="webdings"> : </font></a>
                  <?php  }?>
          </div></td>
        </tr>
      </table>
    </div></td>

  </tr>
</table>

<?php 
require("footer.php");
?>