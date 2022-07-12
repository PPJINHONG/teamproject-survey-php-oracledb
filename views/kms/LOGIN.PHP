<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    body, input, select {
          margin:0px;
          padding:0px;
          font-family:"맑은 고딕", 돋움;
          font-size:13px;
    }
          body {
               margin-top:50px;
               background-color:lightskyblue;
               }
          h1 {
             text-align:center  ;
             color:white;
             font:3.0em "맑은 고딕", "Times New Roman", sans-serif;
          }
          form {
             text-align:center;
          }
          a {
             text-decoration: none;
             color:white;
          }
          fieldset{
             width:330px;
             margin:10px auto;
             border:5px solid #ffffff;
             padding:20px;
             border-radius:10px;
          }
          #login_btn {
              width: 200px;
              height: 40px;
              border-radius: 10px;
              background-color: white;
          }
    </style>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#login_btn").click(function(){
                if ($("#user_id").val() == ""){
                    alert("아이디를 입력하세요");
                    return;
                }
                if ($("#user_pass").val() == ""){
                    alert("비밀번호를 입력하세요");
                    return;
                }
                $("form").submit();
            });
        });
</script>
</head>
<body>
    <form name="login_form" method="post" action="/KMS/login/login_check" id="loginform">
    <fieldset>
        <h1>Login</h1>
        <p>아이디<input type="text" name="user_id" id="user_id" placeholder="user ID"></p>
        <p>비밀번호<input type="PASSWORD" name="user_pass"  id="user_pass" placeholder="user PASSWORD"></p>
    <p><input type="button" value="로그인하기" id="login_btn"><p>
    </hr>
        <a href="login/register">▶회원가입◀</a>
    </fieldset>
    </form>
</body>
</html>