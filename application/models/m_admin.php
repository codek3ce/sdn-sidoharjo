<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_admin extends CI_Model {

	function GetUser($where = ''){
		return $this->db->query("SELECT * FROM  tbl_user  $where;");
	}

	function GetPosts($where = ''){
		return $this->db->query("SELECT * FROM tbl_posts INNER JOIN tbl_user ON tbl_user.user_id=tbl_posts.user_id INNER JOIN tbl_category ON 
			tbl_category.category_id=tbl_posts.category_id $where;");
	}

	function GetCategory($where = ''){
		return $this->db->query("SELECT * FROM  tbl_category  $where ORDER BY category_id DESC;");
	}
	
	function GetPage($where = ''){
		return $this->db->query("SELECT * FROM  tbl_page  $where;");
	}

	function GetGalleryAlbum($where = ''){
		return $this->db->query("SELECT * FROM  tbl_gallery_album  $where  ORDER BY gallery_album_id DESC;");
	}

	function GetGallery($where = ''){
		return $this->db->query("SELECT * FROM  tbl_gallery  $where  ORDER BY gallery_id DESC;");
	}

	function GetDownload($where = ''){
		return $this->db->query("SELECT * FROM  tbl_download  $where;");
	}

	function GetEvent($where = ''){
		return $this->db->query("SELECT * FROM  tbl_event  $where  ORDER BY event_date DESC;");
	}

	function GetGalleryImage(){
		return $this->db->select()->from('tbl_gallery')->get()->result();
	}

	function GetGalleryImageDellete($id){
		$gallery_image = $this->GetGalleryImage($id);
		if(!$this->db->where('gallery_id',$id)->delete('tbl_gallery')){
			return false;
		}
		unlink('assets/images/gallery/'.$gallery_image->gallery_file);
		return true;	
	}

	function GetTestimoni($where = ''){
		return $this->db->query("SELECT * FROM  tbl_testimoni  $where;");
	}

	function GetDown($where = ''){
		return $this->db->query("SELECT * FROM  tbl_download  $where ORDER BY download_id DESC;");
	}


	function GetSlide($where = ''){
		return $this->db->query("SELECT * FROM  tbl_slide  $where;");
	}

	function GetMenu($where = ''){
		return $this->db->query("SELECT * FROM  tbl_menu  $where;");
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