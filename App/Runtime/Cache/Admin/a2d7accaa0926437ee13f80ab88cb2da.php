<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<style>
			fieldset{margin-top:20px!important;}
			input{width: 200px!important;}
		</style>
	</head>
	<body>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
		  <legend>行边框表格</legend>
		</fieldset>  
	 	<form action="<?php echo U(GROUP_NAME.'/Category/sortCateHandler');?>" class="layui-form" method="post">
			<table class="layui-table" lay-skin="line">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>名称</th>
			      <th>级别</th>
			      <th>排序</th>
			      <th>操作</th>
			    </tr> 
			  </thead>
			  <tbody>
			  		<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
				   	  	<td><?php echo ($v["id"]); ?></td>
				   	  	<td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
				   	  	<td><?php echo ($v["level"]); ?></td>
				   	  	<td>
				   	  		<input type="text" name="<?php echo ($v["id"]); ?>" class="layui-input" value="<?php echo ($v["sort"]); ?>" />
				   	  	</td>
				   	  	<td>
				   	  		[<a href="<?php echo U(GROUP_NAME.'/Category/addCate',array('pid'=>$v['id']),'');?>">添加子分类</a>]
				   	  		[<a href="">修改</a>]
				   	  		[<a href="<?php echo U(GROUP_NAME.'/Category/deleteCateHandler',array('id'=>$v['id']),'');?>">删除</a>]
				   	  	</td>
				   	  </tr><?php endforeach; endif; ?>
			   	  	<tr>
			   	  		<td colspan="5" align="center">
					    	<div class="layui-form-item">
							    <div class="layui-input-block">
							      <input type="submit" value="排序" class="layui-btn" />
							    </div>
							</div>
						</td>
			   	  	</tr>
			  </tbody>
			</table>   
		</form>
  </tbody>
</table>  
	</body>
	<script src="__PUBLIC__/layui/layui.js"></script>
</html>