<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
<script type="text/javascript" src="__PUBLIC__/Js/public.js"></script>
<title>帖子管理</title>
</head>
<body>

<div id="show">
	<table>
		<tr>
			<th>ID</th>
			<th>内容</th>
			<th>操作</th>
		</tr>
		
		<?php if(is_array($article)): foreach($article as $key=>$v): ?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo (msubstr($v["text"],0,20)); ?></td>
			<td><a href="<?php echo U('Admin/Manage/delete', array('id' => $v['id']));?>" onclick="return deletecfm()">删除</a></td>
		</tr><?php endforeach; endif; ?> 
		<tr>
			<td colspan="5" align="center"><?php echo ($page); ?></td>
		</tr>
	</table>
</div>
</body>
</html>