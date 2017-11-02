<?php
namespace Model;
use Framework\Model;

class DetailsModel extends Model
{
	public function doFind($data)
	{	

		//select($link,'w_user','uid,username,password,udertype,pictrue,grade,allowlogin,ltime,rip',"username='$username'" ,'order by uid');
		//var_dump($data);
		$name = $data['uname'];
		$result = $this->where("uname='$name'")->select();
		return $result;
	}
	public function doFinddetails($string)
	{
		
		$result = $this->table('wzryyx')->where("yid = $string and Tie = 0")->select();
		return $result;
	}
	public function doCount($yid)
	{
		$result = $this->table('wzryyx')->where("tid=$yid and Tie = 1")->count('yid');
		return $result;
	} 
	public function doFindHuifu($string)
	{
		$result = $this->table('wzryyx')->where("tid = $string")->select();
		return $result;
	}

	public function findUser($yid,$authorid)
	{
		$result = $this->table('wzryyx inner join w_user on w_wzryyx.authorid=w_user.uid ')->where("w_wzryyx.tid=$yid and w_wzryyx.Tie = 1")->select();
		return $result;
	}

	public function doAdd($data)
	{
		$result = $this->table('wzryyx')->insert($data);
		return $result;
	}



	public function doFinddetailsSui($string)
	{
		
		$result = $this->table('suibi')->where("sid = $string and Tie = 0")->select();
		return $result;
	}
	public function doCountSui($sid)
	{
		$result = $this->table('suibi')->where("tid=$sid and Tie = 1")->count('*');
		return $result;
	} 
	public function doFindHuifuSui($string)
	{
		$result = $this->table('suibi')->where("tid = $string")->select();
		return $result;
	}

	public function findUserSui($yid,$authorid)
	{
		$result = $this->table('suibi inner join w_user on w_suibi.authorid=w_user.uid ')->where("w_suibi.tid=$yid and w_suibi.Tie = 1")->select();
		return $result;
	}

	public function doAddSui($data)
	{
		$result = $this->table('suibi')->insert($data);
		return $result;
	}
}