<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_web');
	} 
	 
	public function index(){
		$data = array(
			'title'			=> '',
			'data_menu' 	=> $this->m_web->GetMenu()->result_array(),
			'data_slide_1' 	=> $this->m_web->GetSlide("ORDER BY slide_id DESC LIMIT 1")->result_array(),
			'data_slide_2' 	=> $this->m_web->GetSlide("ORDER BY slide_id DESC LIMIT 1, 5")->result_array(),
			'data_posts_news' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' ORDER BY posts_date DESC LIMIT 5")->result_array(),
			'data_testimonial' 	=> $this->m_web->GetTestimoni("ORDER BY testimoni_date DESC LIMIT 2")->result_array(),
			'data_event' 	=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
			'setting' => $this->m_web->GetSetting()->result_array()
		);
		$this->load->view('web/kom/kom_header',$data);
		$this->load->view('web/welcome',$data);	
		$this->load->view('web/kom/kom_footer',$data);
	}

	function com($id=0, $page=0){
		if($this->uri->segment(3)==null){
			show_404();
		}

		$data_com = $this->m_web->GetTotalcon("WHERE com_type='$id' AND com_status='1'")->result_array();
		$pagin_config = array(
			'uri_segment' 		=> '4',
			'per_page' 			=> '7',
			'total_rows' 		=> $data_com[0]['total_com'],
			'base_url' 			=> base_url().'web/com/'.$id.'/',
			'full_tag_open' 	=> '<nav><ul  class="pagination">',
			'full_tag_close' 	=> '</ul></nav>',
			'first_link' 		=> false,
			'last_link' 		=> false,
			'first_tag_open' 	=> '<li>',
			'first_tag_close'	=> '</li>',
			'prev_link' 		=> '&larr; Prev',
			'prev_tag_open' 	=> '<li class="previous">',
			'prev_tag_close' 	=> '</li>',
			'next_link' 		=> 'Next &rarr;',
			'next_tag_open' 	=> '<li class="next">',
			'next_tag_close' 	=> '</li>',
			'last_tag_open' 	=> '<li>',
			'last_tag_close' 	=> '</li>',
			'cur_tag_open' 		=> '<li class="active"><a href="#">',
			'cur_tag_close' 	=> '</a></li>',
			'num_tag_open' 		=> '<li>',
			'num_tag_close' 	=> '</li>'
		);		
		$this->pagination->initialize($pagin_config);
		
		if($data_com == TRUE ){	
			$data = array(
				'title'					=> '',
				'data_menu' 			=> $this->m_web->GetMenu()->result_array(),
				'data_posts_news' 		=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
				'data_event' 			=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
				'pages' 				=> $this->pagination->create_links(),
				'data_com' 	=> $this->m_web->Getcom("WHERE com_status='1' AND com_type='$id' ORDER BY com_date DESC LIMIT $page, 7")->result_array(),
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/com_type',$data);	
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			show_404();
		}
	}

	function testimoni($page=0){
		$data_testimoni = $this->m_web->GetTotalTestimoni()->result_array();
		$pagin_config = array(
			'uri_segment' 		=> '3',
			'per_page' 			=> '7',
			'total_rows' 		=> $data_testimoni[0]['total_testimoni'],
			'base_url' 			=> base_url().'web/testimoni/',
			'full_tag_open' 	=> '<nav><ul  class="pagination">',
			'full_tag_close' 	=> '</ul></nav>',
			'first_link' 		=> false,
			'last_link' 		=> false,
			'first_tag_open' 	=> '<li>',
			'first_tag_close'	=> '</li>',
			'prev_link' 		=> '&larr; Prev',
			'prev_tag_open' 	=> '<li class="previous">',
			'prev_tag_close' 	=> '</li>',
			'next_link' 		=> 'Next &rarr;',
			'next_tag_open' 	=> '<li class="next">',
			'next_tag_close' 	=> '</li>',
			'last_tag_open' 	=> '<li>',
			'last_tag_close' 	=> '</li>',
			'cur_tag_open' 		=> '<li class="active"><a href="#">',
			'cur_tag_close' 	=> '</a></li>',
			'num_tag_open' 		=> '<li>',
			'num_tag_close' 	=> '</li>'
		);		
		$this->pagination->initialize($pagin_config);
		
		if($data_testimoni == TRUE ){	
			$data = array(
				'title'					=> 'Testimoni | ',
				'data_menu' 			=> $this->m_web->GetMenu()->result_array(),
				'data_posts_news' 		=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
				'data_event' 			=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
				'pages' 				=> $this->pagination->create_links(),
				'data_testimoni' 	=> $this->m_web->GetTestimoni("ORDER BY testimoni_date DESC LIMIT $page, 7")->result_array(),
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/testimoni',$data);	
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			show_404();
		}
	}

	function event($page=0){
		$data_event = $this->m_web->GetTotalEvent()->result_array();
		$pagin_config = array(
			'uri_segment' 		=> '3',
			'per_page' 			=> '7',
			'total_rows' 		=> $data_event[0]['total_event'],
			'base_url' 			=> base_url().'web/event/',
			'full_tag_open' 	=> '<nav><ul  class="pagination">',
			'full_tag_close' 	=> '</ul></nav>',
			'first_link' 		=> false,
			'last_link' 		=> false,
			'first_tag_open' 	=> '<li>',
			'first_tag_close'	=> '</li>',
			'prev_link' 		=> '&larr; Prev',
			'prev_tag_open' 	=> '<li class="previous">',
			'prev_tag_close' 	=> '</li>',
			'next_link' 		=> 'Next &rarr;',
			'next_tag_open' 	=> '<li class="next">',
			'next_tag_close' 	=> '</li>',
			'last_tag_open' 	=> '<li>',
			'last_tag_close' 	=> '</li>',
			'cur_tag_open' 		=> '<li class="active"><a href="#">',
			'cur_tag_close' 	=> '</a></li>',
			'num_tag_open' 		=> '<li>',
			'num_tag_close' 	=> '</li>'
		);		
		$this->pagination->initialize($pagin_config);
		
		if($data_event == TRUE ){	
			$data = array(
				'title'					=> 'Student Event | ',
				'data_menu' 			=> $this->m_web->GetMenu()->result_array(),
				'data_posts_news' 		=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
				'pages' 				=> $this->pagination->create_links(),
				'data_event' 			=> $this->m_web->GetEvent("ORDER BY event_id DESC LIMIT $page, 7")->result_array(),
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/event_all',$data);	
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			show_404();
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>