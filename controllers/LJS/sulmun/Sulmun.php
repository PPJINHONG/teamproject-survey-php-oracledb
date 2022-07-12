<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun extends CI_Controller
{


    public function level_check()
    {
        $id = $this->input->post("user_id");
        $pw = $this->input->post("user_pass");

        $login_ok = $this->login_m->login_check($id);

        if (empty($login_ok)) {
            //아이디가 존재하지 않을 경우
            echo "<script>";
            echo "alert('아이디가 존재하지 않습니다');";
            echo "history.back(-1)";
            echo "</script>";
        } else {
            //아이디가 존재하는 경우
            if ($pw == $login_ok[0]["USER_PW"]) {
                //비밀번호가 존재하는 경우
                echo "<script>";
                echo "location,href='LJS/login';";
                echo "</script>";
            } else {
                //비밀번호가 존재하지 않을 경우
                echo "<script>";
                echo "alert('비밀번호가 틀렸습니다');";
                echo "history.back(-1);";
                echo "</script>";
            }
        }

}
?>

