<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script>
			window.UEDITOR_HOME_URL="__ROOT__/Data/ueditor/";
			window.onload=function(){
				window.UEDITOR_CONFIG.initialFrameHeight=400;
				window.UEDITOR_CONFIG.initialFrameWidth=900;
				UE.getEditor("content");
			}
		</script>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>
	</head>
	<body>
		<fieldset class="layui-elem-field site-demo-button">
		  <legend>博文发布</legend>
		  <div>
			   <form action="<?php echo U(GROUP_NAME.'/Blog/addBlogHandler');?>" method="post" class="layui-form">
				   	<div class="layui-form-item">
				      <label class="layui-form-label">搜索选择框</label>
				      <div class="layui-input-inline">
				        <select name="cid">
				          <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
				        </select>
				      </div>
						
					</div>
					<div class="layui-form-item" pane="">
					    <label class="layui-form-label">博文属性</label>
					    <div class="layui-input-block">
					    <?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="aid[]" lay-skin="primary" value="<?php echo ($v["id"]); ?>" title="<?php echo ($v["name"]); ?>"><?php endforeach; endif; ?>
					    </div>
					</div>
					<div class="layui-form-item">
						<label for="" class="layui-form-label">博文标题</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" name="blogTitle"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label for="" class="layui-form-label">点击次数</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" name="click"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label for="" class="layui-form-label"></label>
						<div class="layui-input-block">
							<textarea name="content" id="content"></textarea>
						</div>
					</div>
					<div class="layui-form-item">
						<div class="layui-input-block">
							<input type="submit" class="layui-btn layui-btn-normal" value="保存添加"/>
						</div>
					</div>
				</form>
		  </div>
		</fieldset>
		
	</body>
	<script src="__PUBLIC__/layui/layui.js"></script>
	<script>
		layui.use(['form'],function(){
			var form = layui.form();
		})
		
	</script>
</html>