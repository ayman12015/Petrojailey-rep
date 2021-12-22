<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {




    public function __construct()
    {
        parent::__construct();

       $this->load->library ( 'Ripcord' );


        $this->load->helper(array('form','url'));
        $this->lang->load('home','english');


        

    }
    

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');


    }

    public function about()
    
    {

        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');

    }

    public function technology()
    
    {

        $this->load->view('header');
        $this->load->view('tecnology');
        $this->load->view('footer');

    }

    public function capability()
    
    {

        $this->load->view('header');
        $this->load->view('capabilitydev');
        $this->load->view('footer');

    }
    public function career()
    
    {

        $this->load->view('header');
        $this->load->view('careerdev');
        $this->load->view('footer');

    }

    public function joinus()
    
    {

        $this->load->view('header');
        $this->load->view('joindev');
        $this->load->view('footer');

    }
    public function contact()
    
    {

      

       $url = "http://127.0.0.1:8069";
       $db = "connect";
       $username = "ayman4work44@gmail.com";
       $password = "vbnmxx";
     
       $common = ripcord::client("$url/xmlrpc/2/common");
       $version  = $common->version();
    // print_r($version);
       $uid = $common->authenticate($db, $username, $password, array());
     //print_r($uid);
       $models = ripcord::client("$url/xmlrpc/2/object");
       

       $id = $models->execute_kw($db, $uid, $password,
        'crm.lead', 'create',
        array(array('name'=>$_POST['service_name'],'name_lc'=>$_POST['name'],'lemail'=>$_POST['email'],'lphone'=>$_POST['phone'],'lmessage'=>$_POST['message'])));
      
       $this->load->view('header');
       $this->load->view('contractdev', $id);
       $this->load->view('footer');

   }
   





}
