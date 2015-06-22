<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
<script type="text/javascript" src="__PUBLIC__/Js/public.js"></script>
<title>帖子管理</title>
<script type="text/javascript">
	var i = 1;
</script>
</head>
<body>

<div id="show">
	<table>
		<tr>
			<th>排名</th>
			<th>姓名</th>
			<th>正确率</th>
			<th>速度</th>
		</tr>
		
		<?php if(is_array($order)): foreach($order as $key=>$v): ?><tr>
			<td width="500" style="text-align: right; word-break:break-all;"><script>document.write(i++);</script></td>
			<td width="500" style="text-align: right; word-break:break-all;"><?php echo ($v["user"]); ?></td>
			<td width="500" style="text-align: right; word-break:break-all;"><?php echo ($v["zql"]); ?></td>
			<td width="500" style="text-align: right; word-break:break-all;"><?php echo ($v["speed"]); ?></td>
		</tr><?php endforeach; endif; ?> 
		<tr>
			<td colspan="5" align="center"><?php echo ($page); ?></td>
		</tr>
	</table>
</div>
</body>
</html>