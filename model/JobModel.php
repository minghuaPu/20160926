<?
/**
 * 职位模型子类
 */
Class JobModel extends BaseModel{

	public function get_total($has_only_me=true)
	{
		$where_sql;
		if ($has_only_me) {
			$where_sql=' where enterprise_id='.$_SESSION['uid'];
		}
		$sql="select count(id) as total from job ".$where_sql;

		return parent::query($sql);
	}
}

?>