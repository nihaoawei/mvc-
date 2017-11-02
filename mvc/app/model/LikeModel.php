<?php
namespace Model;
use Framework\Model;
use Framework\Page;
class LikeModel extends Model
{
	public $page;
	public function doFind($data)
	{	

		//select($link,'w_user','uid,username,password,udertype,pictrue,grade,allowlogin,ltime,rip',"username='$username'" ,'order by uid');
		//var_dump($data);
		$name = $data['uname'];
		$result = $this->where("uname='$name'")->order('uid')->select();
		return $result;
	}
	public function doFindAll($string)
	{
		$count = $this->table($string)->where('Tie=0')->count('*');
		//echo $count;
		$page = new Page($count,3);
		$ypage = $page->getOffset();
		//echo $ypage;
		$result = $this->table($string)->where("Tie = 0")->order("addtime")->limit("$ypage")->select();

		$counts=$page->render();
		return [$result,$counts];
	}
}