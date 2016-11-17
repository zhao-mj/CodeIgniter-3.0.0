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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// var_dump($test);
		// $this->load->view('welcome_message');
		//var_dump( $this->load->driver('cache',array('adapter'=>'file','backup' => 'file', 'key_prefix' => 'my_')) );


		//var_dump( $this->load->driver('cache',array('adapter'=>'apc','backup' => 'file', 'key_prefix' => 'my_')) );
		//$this->cache->save('foo',111);
		//$this->load->driver('cache',array('adapter'=>'apc','backup' => 'file', 'key_prefix' => 'my_')) ;
		//$this->load->driver('cache',array('adapter'=>'file','backup' => 'file', 'key_prefix' => 'my_'));
		
		//$this->cache->save('foo',3333,5);

//		$this->load->driver('cache',array('adapter'=>'apc','backup' => 'file', 'key_prefix' => 'my_'));
//		var_dump($this->cache->get('foo'));

		// $prefs = array(
		//     'show_next_prev'  => TRUE,
		//     'next_prev_url'   => 'http://example.com/index.php/calendar/show/',
		// );

		// $this->load->library('calendar', $prefs);



		// var_dump($_SERVER);
		// var_dump($_SERVER['REQUEST_METHOD']);

		// $data = array(
		//     3  => 'http://example.com/news/article/2006/06/03/',
		//     7  => 'http://example.com/news/article/2006/06/07/',
		//     13 => 'http://example.com/news/article/2006/06/13/',
		//     26 => 'http://example.com/news/article/2006/06/26/'
		// );

		// //echo $this->calendar->get_month_name('5'); 
		// echo $this->calendar->get_month_name(12); 

		// echo $this->calendar->generate(1,13,$data);

		// $this->config->load('test',TRUE,TRUE);

		// var_dump($this->config->is_loaded);

		// var_dump( $this->config->item('aaa','test') );

		// var_dump($this->input->get('t',TRUE));
		// var_dump($_GET['t']);

		// var_dump($this->input->request_headers());


		// $data = array(
		//     'blog_title' => 'My Blog Title',
		//     'blog_heading' => 'My Blog Heading',
		//     'title'=>array( array("a"=>"123") )
		// );
		// $this->load->library('parser');
		// $this->parser->parse('blog_template', $data);

		$csrf = array(
		    'name' => $this->security->get_csrf_token_name(),
		    'hash' => $this->security->get_csrf_hash()
		);
		$this->load->view('welcome_aaa', array('error' => ' ','csrf'=>$csrf ));
	}

	public function aaa(){
		$this->load->helper(array('form', 'url'));
		$this->load->view('welcome_aaa', array('error' => ' ' ));
	}
}