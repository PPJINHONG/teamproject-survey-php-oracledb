<style>
    .all {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 15pt;
    }

    table tr td{
        padding-bottom: 12px;
        text-align: center;
        padding-right: 20px;
        font-size: 15pt;

    }
    .all input[type="button"]{
        width: 300px;
        height: 35px;
        font-size: 15pt;
    }
    .all input[type="text"],
    .all input[type="password"],
    .all input[type="date"]
    {

        width: 200px;
        height: 35px;

    }

</style>
<script type="text/javascript">
    $(function () {
        $("#regi_btn").click(function () {

            var chk_form = [
                {'target': '아이디', 'name': 'user_id'},
                {'target': '비밀번호', 'name': 'user_pw'},
                {'target': '이름', 'name': 'user_name'},
                {'target': '성별', 'name': 'user_gender'},
                {'target': '휴대폰', 'name': 'user_phone'},
                {'target': '생년월일', 'name': 'user_birth'}
            ];
            var ex = true;
            chk_form.forEach(function (row) {
                if (ex) {
                    if ($("#" + row["name"]).val() == "") {
                        alert(row["target"] + "입력해주세요");
                        ex = false;
                    }
                }
            });

            $.post("id_chk", {'user_id': $("#user_id").val()}, function (data) {

                if (data == "X") {
                    alert("아이디가 존재합니다");
                } else {
                    if (ex) {
                        $("form").submit();
                    }

                }
            }, "text");


        });
    });
</script>

<div class="all">

    <form action="/PJH/login/register_ok" method="post">
        <table>
            <tr>
                <td>
                    아이디
                </td>
                <td>
                    <input type="text" name="user_id" id="user_id">
                </td>
            </tr>
            <tr>
                <td>
                    비밀번호
                </td>
                <td>
                    <input type="password" name="user_pw" id="user_pw">
                </td>
            </tr>
            <tr>
                <td>
              이름
                </td>
                <td>
                <input type="text" name="user_name" id="user_name">
                </td>
            </tr>
            <tr>
                <td>
               성별
                </td>
                <td>
                    <input type="radio" name="user_gender" id="user_gender" value="F">여자
                    <input type="radio" name="user_gender" value="M">남자
                </td>
            </tr>
            <tr>
                <td>
                휴대폰
                </td>
                <td>
                    <input type="text" name="user_phone" id="user_phone">
                </td>
            </tr>
            <tr>
                <td>
                생년월일
                </td>
                <td>
                <input type="date" name="user_birth" id="user_birth">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" id="regi_btn" value="확인">
                </td>
            </tr>
        </table>

    </form>

</div>