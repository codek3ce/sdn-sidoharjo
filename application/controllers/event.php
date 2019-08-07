<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_web');
	} 
	 
	public function index($id=0,$id2=0){

		if($this->uri->segment(3)==null){
			show_404();
		}
		
		$data_event = $this->m_web->GetEvent("WHERE event_id='$id' AND  event_slug='$id2'")->result_array();
		if($data_event == TRUE ){	
			$data = array(
				'title'			=> $data_event[0]['event_title'].' | ',
				'data_menu' 	=> $this->m_web->GetMenu()->result_array(),
				'data_posts_news' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
				'data_event' 	=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
				'data_event_list' 	=> $data_event,
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/event',$data);
			$this->load->view('web/kom/kom_sidebar',$data);		
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			shoW_404();
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>