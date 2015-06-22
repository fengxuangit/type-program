<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>添加博文</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
<script type="text/javascript">

	window.UEDITOR_HOME_URL = '__PUBLIC__/ueditor/';
	window.onload = function () {
		window.UEDITOR_CONFIG.initialFrameWidth = 1000;
		window.UEDITOR_CONFIG.initialFrameHeight = 500;
		window.UEDITOR_CONFIG.savePath = ['Upload'];
	    window.UEDITOR_CONFIG.imageUrl = "<?php echo U('Admin/Blog/upload');?>";             //图片上传提交地址
	    window.UEDITOR_CONFIG.imagePath = '__ROOT__/Blog/blog/Public/Upload/';    
	    UE.getEditor('content');
	}
</script>

<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>

</head>
<body>

<FORM action="<?php echo U('Admin/Manage/addattr');?>" method="post">
<table class="table">
	<tr>
			<th colspan="2">博文发布</th>
	</tr>
	<tr>
		<td align="right" width="10%">所属分类</td>
		<td>
		<SELECT name="cid">
			<option value="">==请选择分类==</option> 
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
			</SELECT>
		</td>
	</tr>
	<tr>
		<td align="right">博文精华</td>
		<td>
			<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><lable style="margin-height='10px'">
					<input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>" /><?php echo ($v["name"]); ?>&nbsp;
				</lable><?php endforeach; endif; ?>
		</td>
	</tr>
	<tr>	
		<td align="right">点击次数</td>
		<td><input type="text" name="click" value="100" /></td>
	</tr>
	<tr>
		<td  align="right">标题</td>
		<td><input type="text" name="title" /></td>
	</tr>
		<tr>
		<td  align="right">摘要</td>
		<td><input type="text" name="sumary" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<TEXTAREA name="content" id="contents" style="width:660;height:200;"></TEXTAREA> 
		</td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" /></td>
	</tr>
</table>
</FORM>
</body>
</html>