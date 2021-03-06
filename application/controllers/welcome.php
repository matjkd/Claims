<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('captcha_model');
	}

	public function index() {
		$segment_active = $this->uri->segment(2);
		if ($segment_active != NULL) {
			$data['menu'] = $this->uri->segment(2);
		} else {
			$data['menu'] = 'home';
		}

		 $this->get_content_data($data['menu']);
	
		$data['seo_links'] = $this->content_model->get_seo_links();
		
	
		$data['sidebar'] = "sidebox/side";
		$data['main_content'] = "global/" . $this->config_theme . "/content";
		$data['cats'] = $this->products_model->get_cats();
		$data['products'] = $this->products_model->get_all_products();
		$data['section2'] = 'global/links';
		if ($this->session->flashdata('message')) {
			$data['message'] = $this->session->flashdata('message');
		}

		$data['slideshow'] = 'header/slideshow';
		$this->load->vars($data);
		$this->load->view('template/main');
	}

	function get_content_data($menu) {
		$data['content'] = $this->content_model->get_content($menu);
		$data['captcha'] = $this->captcha_model->initiate_captcha();
		$data['testimonials'] = $this->content_model->get_category('testimonial');
		$data['accidents'] = $this->content_model->get_category('accident');
		
		
		foreach ($data['content'] as $row):

		$data['title'] = $row->title;
		$data['sidebox'] = $row->sidebox;
		$data['metatitle'] = $row->meta_title;
		$data['content_id'] = $row->content_id;
		$data['weight'] = $row->weight;
		$data['meta_keywords'] = $row->meta_keywords;
		$data['meta_description'] = $row->meta_desc;
		$data['slideshow'] = $row->slideshow;
		$data['date_added'] = $row->date_added;

		endforeach;

		//format the date
		$datestring = "%D %d%S of %M %Y";
		$time = $data['date_added'];

		$data['date_added']  = mdate($datestring, $time);


		$this->load->vars($data);
		return $data;
	}

	function home() {

		$segment_active = $this->uri->segment(3);
		if ($segment_active != NULL) {
			$data['menu'] = $this->uri->segment(3);
		} else {
			$data['menu'] = $this->uri->segment(1);
		}

		$content = $this->get_content_data($data['menu']);
		
		
		//increase weight of article
		$newWeight = $content['weight'] + 0.1;
		$newWeight;
		$this->content_model->increase_weight($content['content_id'], $newWeight);
		
		$data['sidebar'] = "sidebox/side";
		
		$data['main_content'] = "global/" . $this->config_theme . "/content";
		
		$data['section2'] = 'global/links';
		
		$data['seo_links'] = $this->content_model->get_seo_links();
		
		if ($this->session->flashdata('message')) {
			$data['message'] = $this->session->flashdata('message');
		}

		$data['slideshow'] = 'header/slideshow';
		$this->load->vars($data);
		$this->load->view('template/main');
	}

	function gallery($gallery) {
		$data['content'] = $this->content_model->get_gallery($gallery);
		$data['main_content'] = "global/gallery";
		$this->load->vars($data);
		$this->load->view('template/main');
	}

	function main() {
		$segment_active = $this->uri->segment(3);
		if ($segment_active != NULL) {
			$data['menu'] = $this->uri->segment(3);
		} else {
			$data['menu'] = 'home';
		}

		$data['content'] = $this->content_model->get_content($data['menu']);
		$data['captcha'] = $this->captcha_model->initiate_captcha();
		foreach ($data['content'] as $row):

		$data['title'] = $row->title;
		$data['sidebox'] = $row->sidebox;
		$data['metatitle'] = $row->meta_title;

		endforeach;
		$data['main_content'] = "global/" . $this->config_theme . "/content";
		$data['cats'] = $this->products_model->get_cats();
		$data['products'] = $this->products_model->get_all_products();
		$data['section2'] = 'global/links';
		if ($this->session->flashdata('message')) {
			$data['message'] = $this->session->flashdata('message');
		}

		$data['slideshow'] = 'header/slideshow';
		$this->load->vars($data);
		$this->load->view('template/main');
	}

	function login() {
		if ($this->session->flashdata('message')) {
			$data['message'] = $this->session->flashdata('message');
		}
		$id = 'login';
		$data['content'] = $this->content_model->get_content($id);
		$data['main_content'] = "user/login_form";
		$data['title'] = "Login to Eagle";

		$data['page'] = "login";
		$this->load->vars($data);
		$this->load->view('template/main');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */