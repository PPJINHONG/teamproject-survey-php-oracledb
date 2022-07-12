<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/PJH/login_m");
        $this->load->model("/PJH/sulmun_m");
    }
    public function index()
    {
        $data['title']='로그인';
        $this->masterpage->setMasterPage("PJH/MasterPage");
        $this->masterpage->addContentPage("PJH/login",'content',$data);
        $this->masterpage->show();

/*
        $c=123;
        $a=array(
            'aa'=>$c,
            'bb'=>$c
        );
        $a1=$a['aa'];
        $a2=$a['bb'];

        echo "<script>";
        echo "console.log('".$a1."','".$a2."')";
        echo "</script>";
*/
        //http://218.236.176.73/PJH/login
    }
    public function register()
    {
        $data['title']='회원가입';

        $this->masterpage->setMasterPage("PJH/MasterPage");
        $this->masterpage->addContentPage("PJH/register",'content',$data);
        $this->masterpage->show();


    }
    public function id_chk()
    {
        $id = $this->input->post("user_id");
        $result = $this->login_m->login_check($id);

        if(empty($result)){
            echo "O";
        }
        else{
            echo "X";
        }

    }

    public function register_ok()
    {    //변수 $id 의 데이터를 넣고 이용
        //데이터를 가져오거나 불러오려면 $data=array('id'=>$id);

        $regi_arr=array(
            'id'=>$this->input->post("user_id"),
            'pw'=>$this->input->post("user_pw"),
            'name'=>$this->input->post("user_name"),
            'gender'=>$this->input->post("user_gender"),
            'phone'=>$this->input->post("user_phone"),
            'birth'=>$this->input->post("user_birth")
        );

        $this->login_m->register($regi_arr);

        echo "<script>";
        echo "alert('회원가입성공');";
        echo "location.href='/PJH/login';";
        echo "</script>";


    }
    public function login_check()
    {
        $id = $this->input->post("user_id");
        $pw = $this->input->post("user_pw");

        $login_ok=$this->login_m->Login_check($id);

        $who=$this->sulmun_m->who_chk($id);


        if(empty($login_ok)){
            echo "<script>";
            echo "alert('아이디가 존재하지 않습니다');";
            echo "history.back(-1);";
            echo "</script>";

        }else{
            if($pw==$login_ok[0]["USER_PW"]){

                $this->session->set_userdata('user_id',$id);

                if(!empty($who))
                {
                    echo "<script>";
                    echo "location.href='/PJH/sulmun/sulmun_list';";
                    echo "</script>";
                }

                echo "<script>";
                echo "location.href='/PJH/login';";
                echo "</script>";
            }
            else{
                echo "<script>";
                echo "alert('비밀번호가 일치하지않습니다');";
                echo "history.back(-1);";
                echo "</script>";

            }
        }

    }

}