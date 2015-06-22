<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>javascript编写的网页版的打字测试程序</title>
<script type="text/JavaScript">
function MM_callJS(jsStr) { //v2.0
	  return eval(jsStr)
	}
	function check()
	{
	      
	  str="深山工作室是一支专业网站建设团队，成立于2006年10月。专业为各类企事业单位以及个人等提供各类网站建设以及网页设计服务，并树立了良好的口碑，积累了丰富的网站建设相关经验，我们的专业水准亦得到行业内外的广泛认可。服务项目包括连云港网站建设、网页设计、广告设计、平面设计、网站SEO优化、网站推广、域名注册、虚拟主机等。我们凭借多年对互联网技术的深入学习、钻研研究，对中国互联网的现状和发展趋势的把握，以及在网站建设、推广服务方面的成熟经验，已经形成了自己独到的管理方式，保证每个项目能够得以顺利完成，并能够在最大程度上保障为客户提供优秀的作品，完善的售前、售后服务！";
	   
	   newstr='';
	   tempstr='';
	   zq=0;
	   len=str.length;
	   len1=form1.text.value.length;
	   for(j=0;j<len;j++)
	   if(str.charAt(j)==form1.text.value.charAt(j))
	   {  
	      if(str.charAt(j)=='\n')tempstr="<br>";
	   else tempstr="<font color='green'>"+str.charAt(j)+"</font>";
	      newstr+=tempstr;
	   zq++;
	   }
	   else 
	   {
	      if(j>=len1) newstr+="<font color=white>"+str.charAt(j)+"</font>";
	   else  newstr+="<font color=red>"+str.charAt(j)+"</font>";
	   }
	   txt.innerHTML=newstr;

	    form1.zql.value=Math.round(zq/len1*100);
	    
	}
	limit=60;
	 i=0;
	function timer()
	{
	  if(limit==1)
	  {
	    alert("时间到!");
	    form1.submit();
	 }
	 else 
	 {
	    limit-=1;
	    
	      i++;
	     form1.left.value="剩余时间"+limit+"秒";
	      form1.sd.value=Math.round(form1.text.value.length/i*60);
	   form1.bt.disabled='disabled';
	    setTimeout("timer()",1000);
	 }
	}

	function MM_popupMsg(msg) { //v1.0
	  alert(msg);
	}
	//-->
	</script>
<style type="text/css">
<!--
.text {
 font-size: 24px;
 text-transform: none;
}
#Layer1 {
 position:absolute;
 left:19px;
 top:33px;
 width:612px;
 height:436px;
 z-index:1;
 background-color: #999999;
 overflow: auto;
}
body {
 background-image: url(/oblog/body_bg.gif);
}
#text {
	height:350px;
	
}
#btn{
	BORDER-RIGHT: #7b9ebd 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #7b9ebd 1px solid; PADDING-LEFT: 2px; FONT-SIZE: 12px; FILTER: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr=#ffffff, EndColorStr=#cecfde); BORDER-LEFT: #7b9ebd 1px solid; CURSOR: hand; COLOR: black; PADDING-TOP: 2px; BORDER-BOTTOM: #7b9ebd 1px solid;
	
}
-->
</style>
</head>

<body onContextMenu="return false">
<div id="Layer1">
  <div class="text" id='div' >
    <div class="text" id='txt'>对照区</div>
  </div>
</div>
<div align="right">
<form id="form1" name="form1" method="post" action="<?php echo U('Index/Index/end');?>">
  <p> </p>
  <label><br />
  
  姓名
	<?php echo ($user); ?>
  班级
	<?php echo ($class); ?>
  <br />
  <br />
  <br />
  <input name="bt" type="button" onclick="timer();MM_callJS('check()');" value="开始测试"  />
  <input name="left" type="text" id="left" />
  速度
  <input name="sd" type="text" id="sd" size="5" />
  字/分钟
  正确率
  <input name="zql" type="text" id="zql" size="5" />
  <br />
  <textarea name="text" cols="51" rows="4" class="text" id="text"  onpaste="return false"></textarea>
  <br/>
  <input id="btn" type="button" onclick="document.form1.submit()" name="send" value="提交" style="width:200px; height:30px;" />
  </label>
  </form>