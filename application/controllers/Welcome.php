<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function sendSMS(){
        if(isset($_POST['btn_send'])){
             $this->form_validation->set_rules('txt_phone', 'Phone', 'trim|required|xss_clean');
             $this->form_validation->set_rules('txt_message', 'Message', 'required|xss_clean',array('required' => 'You must provide a %s.'));
            if($this->form_validation->run()==FALSE) {
            $this->index();
            }
        else{
           $phone =$this->input->post('txt_phone');
           $message=$this->input->post('txt_message');
        include APPPATH . 'third_party/AfricasTalkingGateway.php';
        $username = "YOUR_APP_USERNAME";
        $apikey = "YOUR_API_KEY";

        $gateway = new AfricasTalkingGateway($username, $apikey);

         try {
            $results1 = $gateway->sendMessage($phone, $message);
            $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Success </strong> Button clicked.</div>');
            redirect('Welcome/index');

        } catch (AfricasTalkingGatewayException $e) {
            echo "Encountered an error while sending: " . $e->getMessage();
        }


          }

        }
    }
}
