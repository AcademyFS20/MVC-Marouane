<?php

namespace Chat;

use Providers\Session;
use \Models\User;
use \Providers\Renderer;
use \Providers\Validator;
use \Providers\Request;



class UserController
{
    private $user;
    private $validator;

    public function getUserConnected($email)
    {
        $user = $this->user->getConnected(1,$email);
        return $user;
    }

    public function __construct()
    {
        $this->user = new User();
        $this->validator = new Validator();
    }      

   
    
    public function home()
    {
        Renderer::render('admin','login');
    }

   
    
    public function login()
    {

        $error = '';
        $status = false;
        $email = $password = "";
        $user = "";

        if (Request::post('login')) {

            $email = $this->validator->santizeStr(Request::setPost('email'));
            $password = $this->validator->santizeStr(Request::setPost('password'));

            $fields = array('email', 'password');
            $emptyChecker = $this->validator->isRequired($fields);

            if (empty($email)) {
                $error = "Email is required";
                $status = true;
                Renderer::render('admin', 'login', compact('error', 'status', 'password'));
            }

            if (empty($password)) {

                $error = "Password is required";
                $status = true;
                Renderer::render('admin', 'login', compact('error', 'status', 'email'));
            }

            $verify = $this->user->getRowbyEmail($email);

            if ($verify === 0) {

                $error = "please entrer a correct email";
                $status = true;
                Renderer::render('admin', 'login', compact('error', 'status', 'email'));

            } else {

                $user = $this->user->getUser($email);

                if (password_verify($password, $user->password)) {

                    $this->user->updateStatus(1, $user->email);
                    Session::setFlash('email', $user->email);
                    Renderer::redirectUrl('profile');

                } else {
                    $error = "Please enter a correct password";
                    $status = true;

                    Renderer::render('admin', 'login', compact('error', 'status'));

                }

            }

        }

        Renderer::render('admin', 'login', compact('error', 'status'));

    }

    public function signup()
    {

        $error = '';
        $status = false;
        $inserted = '';
        $insertstatus = false;
        $fname = $lname = $email = '';

        if (Request::post('signup')) {
            $fname = $this->validator->santizeStr(Request::setPost('fname'));
            $lname = $this->validator->santizeStr(Request::setPost('lname'));
            $email = $this->validator->santizeStr(Request::setPost('email'));
            $password = $this->validator->santizeStr(Request::setPost('password'));
            $img_name = $_FILES['img']['name'];
            $extensions = array('jpeg', 'png', 'jpg');
            $image_text = explode('.', $img_name);

            $getlastimg_ext = end($image_text);
            $isHavingEmail = $this->user->getEmail($email);

            $fields = array('fname', 'lname', 'password', 'email');
            $emptyChecker = $this->validator->isRequired($fields);

            if (!$emptyChecker) {
                $error = 'Fields are required';
                $status = true;

            } else {

                if (!$this->validator->isValidEmail($email)) {
                    $error = 'email is invalid';
                    $status = true;

                } else {

                    if ($isHavingEmail > 0) {
                        $error = 'email already exists';
                        $status = true;

                    } else if (strlen($password) < 5) {

                        $error = 'Password is too short';
                        $status = true;

                    } else if (!in_array($getlastimg_ext, $extensions)) {

                        $error = 'Image is required and must be a valid image (jpg,png,jpeg)';
                        $status = true;

                    } else {

                        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                        $isConnected = 0;

                        $img_temp = $_FILES['img']['tmp_name'];

                        if ($img_name !== '') {
                            $imgPath = $_SERVER['DOCUMENT_ROOT'] . '/MVC/public/assets/images/';
                            move_uploaded_file($img_temp, "$imgPath/$img_name");
                        }

                        $insert = $this->user->insertData($email, $hashed_password, $fname, $lname, $img_name, $isConnected);

                        if ($insert) {

                            Session::setFlash('success', 'Account Created Successfully');
                            Renderer::redirectUrl('login');
                        } else {

                            Session::setFlash('danger', 'Oops !! cant create an account !!');
                            Renderer::redirectUrl('signup');
                        }

                    }

                }

            }

        }

        Renderer::render('admin', 'signup', compact('error', 'status', 'fname', 'lname'));

    }

    public function logout()
    {
        debug('logout');
    }
}

