<?php
	Class Category {
		Static Public function unArrayRedirect($cate,$pid=0,$level=0,$htm='--'){
			$arr=array();
			foreach($cate as $key=>$v){
				if($v['pid']==$pid){
					$v['level']=$level+1;
					$v['html']=str_repeat($htm,$level);
					$arr[]=$v;
					$arr=array_merge($arr,self::unArrayRedirect($cate,$v['id'],$level+1,$htm));
				}
			}
			return $arr;
		}
		Static Public function arrayMergeChilds($cate,$pid=0){
			$ary=array();
			foreach($cate as $v){
				if($v['pid']==$pid){
					$v['child']=self::arrayMergeChilds($cate,$v['id']);
					$ary[]=$v;
				}
			}
			return $ary;
		}
		
		Static Public function getParents($cate,$id) {
			$ary=array();
			foreach($cate as $v){
				if($v['id']==$id){
					$ary[]=$v;
					$ary=array_merge(self::getParents($cate,$v['pid']),$ary);
				}
			}
			return $ary;
		}
	}
?>