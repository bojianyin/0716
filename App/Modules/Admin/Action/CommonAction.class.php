<?php
	Class CommonAction extends Action {
		Public function _initialize(){
			if(!$_SESSION['uid'] and !$_SESSION["user"]){
				$this->redirect(GROUP_NAME."/Login/index");
			}
		}
	}
?>