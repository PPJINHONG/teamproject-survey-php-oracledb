<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/LJS/login_m");
        $this->load->model("/LJS/sulmun_m");
    }

    public function index()
    {
        $data['title'] = "로그인";

        $this->masterpage->setMasterPage("LJS/MasterPage");
        $this->masterpage->addContentPage("LJS/login", 'content', $data);
        $this->masterpage->show();
    }

    public function register()
    {
        $data['title'] = "회원가입";

        $this->masterpage->setMasterPage("LJS/MasterPage");
        $this->masterpage->addContentPage("LJS/register", 'content', $data);
        $this->masterpage->show();

    }

    public function id_chk()
    {
        $id = $this->input->post("user_id");
        $result = $this->login_m->id_check($id);

        if (empty($result)) {
            echo "O";
        } else {
            echo "X";
        }

    }

    public function register_ok()
    {
        $regi_arr = array(
            'id' => $this->input->post("user_id"),
            'pw' => $this->input->post("user_pw"),
            'name' => $this->input->post("user_name"),
            'gender' => $this->input->post("user_gender"),
            'phone' => $this->input->post("user_phone"),
            'birth' => $this->input->post("user_birth")
        );
        $this->login_m->register($regi_arr);

        echo "<script>";
        echo "alert('회원가입 되었습니다');";
        echo "location.href='/LJS/login';";
        echo "</script>";
    }


    public function login_check()
    {
        $id = $this->input->post("user_id");
        $pw = $this->input->post("user_pass");

        $login_ok = $this->login_m->id_check($id);

        $aa=$this->sulmun_m->level_check($id);

        if (empty($login_ok)) {
            //아이디가 존재하지 않을 경우
            echo "<script>";
            echo "alert('아이디가 존재하지 않습니다');";
            echo "history.back(-1)";
            echo "</script>";
        }
        else {
            //아이디가 존재하는 경우
            if ($pw == $login_ok[0]["USER_PW"]) {

                $this->session->set_userdata('user_id',$id);


                if(!empty($aa))
                {
                    //관리자인 경우
                    echo "<script>";
                    echo "location.href='/LJS/sulmun/sulmun_list';";
                    echo "</script>";
                }
                    //관리자가 아닌경우
                    echo "<script>";
                    echo "location.href='/LJS/login';";
                    echo "</script>";

            }
            else
                {
                //비밀번호가 존재하지 않을 경우
                echo "<script>";
                echo "alert('비밀번호가 틀렸습니다');";
                echo "history.back(-1);";
                echo "</script>";
            }
        }

    }




}

?>