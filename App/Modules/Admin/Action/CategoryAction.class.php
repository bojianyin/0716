<?php
	Class CategoryAction extends CommonAction {
		Public function index() {
			import("Class.Category",APP_PATH);
			$Cate=M("category")->order("sort")->select();
//			$this->cate=Category::getParents($Cate,9);
			$this->cate=Category::unArrayRedirect($Cate,0,0,"&nbsp;&nbsp;&nbsp;&nbsp;--");
//			$this->cate=Category::arrayMergeChilds($Cate,0);
			$this->display();
		}
		Public function addCate() {
			$this->pid=I("pid",0,"intval");
			$this->display();
		}
		Public function addCateHandler() {
			if(M("category")->add($_POST)){
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
		Public function sortCateHandler() {
			$db=M("category");
			foreach($_POST as $id=>$sort){
				$db->where(array("id"=>$id))->setField("sort",$sort);
			}
			$this->redirect(GROUP_NAME.'/Category/index');
		}
		Public function deleteCateHandler() {
			if(M("category")->delete($_GET['id'])){
				$this->success("删除成功");
			}else{
				$this->error("删除失败");
			}
		}
	}
?>