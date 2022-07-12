<script type="text/javascript">

    $(function () {

        const sv_doc_num = '<?=$sv_doc_num;?>';
        let qt_type = "";
        const question_html = $("#question").html();

        if (sv_doc_num == "") {
            alert("no data");
            self.close();
        }


        $("#sel").change(function () {
            qt_type = $("#sel option:selected").val();

            $("#question").html(question_html);


            if (qt_type != 0 && qt_type != 3) {
                $("#question").show();
            } else {
                $("#question").hide();
            }

        })
        $('#ct_bt').click(function () {
            if ($("#sel option:selected").val() == "0") {
                alert('문항졸류를 선택해주세요');
                return
            }
            const type_arr = [null, "radio", "checkbox", null];

            if ($("#sel option:selected").val() == "3") {
                alert('서술형은 추가 ㄴㄴ');
                return
            }


            html = '<tr>';
            if (type_arr[qt_type] != null) {
                html += '<td style="text-align:center";><input type="' + type_arr[qt_type] + '"></td>';
            } else {
                html += '<td></td>';
            }
            html += '<td><input type="text" name="qt[]"></td>';
            html += '<td style ="text-align:center;"><span name="delitem">X</span></td>';
            html += '</tr>';

            $('#question table').append(html);
        });

        $(document).on("click", "span[name='delitem']", function () {
            let trNum = $(this).closest("tr").prevAll().length;
            if (confirm("정말삭제하시겠습니까?")) {

            }

            $("#question table tr").eq(trNum).remove();
        });

        $("#save").click(function () {

            if ($("#title").val() == "") {
                alert("빈칸입력");
                return;
            }
            if ($("#dis").val() == "") {
                alert("빈칸입력");
                return;
            }

            let qt_arr = [];

            if (qt_type != 3) {
                if ($("#question table tr").length <= 1) {
                    alert("항목이존재하지않습니다");
                    return;
                }


                for (i = 0; i < $("input:text[name='qt[]']").length; i++) {
                    qt_arr.push($("input:text[name='qt[]']").eq(i).val());
                }
            }

            let qt_chyn = ($('#check').prop("checked")) ? "Y" : "N";
            $.post("/PJH/sulmun/sulmun_add_result", {
                "sv_doc_num": sv_doc_num,
                "title": $("#title").val(),
                "dis": $("#dis").val(),
                "check": qt_chyn,
                "qt_type": qt_type,
                "qt_data": qt_arr
            }, function (data) {
                alert("저장");
                console.log(data);
                self.close();

            }, "text");

        });
    });
    /*
    $('#sel').on('change', function () {
        if ($("#sel option:selected").val() == "1") {
            var source;
            source = "<label><input type='radio' name='chk_info' value='veryhard'>매우 어렵다</label><br>";
            source += '<label><input type="radio" name="chk_info" value="hard">어렵다</label><br>';
            source += '<label><input type="radio" name="chk_info" value="mid">보통이다</label><br>';
            //source += '<label><input type="radio" id="aaa" name="chk_info" value="textz"><input type="text" name="chk_info1" value=""></label>';

            $("#selcon").empty();

            $("#selcon").append(source);

        }
        if ($("#sel option:selected").val() == "2") {
            var source;
            source = "<label><input type='checkbox' name='chk_info' value='veryhard'>매우 어렵다</label><br>";
            source += '<label><input type="checkbox" name="chk_info" value="hard">어렵다</label><br>';
            source += '<label><input type="checkbox" name="chk_info" value="mid">보통이다</label><br>';
            //   source += '<label><input type="checkbox" id="aaa" name="chk_info" value="textz"><input type="text" name="chk_info1" value=""></label>';
            $("#selcon").empty();
            $("#selcon").append(source);
        }
        if ($("#sel option:selected").val() == "3") {
            var source;
            source = "<label><textarea name='' id='' cols='70' rows='10'></textarea></label>";
            $("#selcon").empty();
            $("#selcon").append(source);
        }
        if ($("#sel option:selected").val() == "4") {
            var source;
            source = "<label><input type='file' name='chk_info' value='veryhard'></label>";

            $("#selcon").empty();
            $("#selcon").append(source);
        }
    });

    $("#ex").click(function () {
        window.history.back();
    });
    $("#save").click(function () {

    });


    $(document).on("click", "input[name='chk_info1']", function () {
        $("#aaa").prop("checked", true);
    });
    */

</script>
<style>
    #selcon {
        background-color: #34495e;
        color: white;
        width: 100%;

        font-size: 20pt;
    }

    #selcon input[type='radio'], #selcon input[type='checkbox'] {
        width: 100px;
        height: 100px;
    }
</style>
<h2>설문조사 항목 만들기
</h2>
<div>
    문항제목<input type="text" id="title" name="title">
</div>
<div>
    문항설명<input type="text" id="dis" name="dis">
</div>
<div>
    필수항목 여부<input id="check" type="checkbox" name="check">
</div>
<div>
    문항종류
    <select name="sel" id="sel">
        <option value="0">=== 선택 ===</option>
        <option value="1">단일선택</option>
        <option value="2">다중선택</option>
        <option value="3">서술형</option>
        <option value="4">파일업로드</option>
    </select>
</div>
<div id="create_q">
    <h3>항목만들기</h3>
    <input type="button" id="ct_bt" value="+답변항목생성">
    <div class="cb"></div>

    <div id="question" hidden>
        <table class="simple_board">
            <tr>
                <td>타입</td>
                <td>내용</td>
                <td>삭제</td>
                <td>이미지</td>
            </tr>
        </table>
    </div>

</div>


<div id="selcon">
</div>


<div>
    <input type="button" name="save" id="save" value="저장">
    <input type="button" id="ex" value="취소">

</div>
