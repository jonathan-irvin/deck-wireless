<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
		
<<<<<<< HEAD
		$data['title'] = "Deck Wireless";
		$this->load->view('under_construction',$data);
	}

=======
	public function index()
	{
		// TODO Import initial html or php and separate into separate views
		// $data['title'] = "Beacon Tech Support Website";		
		// $this->load->view('header',$data);
		// $this->load->view('index_content');
		// $this->load->view('footer');
		
		$data['title'] = "Deck Wireless";
		$this->load->view('index',$data);
	}
>>>>>>> let's go ahead and just work on the index
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
