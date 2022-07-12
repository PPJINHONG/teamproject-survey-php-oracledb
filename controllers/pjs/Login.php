<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this -> load -> model("/PJS/Login_m");
    }

    public function index()
    {
        $data['title'] = "로그인";

        $this->masterpage->setMasterPage("PJS/MasterPage");
        $this->masterpage->addContentPage("PJS/Login",'content',$data);
        $this->masterpage->show();
    }

    public function register(){
        $data['title'] = "회원가입";

        $this->masterpage->setMasterPage("PJS/MasterPage");
        $this->masterpage->addContentPage("PJS/Register",'content',$data);
        $this->masterpage->show();
    }

    public function idchk(){
        $id = $this -> input -> post("user_id");
        $result = $this -> Login_m -> id_check($id);

        if(empty($result)){
            echo "o";
        }
        else{
            echo "x";
        }
    }

    public function register_ok(){
        $regi_arr = array(
            'id' => $this -> input -> post("user_id"),
            'pw' => $this -> input -> post("user_pw"),
            'name' => $this -> input -> post("user_name"),
            'gender' => $this -> input -> post("user_gender"),
            'phone' => $this -> input -> post("user_phone"),
            'birth' => $this -> input -> post("user_birth")
        );

        print_r($regi_arr);

        $this->Login_m->register($regi_arr);

        echo "<script>";
        echo "alert('회원가입이 완료 되었습니다');";
        echo "location.href = '/PJS/Login';";
        echo "</script>";

    }

    public function login_check(){
        $id = $this -> input -> post("user_id");
        $pw = $this -> input -> post("user_pass");
        $login_ok = $this -> Login_m -> login_check($id);

        if(empty($login_ok)){
        //아이디가 존재하지 않을 경우
            echo "<script>";
            echo 'alert("아이디가 존재 하지 않습니다.");';
            echo "history.back(-1);";
            echo "</script>";
        }
        //아이디 존재 할 경우
        else{
            //비밀번호체크
            if($pw == $login_ok[0]["USER_PW"]){
                echo "<script>";
                echo "location.href = '/PJS/login'";
                echo "</script>";
            }
            else{
                echo "<script>";
                echo 'alert("비밀번호가 일치하지 않습니다.");';
                echo 'history.back(-1);';
                echo "</script>";
            }
        }
    }




}