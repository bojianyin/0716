<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<style>
			.layui-table tr td label{text-align: center;}
			
		</style>
	</head>
	<body>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
		  <legend>添加分类</legend>
		</fieldset>  
 	<form class="layui-form" action="<?php echo U(GROUP_NAME.'/Category/addCateHandler');?>" method="post">
		<table class="layui-table" lay-skin="line">
		  <thead>
		    <tr>
		      <th>分类名称</th>
		      <th>排序</th>
		    </tr> 
		  </thead>
		  <tbody>
		    <tr>
		    	<td>
		    		<label class="layui-form-label">CateName:</label>
		    		<div class="layui-input-inline">
		    			<input type="text" class="layui-input" name="name" lay-verify="CateName"/>
		    		</div>
		    	</td>
		    	<td>
		    		<label class="layui-form-label">Sort:</label>
		    		<div class="layui-input-inline">
		    			<input type="number" class="layui-input" value="100" name="sort"/>
		    		</div>
		    	</td>
		    </tr>
		    <tr>
		    	<td colspan="2" align="center">
		    	<div class="layui-form-item">
				    <div class="layui-input-block">
				      <input type="hidden" name="pid" id="pid" value="<?php echo ($pid); ?>" />
				      <input type="submit" value="添加分类" class="layui-btn" lay-submit="" />
				      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
				    </div>
				</div>
				</td>
		    </tr>
		  </tbody>
		  	
		</table>   
	</form>
	</body>
	<script src="__PUBLIC__/layui/layui.js"></script>
	<script>
		layui.use(['form'],function(){
			var form = layui.form();
			form.verify({
				CateName:function(value){
					if(value==""){
						return "请输入分类名称";
					}
				}
			})
		})
		
	</script>
</html>