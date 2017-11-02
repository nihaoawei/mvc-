<?php

namespace Model;
use Framework\Model;
//use Framework\Ucpaas;
class ZhmmModel extends Model
{
	public function doFinduser($uname,$phone)
	{
		
		$result = $this->table('user')->where("uname='$uname' and phone=$phone")->select('uid,uname,phone,pass');
		return $result;
	}
	public function doupdate($uid,$data)
	{
		$this->where("uid = $uid")->update($data);
	}
	public function doFindlala($uname)
	{
		$result = $this->table('user')->where("uname='$uname'")->select('uid,uname,phone,pass');
		return $result;
	}
}
