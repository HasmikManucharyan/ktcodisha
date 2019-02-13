<?php
class Register extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();	
	}
	
			function index() {
				$this->view->render('register/index');
			}
			function run()
			{
					Session::init();
					$action=$_POST['submit']; 
				
						/*try {
		
		$form = new Form();
		$form	->post('fname')
				->val('minlength', 1,"First Name")
				->post('lname')
				->val('minlength', 1,"Last Name")
				->post('mobno')
				->val('minlength', 12,"Phone")
				->val('digit',"Phone")
				->post('email')
				->val('minlength', 2,"Email")
				->val('email',"Email")
				->post('password')
				->val('minlength', 6,"Password")
				->post('confirm_password')
				->val('minlength', 6,"Confirm Password")
				->compare('password','confirm_password'," Password and Confirm Password");
				//->post('last_name');
		$form	->submit();*/
		
		//echo 'The form passed!';
		$count=$this->model->run();
					if($count > 0){
							$this->view->fname=$_POST['fname'];
							$this->view->lname=$_POST['lname'];
							$this->view->username=$_POST['username'];
							$this->view->email=$_POST['email'];
							$this->view->mobno=$_POST['mobno'];
							$this->view->password=md5($_POST['password']);
							$this->view->userType=$_POST['userType'];
							$this->view->msg = $this->model->error("This Username and Mobile No Already exist.");
							//return $view->render($data);
							$this->view->render('register/index');
						}
						else{
							
							$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
				if($t->responseCode=='200') {
				$traccarCookie = Traccar::$cookie;
				$add_submituser=Traccar::addDealer($_POST['username'],$_POST['email'],$_POST['password'],$traccarCookie);
				$adduser=json_decode($add_submituser->{'response'},true);
				// echo "<pre>";
				// print_r($adduser);
			}
			$add_calanderuser=Traccar::addCalendarPermissions($adduser['id'],5,$traccarCookie);
			//print_r($data);
				$data1 = array(
					'admin_id'=>null,
					'fname'=>$_POST['fname'],
					'lname'=>$_POST['lname'],
					'username'=>$_POST['username'],
					'email'=>$_POST['email'],
					'traccar_email'=>$_POST['email'],
					'mobno'=>$_POST['mobno'],
					'password'=>md5($_POST['password']),
					'pass'=>$_POST['password'],
					'userType'=>$_POST['userType'],
					'traccarID'=>$adduser['id'],
					'parent_id'=>1
					);
					
						$apiKey = urlencode('jjumSi1I1Lk-MM4wGEcwmb1z3N1wKFtiAQS3jD9ZGx');
						// Message details
							$numbers = array($_POST['mobno']);
							//echo $numbers;
							$sender = urlencode('LIVERA');
							$FirstName = $_POST['fname'];
							$code = rand(1000, 9999);
							//$this->verify_otp($code);
							$this->view->content = $code;
							//echo $this->view->content;
							$message = rawurlencode('Hello, '.$FirstName.' your OTP for Registration in LIVERATRACK is '.$code.' Thank you ! . For any support write to account@liveratrack.com');
							$numbers = implode(',', $numbers);
							// Prepare data for POST request
							$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
							// Send the POST request with cURL
							$ch = curl_init('https://api.textlocal.in/send/');
							curl_setopt($ch, CURLOPT_POST, true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							$response = curl_exec($ch);
							curl_close($ch);
				$this->view->returnId= $this->model->run1($data1);
				$this->view->render('register/verification');
			}
		//$this->model->create($data);
		
		/*} catch (Exception $e) {
			$this->view->error = $e->getMessage();
			$this->index();
		}*/
		
	}
					function verification() {
						
				//$this->view->render('register/verification');
				$arg=$_POST['admin_id'];
				//print_r( $arg);
				$otp=$_POST['otp'];
				$code = $_POST['code'];
							//echo ($code);
					if($otp==$code)
					{
						//$arg=$_POST['admin_id'];
				//echo $arg;
						$data=array(
						'otp_verified'=>'yes'
						);
					$this->model->otp_verified($data,$arg);
					$this->view->msg = $this->model->error("Thank You for verifying Your Number, Login here to continue..");
					$this->view->render('index/index');
				
					}
					else	
					{
						$data=array(
						'otp_verified'=>'no'
						);
						$this->model->otp_not_verified($data,$arg);
						$this->view->msg = $this->model->error("You Entered an Invalid OTP.");
						$this->view->render('register/index');
					}
		}
					/*function verify_otp() {
		
							$otp=$_POST['otp'];
							$code = $_POST['code'];
							//echo ($code);
							if($otp==$code){
									$this->view->msg = $this->model->error("Thank You for verifying Your Number, Login here to continue..");
									$this->view->render('index/index');
			
										}
							else	
							{
									$this->view->msg = $this->model->error("You Entered an Invalid OTP.");
									$this->view->render('register/index');
							}
					}*/
	
					function forgotpassword() {
							$this->model->forgotpassword();
							$this->view->render('register/forgotpassword');

					}

		}
