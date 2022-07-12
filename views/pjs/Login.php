
<head>
    <script src="https://kit.fontawesome.com/759f1d694e.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style type ="text/css">
        body{
            margin : 0px auto;
        }
        h1{ text-align:center;
            font-size:3em;
            color:white;
        }
        .form{

            background-color:grey;
            text-align:center;
            margin : 170px auto;
            width : 400px;
            border : 1px solid black;
            border-radius:40px;
        }
        .Formcontent{
            position:relative;
            left:70px;
        }

        #login_btn{
            width:120px;
            height:50px;

        }

        .mainicon{
            font-size:7em;
            position: relative;
            right:300px;
            bottom:200px;
            background:white;
            width:70%;
        }
        .idbox {
            background: #fff;
            border-radius: 5px;
            width: 200px;
        }

        .idbox input {
            border: 0px;
        }
    </style>

    <script type = "text/javascript">
        $(function(){
            $("#login_btn").click(function(){
                if($("#user_id").val() == ""){
                    alert("아이디를 입력하세요.");
                    return;
                }
                if($("#user_pass").val() == ""){
                    alert("비밀번호를 입력하세요.");
                    return;
                }

                $("form").submit();


            });
        });
    </script>
</head>



<body>
    <form action="/PJS/login/login_check" method = "post">
        <div class = "form">
            <div class="Formcontent">
            <p><h1>LOGIN FORM</h1></p>
                <div class="mainicon"><i class="fas fa-user-tag"></i></div>
            <p class="idbox"><i class="far fa-user"></i> <input type="text" name = 'user_id' placeholder = "USER NAME" id = "user_id">
                </p>
            <p class="idbox"><i class="fas fa-unlock-alt"></i> <input type="text" name = 'user_pass' placeholder = "PASS WORD" id = "user_pass">
                </p>

                <p><input type="checkbox">Remember me      <a href="/PJS/Login/Register">회원가입</p>

            <p><input type="button" value = "LOGIN" id = "login_btn"></p>
            </div>
        </div>
    </form>
</body>

