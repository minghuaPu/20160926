<?
class SystemController extends BaseController {

	public function clear_all_cache()
	{
		parent::clear_all_cache();

		parent::jump_do("清除所有缓存成功！","/job");
	}

}

?>