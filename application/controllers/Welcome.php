<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	$config['protocol'] = "smtp";
// does not have to be gmail
	$config['smtp_host'] = 'smtp://mail.amazelife.co.in'; 
	$config['smtp_port'] = '465';
	$config['smtp_user'] = 'kishor.patil@amazelife.co.in';
	$config['smtp_pass'] = 'kishor@amazel';
	$config['mailtype'] = 'html';
	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['wordwrap'] = TRUE;
	
	

    $this->load->library('email',$config);
    $this->email->set_newline("\r\n");

    $this->email->from("kishor.patil@amazelife.co.in");
    $this->email->to("kishorvpatil1@gmail.com");
    $this->email->subject("Email with Codeigniter");
    $this->email->message("This is email has been sent with Codeigniter");

    if($this->email->send())
    {
        echo "Your email was sent.!";
    } else {
        show_error($this->email->print_debugger());
    }
	}
}
