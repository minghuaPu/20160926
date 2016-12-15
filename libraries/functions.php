<?php



	/**
	 * 处理mysql封装的语句
	 * @param  array $where_array    array('job_name'=>'HTML5','money'=>'2423423');
	 * @param  string $conn_char  连接符号 例如： , 或 and 等等
	 * @return string             job_name='HTML5',money='234234' 
	 */
	 function do_sql_string($where_array,$conn_char)
	{
		// $where_array=array('job_name'=>'HTML5','money'=>'2423423');

		$where_col=  array_keys($where_array);//Array ( [0] => enterprise_id [1] => keywords [2] => keywords_col )
		
		$where_val=  array_values($where_array);//array(0=>"HTML5",1=>"2423423")
	
		$where_sql;
		$and_tag=' ';
		foreach ($where_col as $k => $val) {
			
			if ($val!='keywords_col') {
				if ($val=='keywords') {//知道这个语句有模糊条件查询、关键字的值、关键字？
					 $where_sql.=$and_tag.$where_array['keywords_col']." like '%".$where_val[$k]."%'";
				 }else{
					 $where_sql.=$and_tag.$val."='".$where_val[$k]."'";

				 }
				 $and_tag=' '.$conn_char.' ';
			}
			 
		}
		// return job_name='HTML5',money='234234' 
		return $where_sql;
	}
?>