<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#login_btn").click(function () {
                if($("#user_id").val()==""){
                    alert("아이디를 입력");
                    return;
                }
                if($("#user_pw").val()==""){
                    alert("비밀번호를 입력");
                    return;
                }
                $("form").submit();
            })
        })
    </script>
</head>



<style>

    .all {
        position:absolute;
        top:50%; left:50%;
        transform: translate(-50%, -50%);
        font-size: 15pt;
        text-align: center;
    }
    .all input[type="text"],
    .all input[type="password"]{
        width: 300px;
        height: 60px;
    }
    .all input[type="button"]{
        width: 300px;
        height: 60px;
    }


</style>

<body>
<div class="all">
 <h2>LOGIN</h2>
    <form name ="Login_form" method="post" action="/PJH/Login/login_check">
    <P><INPUT TYPE="text" id="user_id" NAME="user_id" placeholder="ID"></P>
    <P><INPUT TYPE="PASSWORD" id="user_pw" NAME="user_pw" placeholder="PASSWORD"></P>
    <P><INPUT TYPE="BUTTON" id="login_btn" VALUE="LOGIN" style="font-size: 18pt; color:white; background-color: cadetblue"></P>
         <a href="/PJH/login/register" style="text-decoration:none; color:white">회원가입</a>
    </form>

</div>




</body>
</html>
