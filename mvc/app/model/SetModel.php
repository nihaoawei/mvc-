<?php
namespace Model;
use Framework\Model;

class SetModel extends Model
{
		public function doFind($data)
	{	

		//select($link,'w_user','uid,username,password,udertype,pictrue,grade,allowlogin,ltime,rip',"username='$username'" ,'order by uid');
		//var_dump($data);
		$name = $data['uname'];
		$result = $this->where("uname='$name'")->order('uid')->select();
		return $result;
	}
}