<?php
	Class BlogRelationModel extends RelationModel {
		protected $tableName="Blog";
		protected $_link=array(
			"attr"=>array(
				"mapping_type"=>MANY_TO_MANY
				,"mapping_name"=>"attr"
				,"foreign_key"=>"bid"
				,"relation_foreign_key"=>"aid"
				,"relation_table"=>"blog_attr",
			);
		);
	}
?>