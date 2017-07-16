<?php
	Class AttributeAction extends CommonAction {
		public function index(){
			$this->attr=M("attr")->select();
			$this->display();
		}
		public function addAttr(){
			$this->display();
		}
		Public function addAttrHandler(){
			if(M("attr")->add($_POST)){
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
	}
?>