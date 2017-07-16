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
		  <legend>添加属性</legend>
		</fieldset>  
 	<form class="layui-form" action="<?php echo U(GROUP_NAME.'/Attribute/addAttrHandler');?>" method="post">
		<table class="layui-table" lay-skin="line">
		  <thead>
		    <tr>
		      <th>属性名称</th>
		      <th>颜色color</th>
		    </tr> 
		  </thead>
		  <tbody>
		    <tr>
		    	<td>
		    		<label class="layui-form-label">name:</label>
		    		<div class="layui-input-inline">
		    			<input type="text" class="layui-input" name="name" lay-verify="attrName"/>
		    		</div>
		    	</td>
		    	<td>
		    		<label class="layui-form-label">color:</label>
		    		<div class="layui-input-inline">
		    			<input type="text" class="layui-input" value="" name="color" lay-verify="color"/>
		    		</div>
		    	</td>
		    </tr>
		    <tr>
		    	<td colspan="2">
		    	<div class="layui-form-item">
		    		<div class="layui-input-block">
		    			<input type="submit" value="添加属性" class="layui-btn" lay-submit="" />
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
			var form=layui.form();
			form.verify({
				attrName:function(value){
					if(value==""){
						return "请填写属性名称";
					}
				},
				color:function(value){
					if(value==""){
						return "请填写属性颜色";
					}
				}
			})
		})
		
	</script>
</html>