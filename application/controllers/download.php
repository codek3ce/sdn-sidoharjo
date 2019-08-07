<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_web');
	} 
	 
	public function index(){

		$data_download = $this->m_web->GetDownload()->result_array();
		$data = array(
			'title'			=> 'Download | ',
			'data_menu' 	=> $this->m_web->GetMenu()->result_array(),
			'data_posts_news' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
			'data_event' 			=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
			'data_download' 	=> $data_download,
			'setting' => $this->m_web->GetSetting()->result_array()
		);
		$this->load->view('web/kom/kom_header',$data);
		$this->load->view('web/download',$data);
		$this->load->view('web/kom/kom_sidebar',$data);		
		$this->load->view('web/kom/kom_footer',$data);
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
