<?php
namespace Model;
use Framework\Model;
use Framework\Page;
class IndexModel extends Model
{	
	public $page;
	public function doAdd($data)
	{
		$result = $this->insert($data);

		return $result;
	}

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
		$page = new Page($count,4);
		$ypage = $page->getOffset();
		//echo $ypage;
		$result = $this->table($string)->where("Tie = 0")->order("addtime")->limit("$ypage")->select();

		$counts=$page->render();
		return [$result,$counts];
	}

	public function selectClose()
	{
		$result=$this->table('close')->select();
		return $result;
	}

	public function dosreach($keys)
	{
		//$result = select($link,'bbs_details','title,content','',"where title like '%$keys%'");

		//$sum = select($link,'bbs_details','count(*)','',"where title like '%$keys%'");

		$result = $this->where("title like '%$keys%'")->table('wzryyx')->select('*');
		return $result;
	}

	public function doCounts($keys)
	{
		$result = $this->where("title like '%$keys%'")->table('wzryyx')->count('*');
		return $result;
	}
}