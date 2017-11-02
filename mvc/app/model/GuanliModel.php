<?php
namespace Model;
use Framework\Model;

class GuanliModel extends Model
{
	public function doFind($data)
	{	

		//select($link,'w_user','uid,username,password,udertype,pictrue,grade,allowlogin,ltime,rip',"username='$username'" ,'order by uid');
		//var_dump($data);
		$name = $data['uname'];
		$result = $this->where("uname='$name'")->select();
		return $result;
	}

	public function doShanchu($string)
	{
		//del($link , 'bbs_user' , "uid in ($strId)")
		$result = $this->table('user')->where("uid in ($string)")->del();
		return $result;
	}

	public function doupdate($id,$data)
	{
		//update($link,'bbs_user',$data,"uid=$uid");
		$result = $this->table('user')->where("uid = $id")->update($data);
		return $result;
	}
	public function doSelect()
	{
		$result = $this->table('user')->where('utype=0')->select('*');
		return $result;
	}
	public function doTotal()
	{
		$result = $this->table('user')->where('utype=0')->count('uid');
		return $result;
	}

	public function doShanchu2($string)
	{
		$result = $this->table('wzryyx')->where("yid in ($string)")->del();
		return $result;
	}

	public function doSelect2()
	{
		$result = $this->table('wzryyx')->where('Tie=0')->select('*');
		return $result;
	}
	public function doTotal2()
	{
		$result = $this->table('wzryyx')->where('Tie=0')->count('yid');
		return $result;
	}

	public function doShanchu3($string)
	{
		$result = $this->table('wzryyx')->where("yid in ($string)")->del();
		return $result;
	}

	public function doSelect3()
	{
		$result = $this->table('wzryyx inner join w_user on w_wzryyx.authorid=w_user.uid ')->where("w_wzryyx.Tie = 1")->select();;
		return $result;
	}
	public function doTotal3()
	{
		$result = $this->table('wzryyx')->where('Tie=1')->count('yid');
		return $result;
	}

	public function selectClose()
	{
		$result=$this->table('close')->select();
		return $result;
	}
	public function close($data)
	{
		$this->table('close')->update($data);
	}
}