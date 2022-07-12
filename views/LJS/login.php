<script type="text/javascript">
    $(function () {
        $('#Login_but').click(function () {
            if ($('#user_id').val() == '') {
                alert("아이디를 입력하세요.");
                return;
            }
            if ($("#user_pass").val() == "") {
                alert("비밀번호를 입력하세요");
                return;
            }
            $("form").submit();
        });
    });
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #34495e;
    }

    #box {
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        text-align: center;
    }

    #box h1 {
        color: white;
        text-transform: uppercase;
        font-weight: 500;
    }

    #box input[type = "text"], #box input[type = "password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    #box input[type = "text"]:focus, #box input[type = "password"]:focus {
        width: 280px;
        border-color: #2ecc71;
    }


    #box input[type = "button"] {
        border: 0;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
        background: #2ecc71;

    }
    a{
        text-decoration: none;
    }

    form {
        box-shadow: 5px 5px 10px #000;
    }



</style>
<body>
<form id="box" name="Login_form" method="post" action="/LJS/login/login_check">
    <h1>LOGIN</h1>
    <p><input type="text" name="user_id" id="user_id" placeholder="USER_ID"></p>
    <p><input type="password" name="user_pass" id="user_pass" placeholder="USER_PASSWORD"></p>
    <p><input type="button" id="Login_but" value="로그인"></p>
    <p><a href="login/register"> <input type="button" value="회원가입"></a></p>

</form>
</body>