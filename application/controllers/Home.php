<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller{
    public function __construct(){
        //initialization work
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Form_model');
    }

    static public function console($var){
        $js = json_encode($var);
        echo "<script>console.log($js)</script>";
    }

    public function current_url(){
        $url_array = array_filter( explode("/",explode('?' , ($this->input->server('REQUEST_URI')))[0]),
        function($str){
            if($str and $str !== "ci3"){
                return $str;
            }
        }) ;
        return $url_array;
    }
    public function index(){
        Home::console($_SERVER); //$this->input->server()   should have one argument
        Home::console($_GET);
        Home::console($_POST);
        Home::console($_COOKIE);
        Home::console(base_url());
        Home::console(explode(' ','this is some string'));

        $url_array = $this->current_url();

        self::console(array_values($url_array) ); //self keyword used to access static method or class variable


        $this->load->view('header', array('title'=>'Home' , 'url_array'=>$url_array));
        $this->load->view('home' );
        $this->load->view('footer');
        
    }

    public function form(){

        $url_array = $this->current_url();
        $this->load->view('header' , array('title'=>'Form' , 'url_array'=>$url_array) );
        $this->load->view('form' , array("type" => $this->input->get('type')));
        $this->load->view('footer');
    }
    public function form_submit(){
        $this->load->helper('url');
        $url_array = $this->current_url();

        $this->output->set_content_type('application/json');

        
        // $svg_file = fopen('statics/images/upload_photo.svg','r');
        // $this->output->set_output(fread($svg_file ,filesize( 'statics/images/upload_photo.svg' )));

        $this->output->set_output(json_encode($_FILES));
        $this->Form_model->desc_college_students();

        // $this->load->view('header' , array('title'=>'Submition', 'url_array'=>$url_array));
        // $this->load->view('form_submit');
        // $this->load->view('footer');
        
    }

}
?>