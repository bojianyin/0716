<?php
	Class BlogAction extends CommonAction {
		Public function index(){
			echo "111";
		}
		Public function addBlog(){
			import("Class.Category",APP_PATH);
			$cate=M("category")->order("sort")->select();
			$this->cate=Category::unArrayRedirect($cate);
			$this->attr=M("attr")->select();
			
			$this->display();
		}
		Public function addBlogHandler(){
			$data=array(
				"click"=>$_POST['click']
				,"title"=>$_POST['blogTitle']
				,"content"=>$_POST['content']
				,"cid"=>$_POST['cid']
				,"time"=>time()
			);
			if($bid=M("blog")->add($data)){
				if(isset($_POST['aid'])){
					$sql="INSERT INTO `".C('DB_PREFIX')."blog_attr` (bid,aid) VALUES";
					foreach($_POST['aid'] as $v){
						$sql.="(".$bid.",".$v."),";
					}
					$sql=rtrim($sql,",");
					M("blog_attr")->query($sql);
				}
				$this->success("发布成功",U(GROUP_NAME."/Blog/index"));
				
			}else{
				$this->error("发布失败");
			}
		}
		
		//upload练习
		Public function upload() {
			$this->url=I("url");
			$this->display();
		}
		Public function uploadHandler(){
			import("ORG.Net.UploadFile");
			import("ORG.Util.Image");
			$load=new UploadFile();
			$load->supportMulti=true;
			$load->autoSub=true;
			$load->subType="date";
			$load->dateFormat="Ymd";
			
			if($load->upload("./upload/")){
				$info=$load->getUploadFileInfo();
				Image::water('./upload/'.$info[0]["savename"],'./upload/logo.png');
				$this->success("上传成功");
			}else{
				$this->error($load->getErrorMsg(),5);
			}
			
		}
	}
?>