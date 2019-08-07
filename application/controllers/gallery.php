<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_web');
	} 
	 
	public function index(){
		$data = array(
			'title'			=> 'Gallery | ',
			'data_menu' 	=> $this->m_web->GetMenu()->result_array(),
			'data_posts_news' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
			'data_event' 	=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
			'data_gallery' 	=> $this->m_web->GetGalleryAlbum()->result_array(),
			'data_gallery_video' 	=> $this->m_web->GetGallery("WHERE gallery_type='video'")->result_array(),
			'setting' => $this->m_web->GetSetting()->result_array()
		);
		$this->load->view('web/kom/kom_header',$data);
		$this->load->view('web/gallery',$data);
		$this->load->view('web/kom/kom_sidebar',$data);		
		$this->load->view('web/kom/kom_footer',$data);
	}

	public function album($id=0,$id2=0){

		if($this->uri->segment(3)==null){
			show_404();
		}
		
		$data_gallery_album = $this->m_web->GetGalleryAlbum("WHERE gallery_album_id='$id'  AND  gallery_album_slug='$id2'")->result_array();
		if($data_gallery_album == TRUE AND $id != ''){	
			$data = array(
				'title'					=> $data_gallery_album[0]['gallery_album_title'].' | ',
				'data_gallery_album'	=> $data_gallery_album,
				'data_menu' 	=> $this->m_web->GetMenu()->result_array(),
				'data_gallery' 	=> $this->m_web->GetGalleryAlbum()->result_array(),
				'data_posts_news' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' ORDER BY posts_date DESC LIMIT 5")->result_array(),
				'data_event' 	=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
				'data_gallery_photo' 	=> $this->m_web->GetGallery("WHERE gallery_album_id='$id' AND gallery_type='photo'")->result_array(),
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/gallery_album',$data);	
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			shoW_404();
		}
	}

	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>