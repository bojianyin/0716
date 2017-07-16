<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	</head>
	<body>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
		  <legend>属性列表</legend>
		</fieldset>  
	 	<form action="" class="layui-form" method="post">
			<table class="layui-table" lay-skin="line">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>name</th>
			      <th>color</th>
			      <th>操作</th>
			    </tr> 
			  </thead>
			  <tbody>
			  		<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
				   	  	<td><?php echo ($v["id"]); ?></td>
				   	  	<td><?php echo ($v["name"]); ?></td>
				   	  	<td>
				   	  		<div style="width:20px;height:20px;background:<?php echo ($v['color']); ?>;"></div>
				   	  	</td>
				   	  	<td>
				   	  		[<a href="">修改</a>]
				   	  		[<a href="">删除</a>]
				   	  	</td>
				   	  </tr><?php endforeach; endif; ?>
			  </tbody>
			</table>   
		</form>
	</body>
	<script src="__PUBLIC__/layui/layui.js"></script>
</html>