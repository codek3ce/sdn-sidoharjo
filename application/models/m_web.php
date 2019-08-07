<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_web extends CI_Model {

	function GetTestimoni($where = ''){
		return $this->db->query("SELECT * FROM  tbl_testimoni  $where;");
	}

	function GetTotalTestimoni($where = ''){
		return $this->db->query("SELECT COUNT(*) AS total_testimoni FROM tbl_testimoni $where;");
	}

	function GetPosts($where = ''){
		return $this->db->query("SELECT * FROM tbl_posts INNER JOIN tbl_user ON tbl_user.user_id=tbl_posts.user_id INNER JOIN tbl_category ON 
			tbl_category.category_id=tbl_posts.category_id $where;");
	}

	function GetCategory($where = ''){
		return $this->db->query("SELECT * FROM  tbl_category  $where;");
	}
	
	function GetPage($where = ''){
		return $this->db->query("SELECT * FROM  tbl_page  $where;");
	}

	function GetGalleryAlbum($where = ''){
		return $this->db->query("SELECT * FROM  tbl_gallery_album  $where;");
	}

	function GetGallery($where = ''){
		return $this->db->query("SELECT * FROM  tbl_gallery  $where;");
	}

	function GetDownload($where = ''){
		return $this->db->query("SELECT * FROM  tbl_download  $where;");
	}

	function GetMenu($where = ''){
		return $this->db->query("SELECT * FROM  tbl_menu  $where;");
	}

	function GetEvent($where = ''){
		return $this->db->query("SELECT * FROM  tbl_event  $where;");
	}

	function GetTotalEvent($where = ''){
		return $this->db->query("SELECT COUNT(*) AS total_event FROM tbl_event $where;");
	}	

	function GetTotalPosts($where = ''){
		return $this->db->query("SELECT COUNT(*) AS total_posts FROM tbl_posts $where;");
	}

	function GetSlide($where = ''){
		return $this->db->query("SELECT * FROM  tbl_slide  $where;");
	}

	function GetSetting($where = ''){
		return $this->db->query("SELECT * FROM  tbl_setting  $where;");
	}
	
	//-----------		
	
	function InsertData($table,$data){
		return $this->db->insert($table,$data);
	}
	function UpdateData($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}	
	function DeleteData($table,$where){
		return $this->db->delete($table,$where);
	}
	
}?>