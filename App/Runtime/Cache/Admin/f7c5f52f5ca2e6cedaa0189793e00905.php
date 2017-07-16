<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/scrollBar.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/zUI.js"></script>
		<script>
			$(function(){
				$("#container").panel({iWheelStep:32});
			});
		</script>
	</head>
	<body>
		<div id="container">
			<div>
				<fieldset class="layui-elem-field">
				  <legend>验证码配置</legend>
				  <div class="layui-field-box">
				    	<form class="layui-form" action="<?php echo U(GROUP_NAME.'/Verify/updateVerify');?>" method="post">
							<div class="layui-form-item">
						    <div class="layui-inline">
						      <label class="layui-form-label">验证码宽度</label>
						      <div class="layui-input-inline">
						      	
						        <input type="number" lay-verify="codeWid" name="CODE_WIDTH" autocomplete="off" class="layui-input" value="<?php echo (C("CODE_WIDTH")); ?>">
						      </div>
						    </div>
						    <div class="layui-inline">
						      <label class="layui-form-label">验证码高度</label>
						      <div class="layui-input-inline">
						        <input type="number" lay-verify="codeHei" name="CODE_HEIGHT" autocomplete="off" class="layui-input"value="<?php echo (C("CODE_HEIGHT")); ?>">
						      </div>
						    </div>
						    <div class="layui-inline">
						      <label class="layui-form-label">字体路径</label>
						      <div class="layui-input-inline">
						        <input type="text" lay-verify="urls" name="FONT_URL" autocomplete="off" class="layui-input" value="<?php echo (C("FONT_URL")); ?>"/>
						      </div>
						    </div>
						  </div>
						  
						  <div class="layui-form-item">
						    <div class="layui-inline">
						      <label class="layui-form-label">字体大小</label>
						      <div class="layui-input-inline">
						        <input type="number" lay-verify="fontSize" name="FONT_SIZE" autocomplete="off" class="layui-input" value="<?php echo (C("FONT_SIZE")); ?>" />
						      </div>
						    </div>
						    <div class="layui-inline">
						      <label class="layui-form-label">干扰象素</label>
						      <div class="layui-input-inline">
						        <input type="number" lay-verify="ganrao" name="GANRAO" autocomplete="off" class="layui-input" value="<?php echo (C("GANRAO")); ?>" />
						      </div>
						    </div>
						  </div>
						   <div class="layui-form-item">
						    	<input type="submit" class="layui-btn" lay-submit="" />
						  </div>
						</form>
				  </div>
				</fieldset>
			</div>
		</div>
	</body>
	<script src="__PUBLIC__/layui/layui.js"></script>
	<script>
		layui.use(['form', 'layedit', 'laydate'], function(){
			  var form = layui.form()
			  //自定义验证规则
			  form.verify({
			    codeWid: function(value){
			      if(value == ""){
			        return '验证码宽度必填!';
			      }
			    },
			    codeHei: function(value){
			      if(value == ""){
			        return '验证码高度必填!';
			      }
			    },
			    urls: function(value){
			      if(value == ""){
			        return '字体路径必填!';
			      }
			    },
			    fontSize: function(value){
			      if(value == ""){
			        return '字体大小必填!';
			      }
			    },
			    ganrao: function(value){
			      if(value == ""){
			        return '干扰像素最小为0!'
			      }
			    }
			  });
		});
		
	</script>
</html>