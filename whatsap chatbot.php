<?php 
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatBot extends CI_Controller {
	public function __construct() {
		parent::__construct();
     }
     public function post_message(){
          $data = json_decode(file_get_contents('php://input'), true);
          if(isset($data["messages"])){
               $array_msg["messages"]=array();
               $json=file_get_contents("notify.txt");
               $json = rtrim($json, "\0");
               $messages=json_decode($json,TRUE);
               if(!empty($messages)){ 
                    foreach($messages["messages"] as $message){
                         array_push($array_msg["messages"],$message);
                    }
               }
               foreach($data['messages'] as $message){
                    array_push($array_msg["messages"],array("message"=>$message));
                    $msg=json_encode($array_msg);
               }
               file_put_contents('notify.txt',$msg);
          }
     }
     public function get_message(){
          if(isset($_GET)){
               $data=file_get_contents("notify.txt");
               $data = rtrim($data, "\0");
               $messages=json_decode($data,TRUE);
               if(!empty($messages)){ 
					echo json_encode($messages["messages"]);
					file_put_contents('notify.txt',"");
                    
               }else{
                    echo json_encode(array("error"=>"No New Messages!"));
               }
          }
    }
	
	
}
?>