<?php
	Class VerifyAction extends Action {
		Public function index() {
			$this->display();
		}
		Public function updateVerify() {
			if(F("Image",$_POST,CONF_PATH)){
				$this->success("修改成功",U(GROUP_NAME.'/Verify/index'));
			}else{
				$this->error("修改失败");				
			}
		}
	}
?>