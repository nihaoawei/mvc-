<?php

namespace Model;
use Framework\Model;

class FatieModel extends Model
{
	public function doFind($data)
	{	

		//select($link,'w_user','uid,username,password,udertype,pictrue,grade,allowlogin,ltime,rip',"username='$username'" ,'order by uid');
		//var_dump($data);
		$name = $data['uname'];
		$result = $this->where("uname='$name'")->select();
		return $result;
	}

	public function doAdd($data)
	{
		$result = $this->table('wzryyx')->insert($data);
		return $result;
	}

	public function doFindId($title)
	{
		//$ID = select($link,'bbs_details','id',"title='$title'",'order by id desc limit 1');
		$result = $this->table('wzryyx')->where("title='$title'")->order('yid desc')->limit('0,1')->select('yid');
		return $result;
	}

	public function doAddSui($data)
	{
		$result = $this->table('suibi')->insert($data);
		return $result;
	}

	public function doFindIdSui($title)
	{
		//$ID = select($link,'bbs_details','id',"title='$title'",'order by id desc limit 1');
		$result = $this->table('suibi')->where("stitle='$title'")->order('sid desc')->limit('0,1')->select('sid');
		return $result;
	}
}