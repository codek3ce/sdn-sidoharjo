<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blank extends CI_Controller { 
	function __construct(){  
        parent::__construct();
		$this->load->library('session','database');
		$this->load->helper('date');
		$this->load->helper(array('captcha','url','form','tgl_id'));
		$this->load->model('m_admin');
	} 
	 
	public function index(){
		$this->session_on();
		$data = array(
			'title'				=> 'Welcome',
			'session'			=> $this->session->userdata('admin'),
			'data_posts' 		=> $this->m_admin->GetPosts("LIMIT 5")->result_array(),
			'data_pages' 		=> $this->m_admin->GetPage("LIMIT 5")->result_array(),
			'data_downloads'	=> $this->m_admin->GetDownload("LIMIT 5")->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/welcome',$data);	
		$this->load->view('admin/kom/kom_b',$data);
	}

	function login($mess = 1){
		$this->load->view('admin/login',array('message' => $mess,'title' => 'Login Admin'));
	}

	function p_login(){		
		if($_POST){
			$username = addslashes($_POST['username']);
			$password = md5($_POST['password']);
				
			$temp = $this->m_admin->GetUser("WHERE user_login = '$username' AND user_password = '$password'")->result_array();
			
			if($temp != NULL){
				$data = array(
					'user_id'	=> $temp[0]['user_id'],
					'user_nama' => $temp[0]['user_nama_depan'],					
				);
				$this->session->set_userdata('admin',$data);
				session_start();
				$_SESSION['kcfinder'] = false;				
				header('location:'.base_url().'blank/');
			}else{
				header('location:'.base_url().'blank/login/0');
			}
		}
	}
	//TESTMONI
	function testimoni(){
		$this->session_on();
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'title' 		=> 'Admin Panel',
			'data_testimoni' 	=> $this->m_admin->GetTestimoni("ORDER BY testimoni_date DESC")->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/testimoni',$data);
		$this->load->view('admin/kom/kom_b');
    }
    function save_testimoni(){
		$this->session_on();
    	if($_POST){
			$data_session 	= $this->session->userdata('admin');
			$testimoni_name 		= $this->input->post('testimoni_name'); 
			$testimoni_isi 	= $this->input->post('testimoni_isi');
				
			$data = array(
				'testimoni_name'	=> $testimoni_name,
				'testimoni_isi' 	=> $testimoni_isi,
				'testimoni_date' 	=> date("Y-m-d H:i:s"),
				
			);
			$result = $this->m_admin->InsertData('tbl_testimoni',$data);
			if($result == 1 ){
				header('location:'.base_url().'blank/testimoni');
			}
			else{ 
				echo "Gagal Simpan";
			}
		}
	}	

	function del_testimoni($id = 0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_testimoni', array('testimoni_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/testimoni');
		}else{
			echo "Gagal Delete";
		}
	}


	//POSTS	
	function posts(){
		$this->session_on();
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'title' 		=> 'Admin Panel',
			'data_posts' 	=> $this->m_admin->GetPosts("ORDER BY posts_date DESC")->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/posts',$data);
		$this->load->view('admin/kom/kom_b');
		
    }		
	function new_posts(){
		$this->session_on();
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'data_category'	=> $this->m_admin->GetCategory()->result_array(),

			'posts_id'	 	=> '',
			'category_id' 	=> '',
			'posts_image' 	=> '',
			'posts_judul' 	=> '',
			'posts_isi' 	=> '',

			'posts_status' 	=> '',
			'editor_status' => 'new',

			'title' => 'Admin Panel'
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/posts_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}
	
	function edit_posts($id = 0){
		$this->session_on();
		$data_posts = $this->m_admin->GetPosts("WHERE posts_id = '$id'")->result_array();
		
		/*end label to array*/
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'data_category'	=> $this->m_admin->GetCategory()->result_array(),

			'posts_id' 		=> $data_posts[0]['posts_id'],
			'category_id' 	=> $data_posts[0]['category_id'],
			'posts_image' 	=> $data_posts[0]['posts_image'],		
			'posts_judul' 	=> $data_posts[0]['posts_judul'],
			'posts_isi' 	=> $data_posts[0]['posts_isi'],

			'posts_status' 	=> $data_posts[0]['posts_status'],
			'editor_status' => 'edit',

			'title' 		=> 'Admin Panel'
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/posts_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}
	
	function save_posts(){		
		$this->session_on();
		if($_POST){
			$data_session 	= $this->session->userdata('admin');
			$posts_id 		= $this->input->post('posts_id'); 
			$category_id 	= $this->input->post('category_id');
			$posts_image	= $this->input->post('posts_image');   
			$posts_judul 	= $this->input->post('posts_judul');  
			$posts_isi 		= $this->input->post('posts_isi');

			$posts_status 	= $this->input->post('posts_status');
			$editor_status 	= $this->input->post('editor_status');
	
			if($editor_status == "new"){
				$data = array(
					'user_id' 		=> $data_session['user_id'],
					'category_id' 	=> $category_id,
					'posts_judul' 	=> $posts_judul,
					'posts_image'	=> $posts_image,
					'posts_isi' 	=> $posts_isi,
					'posts_date' 	=> date("Y-m-d"),
					'posts_time'	=> date("H:i:s"),
					'posts_slug'	=> url_title($posts_judul, '-', TRUE),
					'posts_status' 	=> $posts_status
				);
				$result = $this->m_admin->InsertData('tbl_posts',$data);
				if($result == 1 && $category_id=='1'){
					header('location:'.base_url().'blank/posts');
				}
				elseif($result == 1 && $category_id != '1'){
					header('location:'.base_url().'blank/posts');
				}
				else{
					echo "Gagal Simpan";
				}
			}else{
				$data = array(
					'user_id' 		=> $data_session['user_id'],
					'category_id' 	=> $category_id,
					'posts_judul' 	=> $posts_judul,
					'posts_image'	=> $posts_image,
					'posts_isi' 	=> $posts_isi,
					'posts_date' 	=> date("Y-m-d"),
					'posts_time'	=> date("H:i:s"),
					'posts_slug'	=> url_title($posts_judul, '-', TRUE),
					'posts_status' 	=> $posts_status
				);
				$result = $this->m_admin->UpdateData('tbl_posts', $data, array('posts_id' => $posts_id));
				if($result == 1 && $category_id=='1'){
					header('location:'.base_url().'blank/posts');
				}
				elseif($result == 1 && $category_id != '1'){
					header('location:'.base_url().'blank/posts');
				}
				else{
					echo "Gagal Simpan";
				}
			}
		}
	}	
	
	function del_posts($id = 0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_posts', array('posts_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/posts');
		}else{
			echo "Gagal Delete";
		}
	}

	//KATEGORY
	function category(){
		$this->session_on();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),
			'category_id' 		=> '',
			'category_title' 	=> '',

			'editor_status' 	=> 'new',
			'title' 			=> 'Admin Panel',

			'data_category' 	=> $this->m_admin->GetCategory()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/category',$data);
		$this->load->view('admin/kom/kom_b');
	}
	
	function edit_category($id = 0){
		$this->session_on();
		$data_category = $this->m_admin->GetCategory("WHERE category_id = '$id'")->result_array();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),

			'category_id'		=> $data_category[0]['category_id'],
			'category_title' 	=> $data_category[0]['category_title'],

			'editor_status'		=> 'edit',
			'title' 			=> 'Admin Panel',

			'data_category' 	=> $this->m_admin->GetCategory()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/category',$data);
		$this->load->view('admin/kom/kom_b');
	}	
	
	function save_category(){		
		$this->session_on();
		if($_POST){

			$category_id		= $this->input->post('category_id'); 
			$category_title		= $this->input->post('category_title'); 
			$editor_status		= $this->input->post('editor_status');   
	
			if($editor_status == "new"){
				$data = array(
					'category_title' 	=> $category_title,
					'category_slug'		=> url_title($category_title, '-', TRUE),
				);
				$result = $this->m_admin->InsertData('tbl_category',$data);
				if($result == 1){
					header('location:'.base_url().'blank/category');
				}else{
					echo "Gagal Simpan";
				}
			}else{
				$data = array(
					'category_id' 		=> $category_id,
					'category_title' 	=> $category_title,
					'category_slug'		=> url_title($category_title, '-', TRUE),
				);
				$result = $this->m_admin->UpdateData('tbl_category', $data, array('category_id' => $category_id));
				if($result == 1){
					header('location:'.base_url().'blank/category');
				}else{
					echo "Gagal Update";
				}
			}
		}
	}

	function del_category($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_category',array('category_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/category');
		}else{
			echo "error";
		}
	}


	// PAGE	
	function page(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),
			'data_page' => $this->m_admin->GetPage()->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/page',$data);
		$this->load->view('admin/kom/kom_b');
		
	}	
	function new_page(){
		$this->session_on();
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'page_id' 		=> '',
			'page_isi' 		=> '',
			'page_title'	=> '',
			'page_image'	=> '',
			'editor_status' => 'new',
			'title'			=> 'Admin Panel'
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/page_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function edit_page($id=0){
		$this->session_on();
		$data_page = $this->m_admin->GetPage("WHERE page_id = '$id'")->result_array();
		
		/*end label to array*/
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'page_id'	 	=> $data_page[0]['page_id'],	
			'page_title' 	=> $data_page[0]['page_title'],
			'page_isi' 		=> $data_page[0]['page_isi'],
			'page_image' 	=> $data_page[0]['page_image'],
			'editor_status' => 'edit',
			'title' 		=> 'Admin Panel'
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/page_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function save_page(){		
		$this->session_on();
		if($_POST){
			$page_id		= $this->input->post('page_id'); 
			$page_title		= $this->input->post('page_title');
			$page_isi		= $this->input->post('page_isi');
			$page_image		= $this->input->post('page_image');
			$editor_status 	= $this->input->post('editor_status');
	
			if($editor_status == "new"){
				$data = array(
					'page_title' 	=> $page_title,
					'page_isi' 		=> $page_isi,
					'page_image' 	=> $page_image,
					'page_slug'		=> url_title($page_title, '-', TRUE),
				);
				$result = $this->m_admin->InsertData('tbl_page',$data);
				if($result == 1){
					header('location:'.base_url().'blank/page');
				}else{
					echo "Gagal Simpan";
				}
			}else{
				$data = array(
					'page_title' 	=> $page_title,
					'page_isi' 		=> $page_isi,
					'page_image' 	=> $page_image,
					'page_slug'		=> url_title($page_title, '-', TRUE),
				);
				$result = $this->m_admin->UpdateData('tbl_page', $data, array('page_id' => $page_id));
				if($result == 1){
					header('location:'.base_url().'blank/page');
				}else{
					echo "Gagal Update";
				}
			}
		}
	}

	function del_page($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_page',array('page_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/page');
		}else{
			echo "Gagal Hapus";
		}
	}

	// EVENT	
	function event(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),
			'data_event' => $this->m_admin->GetEvent()->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/event',$data);
		$this->load->view('admin/kom/kom_b');
		
	}	
	function new_event(){
		$this->session_on();
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'event_id' 		=> '',
			'event_isi' 	=> '',
			'event_title'	=> '',
			'event_date'	=> '',
			'editor_status' => 'new',
			'title'			=> 'Admin Panel'
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/event_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function edit_event($id=0){
		$this->session_on();
		$data_event = $this->m_admin->GetEvent("WHERE event_id = '$id'")->result_array();
		
		/*end label to array*/
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'event_id'	 	=> $data_event[0]['event_id'],	
			'event_title' 	=> $data_event[0]['event_title'],
			'event_isi' 		=> $data_event[0]['event_isi'],
			'event_date' 	=> $data_event[0]['event_date'],
			'editor_status' => 'edit',
			'title' 		=> 'Admin Panel'
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/event_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function save_event(){		
		$this->session_on();
		if($_POST){
			$event_id		= $this->input->post('event_id'); 
			$event_title		= $this->input->post('event_title');
			$event_isi		= $this->input->post('event_isi');
			$event_date		= $this->input->post('event_date');
			$editor_status 	= $this->input->post('editor_status');
	
			if($editor_status == "new"){
				$data = array(
					'event_title' 	=> $event_title,
					'event_isi' 		=> $event_isi,
					'event_date' 	=> $event_date,
					'event_slug'		=> url_title($event_title, '-', TRUE),
				);
				$result = $this->m_admin->InsertData('tbl_event',$data);
				if($result == 1){
					header('location:'.base_url().'blank/event');
				}else{
					echo "Gagal Simpan";
				}
			}else{
				$data = array(
					'event_title' 	=> $event_title,
					'event_isi' 		=> $event_isi,
					'event_date' 	=> $event_date,
					'event_slug'		=> url_title($event_title, '-', TRUE),
				);
				$result = $this->m_admin->UpdateData('tbl_event', $data, array('event_id' => $event_id));
				if($result == 1){
					header('location:'.base_url().'blank/event');
				}else{
					echo "Gagal Update";
				}
			}
		}
	}

	function del_event($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_event',array('event_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/event');
		}else{
			echo "Gagal Hapus";
		}
	}

	//ALBUM
	function album(){
		$this->session_on();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),
			'gallery_album_id' 		=> '',
			'gallery_album_title' 	=> '',
			'gallery_album_image' 	=> '',
			'gallery_album_desc' 	=> '',

			'editor_status' 	=> 'new',
			'title' 			=> 'Admin Panel',

			'data_gallery_album' 	=> $this->m_admin->GetGalleryAlbum()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/album',$data);
		$this->load->view('admin/kom/kom_b');
	}
	
	function edit_album($id=0){
		$this->session_on();
		$data_gallery_album = $this->m_admin->GetGalleryAlbum("WHERE gallery_album_id = '$id'")->result_array();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),

			'gallery_album_id'		=> $data_gallery_album[0]['gallery_album_id'],
			'gallery_album_title' 	=> $data_gallery_album[0]['gallery_album_title'],
			'gallery_album_image' 	=> $data_gallery_album[0]['gallery_album_image'],
			'gallery_album_desc' 	=> $data_gallery_album[0]['gallery_album_desc'],

			'editor_status'		=> 'edit',
			'title' 			=> 'Admin Panel',

			'data_gallery_album' => $this->m_admin->GetGalleryAlbum()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/album',$data);
		$this->load->view('admin/kom/kom_b');
	}	
	
	function save_album(){		
		$this->session_on();
		if($_POST){

			$gallery_album_id		= $this->input->post('gallery_album_id'); 
			$gallery_album_title	= $this->input->post('gallery_album_title');
			$gallery_album_image	= $this->input->post('gallery_album_image');
			$gallery_album_desc		= $this->input->post('gallery_album_desc'); 
			$editor_status			= $this->input->post('editor_status');   
	
			if($editor_status == "new"){
				$data = array(
					'gallery_album_title' 	=> $gallery_album_title,
					'gallery_album_image'	=> $gallery_album_image,
					'gallery_album_desc'	=> $gallery_album_desc,
					'gallery_album_slug'	=> url_title($gallery_album_title, '-', TRUE),
				);
				$result = $this->m_admin->InsertData('tbl_gallery_album',$data);
				if($result == 1){
					header('location:'.base_url().'blank/category');
				}else{
					echo "Gagal Simpan";
				}
			}else{
				$data = array(
					'gallery_album_id' 		=> $gallery_album_id,
					'gallery_album_title' 	=> $gallery_album_title,
					'gallery_album_image'	=> $gallery_album_image,
					'gallery_album_desc'	=> $gallery_album_desc,
					'gallery_album_slug'	=> url_title($gallery_album_title, '-', TRUE),
				);
				$result = $this->m_admin->UpdateData('tbl_gallery_album', $data, array('gallery_album_id' => $gallery_album_id));
				if($result == 1){
					header('location:'.base_url().'blank/album');
				}else{
					echo "Gagal Update";
				}
			}
		}
	}

	function del_album($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_gallery_album',array('gallery_album_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/album');
		}else{
			echo "Gagal Delete";
		}
	}

	// GALLERY	
	function photo(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),
			'data_gallery_album' => $this->m_admin->GetGalleryAlbum()->result_array(),
			'data_gallery_photo' => $this->m_admin->GetGallery("INNER JOIN tbl_gallery_album ON tbl_gallery_album.gallery_album_id=
				tbl_gallery.gallery_album_id WHERE gallery_type='photo'")->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/gallery_photo',$data);
		$this->load->view('admin/kom/kom_b');
		
	}

	function video(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),
			'data_gallery_video' => $this->m_admin->GetGallery("WHERE gallery_type='video'")->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/gallery_video',$data);
		$this->load->view('admin/kom/kom_b');
		
	}

	function save_photo(){		
		$this->session_on();

		$gallery_album_id			= $this->input->post('gallery_album_id');

		$config_fp['upload_path'] 	= './assets/images/gallery/';
	 	$config_fp['allowed_types'] = 'jpg|png|JPEG';
	 	$config_fp['file_name']		= url_title($this->input->post('gallery_data'));
		$config_fp['max_size'] 		= '300000';

		$this->load->library('upload', $config_fp);
	 	if(!$this->upload->do_upload('gallery_data')){
			 echo $this->upload->display_errors();
	 	}else{
	 		$data = array(
				'gallery_data'  	=> $this->upload->file_name,
				'gallery_album_id' 	=> $gallery_album_id,
				'gallery_type'		=> 'photo'
			);
	 		$result = $this->m_admin->InsertData('tbl_gallery',$data);
			if($result == 1){
				header('location:'.base_url().'blank/photo');
			}else{
				echo "Gagal Simpan";
			}
	 	}
	}

	function save_video(){		
		$this->session_on();
		if($_POST){
			$gallery_data		= $this->input->post('gallery_data'); 
			$data = array(
				'gallery_data' 	=> $gallery_data,
				'gallery_type' 	=> 'video'
			);
			$result = $this->m_admin->InsertData('tbl_gallery',$data);
			if($result == 1){
				header('location:'.base_url().'blank/video');
			}else{
				echo "Gagal Simpan";
			}
		}
	}

	function del_gallery_video($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_gallery',array('gallery_id' => $id));
		
		if($result == 1){
			header('location:'.base_url().'blank/video');
		}else{
			echo "Gagal Hapus";
		}
	}

	function del_gallery_photo($id=0){
		if($this->m_admin->GetGalleryImageDellete($id)){
			header('location:'.base_url().'blank/photo');
		}
	}


	// DOWNLOAD	
	function download(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),

			'data_download' => $this->m_admin->GetDown()->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/download',$data);
		$this->load->view('admin/kom/kom_b');	
	}

	function save_download(){		
		$this->session_on();

		$download_title			= $this->input->post('download_title');

		$config_fp['upload_path'] 	= './assets/f/';
	 	$config_fp['allowed_types'] = 'pdf|doc|docx|zip|rar';
	 	$config_fp['file_name']		= url_title($this->input->post('download_file'));
		$config_fp['max_size'] 		= '100000KB';

		$this->load->library('upload', $config_fp);
	 	if(!$this->upload->do_upload('download_file')){
			 echo $this->upload->display_errors();
	 	}else{
	 		$data = array(
	 			'download_title'	=> $download_title,
				'download_file'  	=> $this->upload->file_name,
				'download_date' 	=> date("Y-m-d H:i:s"),
			);
	 		$result = $this->m_admin->InsertData('tbl_download',$data);
			if($result == 1){
				header('location:'.base_url().'blank/download');
			}else{
				echo "Gagal Simpan";
			}
	 	}
	}

	function del_download($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_download',array('download_id' => $id));

		if($result == 1){
			header('location:'.base_url().'blank/download');
		}else{
			echo "Gagal Hapus";
		}
	}


	// SLIDE	
	function slide(){ 
		$this->session_on();
		$data = array (
		 	'title' 	=> 'Admin Panel',
			'session' 	=> $this->session->userdata('admin'),
			'data_slide' => $this->m_admin->GetSlide()->result_array()
		);
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/slide',$data);
		$this->load->view('admin/kom/kom_b');
		
	}	

	function edit_slide($id=0){
		$this->session_on();
		$data_slide = $this->m_admin->Getslide("WHERE slide_id = '$id'")->result_array();
		
		/*end label to array*/
		$data = array(
			'session' 		=> $this->session->userdata('admin'),
			'slide_id'	 	=> $data_slide[0]['slide_id'],	
			'slide_title' 	=> $data_slide[0]['slide_title'],
			'slide_link' 	=> $data_slide[0]['slide_link'],
			'slide_image' 	=> $data_slide[0]['slide_image'],
			'title' 		=> 'Admin Panel'
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/slide_editor',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function save_slide(){		
		$this->session_on();
		if($_POST){
			$slide_id		= $this->input->post('slide_id'); 
			$slide_title		= $this->input->post('slide_title');
			$slide_link		= $this->input->post('slide_link');
			$slide_image		= $this->input->post('slide_image');	
			
			$data = array(
				'slide_title' 	=> $slide_title,
				'slide_image' 	=> $slide_image,
				'slide_link' 	=> $slide_link,
				
			);
			$result = $this->m_admin->UpdateData('tbl_slide', $data, array('slide_id' => $slide_id));
			if($result == 1){
				header('location:'.base_url().'blank/slide');
			}else{
				echo "Gagal Update";
			}
			
		}
	}

	//MENU
	function menu(){
		$this->session_on();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),
			'menu_id' 		=> '',
			'menu_title' 	=> '',
			'menu_link' 	=> '',

			'editor_status' 	=> 'new',
			'title' 			=> 'Admin Panel',

			'data_menu' 	=> $this->m_admin->GetMenu()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/kom/kom_b');
	}
	
	function edit_menu($id = 0){
		$this->session_on();
		$data_menu = $this->m_admin->GetMenu("WHERE menu_id = '$id'")->result_array();
		$data = array(
			'session' 			=> $this->session->userdata('admin'),

			'menu_id'		=> $data_menu[0]['menu_id'],
			'menu_title' 	=> $data_menu[0]['menu_title'],
			'menu_link' 	=> $data_menu[0]['menu_link'],

			'editor_status'		=> 'edit',
			'title' 			=> 'Admin Panel',

			'data_menu' 	=> $this->m_admin->GetMenu()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/kom/kom_b');
	}	
	
	function save_menu(){		
		$this->session_on();
		if($_POST){

			$menu_id		= $this->input->post('menu_id'); 
			$menu_title		= $this->input->post('menu_title'); 
			$menu_link		= $this->input->post('menu_link');
			$editor_status	= $this->input->post('editor_status');  
	
			if($editor_status == "new"){
				$data = array(
					'menu_title' 	=> $menu_title,
					'menu_link'		=> $menu_link
				); 
				$result = $this->m_admin->InsertData('tbl_menu', $data);
				if($result == 1){
					header('location:'.base_url().'blank/menu');
				}else{
					echo "Gagal Simpan";
				}	
			}else{
				$data = array(
					'menu_id' 		=> $menu_id,
					'menu_title' 	=> $menu_title,
					'menu_link'		=> $menu_link
				);
				$result = $this->m_admin->UpdateData('tbl_menu', $data, array('menu_id' => $menu_id));
				if($result == 1){
					header('location:'.base_url().'blank/menu');
				}else{
					echo "Gagal Update";
				}
			}
		}
	}

	function del_menu($id=0){
		$this->session_on();
		$result = $this->m_admin->DeleteData('tbl_menu',array('menu_id' => $id));
		if($result == 1){
			header('location:'.base_url().'blank/menu');
		}else{
			echo "error";
		}
	}

	function setting($mess = -1){
		$this->session_on();
		$data = array(
			'session' 	=> $this->session->userdata('admin'),
			'title' 	=> 'Admin Panel',
			'message' => $mess,
			'setting' 	=> $this->m_admin->GetSetting()->result_array()
		);		
		$this->load->view('admin/kom/kom_a',$data);
		$this->load->view('admin/setting',$data);
		$this->load->view('admin/kom/kom_b');
	}

	function save_setting(){
		$this->session_on();
		if($_POST){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$keyword = $_POST['keyword'];
			$image = $_POST['image'];
			$seo = $_POST['seo'];
			$footer = $_POST['footer'];
			$css = $_POST['css'];
			$data = array(
				'web_title' => $title,
				'web_description' => $description,
				'web_keyword' => $keyword,
				'web_image' => $image,
				'google_Seo' => $seo,
                                'footer' => $footer,
				'custom_css' => $css,
			);
			$result = $this->m_admin->UpdateData('tbl_setting',$data,array('web_id' => '1'));
			if($result == 1){
				header('location:'.base_url().'blank/setting/1');
			}else{
				header('location:'.base_url().'blank/setting/0');
			}
		}
	}


	// SESSION
	function session_on(){
		if(!$this->session->userdata('admin')){
			header('location:'.base_url().'blank/login');
			exit(0);
		}
	}

	function session_off(){
		$this->session->sess_destroy();
		session_start();
		session_destroy();
		header('location:'.base_url().'blank/login');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>