<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->library('pagination');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_web');
	} 
	 
	public function index($id=0, $id2=0, $page=0){

		if(empty($page)){
			$page = 0; 
		}

		if($this->uri->segment(3)==null){
			show_404();
		}
		$data_category = $this->m_web->GetCategory("WHERE category_id='$id' AND category_slug='$id2'")->result_array();
		$data_posts_category = $this->m_web->GetTotalPosts("WHERE category_id='$id' AND posts_status='1'")->result_array();
		$pagin_config = array(
			'uri_segment' 		=> '4',
			'per_page' 			=> '7',
			'total_rows' 		=> $data_posts_category[0]['total_posts'],
			'base_url' 			=> base_url().'category/'.$id.'/'.$id2.'/',
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
		
		if($data_category == TRUE ){	
			$data = array(
				'title'					=> $data_category[0]['category_title'].' | ',
				'category'				=> $data_category[0]['category_title'],
				'list_category' 		=> $this->m_web->GetCategory()->result_array(),
				'data_menu' 			=> $this->m_web->GetMenu()->result_array(),
				'data_posts_news' 		=> $this->m_web->GetPosts("WHERE posts_status='1' AND category_slug='news' LIMIT 5")->result_array(),
				'data_event' 			=> $this->m_web->GetEvent(" ORDER BY event_id DESC LIMIT 5")->result_array(),
				'pages' 				=> $this->pagination->create_links(),
				'data_posts_category' 	=> $this->m_web->GetPosts("WHERE posts_status='1' AND tbl_posts.category_id='$id' 
					ORDER BY posts_date DESC LIMIT $page, 7")->result_array(),
				'setting' => $this->m_web->GetSetting()->result_array()
			);		
			$this->load->view('web/kom/kom_header',$data);
			$this->load->view('web/category',$data);	
			$this->load->view('web/kom/kom_footer',$data);
		}else{
			show_404();
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>