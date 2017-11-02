<?php
namespace Model;
use Framework\Model;

class UserModel extends Model
{
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

	public function doUpdate($data,$name)
	{
		
		$result = $this->where("uname = '$name'")->update($data);
		return $result;
	}
	public function doXiuGai($uid,$data)
	{
		$result = $this->where("uid = $uid")->update($data);
		return $result;

	}

	public function doFindOrder($uid,$ord)
	{
		$result = $this->where("uid=$uid and pass = '$ord' ")->select();
		return $result;
	}
}