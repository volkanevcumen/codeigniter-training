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
	public function index()
	{
        $personnel = array(
            array(
                'name' => 'volkan',
                'email' => 'volkan90442@gmail.com'
            ),
            array(
                'name' => 'mehmet',
                'email' => 'mehmet123@gmail.com'
            )
        );
        $viewData['personnel_list'] = $personnel;
        $this->load->view('name_listing',$viewData);

		//$this->load->view('welcome_message');
	}
	public function name_list(){

	    $viewData = array(
	      array(
	          'name' => 'volkan',
              'email' => 'volkan90442@gmail.com'
          )
        );
	    $this->load->view('name_listing',$viewData);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */