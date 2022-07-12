<script type="text/javascript">
    $(function() {
        $("#regi_btn").click(function () {
        var chk_form = [
            {'target': '아이디', 'name': 'user_id'},
            {'target': '비밀번호', 'name': 'user_pw'},
            {'target': '이름', 'name': 'user_name'},
            {'target': '성별', 'name': 'user_gender'},
            {'target': '휴대폰', 'name': 'user_phone'},
            {'target': '생년월일', 'name': 'user_birth'},
        ];

        var exists = true;
        chk_form.forEach(function(row) {
                if(exists) {
                    if ($("#" + row["name"]).val() == "") {
                        alert(row["target"] + " 입력해주세요.");
                        exists = false;
                    }
                }
            });

        $.post("idchk", {'user_id' : $("#user_id").val()}, function(data){
            if(data == "x"){
                alert("이미 아이디가 존재 합니다.");
                }else{
                if(exists){
                    $("form").submit();
                }
            }
            }, "text");

        });
    });
</script>




<form action="/PJS/login/register_ok" method ="post">
    <p>아이디 : <input type="text" name="user_id" id="user_id"></p>
    <p>비밀번호 : <input type = "password" name="user_pw" id="user_pw"></p>
    <p>이름 : <input type="text" name ="user_name" id ="user_name"></p>
    <p>성별 : <input type="radio" name ="user_gender" value="F">여자
        <input type="radio" name ="user_gender" value="M">남자</p>
    <p>휴대폰 : <input type="text" name="user_phone" id="user_phone"></p>
    <p>생년월일 : <input type="date" name="user_birth" id="user_birth"></p>
    <p><input type="button" id="regi_btn" value ="확인"></p>
</form>