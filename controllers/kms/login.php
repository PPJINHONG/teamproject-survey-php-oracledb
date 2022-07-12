<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/KMS/login_m");
    }

    public function index()
    {
        $data['title'] = "로그인";

        $this->masterpage->setMasterPage("KMS/MasterPage");
        $this->masterpage->addContentPage("KMS/login", 'content', $data);
        $this->masterpage->show();
    }

    public function register() {
        $data['title'] = "회원가입";

        $this->masterpage->setMasterPage("KMS/MasterPage");
        $this->masterpage->addContentPage("KMS/register", 'content', $data);
        $this->masterpage->show();
    }

    public function id_chk() {
        $id = $this->input->post("user_id");
        $result = $this->login_m->id_chk($id);

        if(empty($result)) {
            echo "O";
        } else {
            echo "X";
        }
    }

    public function register_ok() {
        $regi_arr = array(
            'id'=> $this->input->post("user_id"),
            'pw'=> $this->input->post("user_pw"),
            'name'=> $this->input->post("user_name"),
            'gender'=> $this->input->post("user_gender"),
            'phone'=> $this->input->post("user_phone"),
            'birth'=> $this->input->post("user_birth")
        );

        $this->login_m->register($regi_arr);

        echo "<script>";
        echo "alert('회원가입 되었습니다.');";
        echo "location.href='/KMS/login';";
        echo "</script>";
    }

    public function login_check() {
        $id = $this->input->post("user_id");
        $pw = $this->input->post("user_pass");

        $login_ok = $this->login_m->login_check($id);

        if (empty($login_ok)) {
            // 아이디가 존재하지 않을 경우
            echo "<script>";
            echo "alert('아이디가 존재하지 않습니다.');";
            echo "history.back(-1);";
            echo "</script>";
        } else {
            // 아이디가 존재하는 경우
            if ($pw == $login_ok[0]["USER_PW"]) {
                // 비밀번호가 일치하는 경우
                echo "<script>";
                echo "location.href='/KMS/login';";
                echo "</script>";
            } else {
                // 비밀번호가 일치하지 않는 경우
                echo '<script>';
                echo 'alert("비밀번호가 일치하지 않습니다.");';
                echo 'history.back(-1);';
                echo '</script>';
            }
        }
    }
}
?>