<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Survey</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/survey/main_php/main.css">
</head>
<body>
    <div id="survey_info">
        <form action="" method="get">
            <div class="search_list">
                <div class="dept_search">
                    <label><span>설문 조사 부서</span> <input type="text" name="survey_dept" size="35"></label>
                </div>
                <div class="sname_search">
                    <label><span>설문 명 </span><input type="text" name="survey_name" size="40"></label>
                </div>
                <div class="edate_search">
                    <label><span>설문 마감일</span> <input type="text" class="datepicker" size="20"></label>
                </div>
                <div class="search_btn">
                    <input type="submit" value="조회" class="sbtn">
                </div>
            </div>
        </form>
    </div>
    <hr>
    
    <div id="survey_add">
        <input type="button" value="새 설문 추가 (+)" id="new_survey">
    </div>
    <form class="survey_form" method="post" action="<?php echo site_url('survey/btn_verify')?>">
        <div class="survey_table">
            <div class="survey_table_row row_first">
                <div class="table_title">
                    <p>설문 명</p>
                </div>
                <div class="table_title">
                    <p>설문 조사부서</p>
                </div>
                <div class="table_title">
                    <p>참여 인원</p>
                </div>
                <div class="table_title">
                    <p>마감일</p>
                </div>
                <div class="table_title">
                    <p>설문 조사자</p>
                </div>
                <div class="table_title">
                    <p>설문 상태</p>
                </div>
                <div class="table_title">
                    <p>관리기능</p>
                </div>
            </div>
            <?php
                foreach($surveys as $entry) {
            ?> 
            <div class="survey_table_row">
                
                <div class="survey_table_cell">
                    <p><?=$entry->DOC_TITLE?></p>
                </div>
                <div class="survey_table_cell">
                    <p><?=$entry->DOC_SURVEYDEPT?></p>
                </div>
                <div class="survey_table_cell">
                    <p><?=$entry->DOC_PEOPLENUM?></p>
                </div>
                <div class="survey_table_cell">
                    <p><?=$entry->DOC_ENDDATE?></p>
                </div>
                <div class="survey_table_cell">
                    <p><?=$entry->DOC_EMPNO?></p>
                </div>
                <?php
                    if($entry->DOC_ENDYN == "Y")
                    {
                ?>
                    <div class="survey_table_cell">
                        <p class="end"><b>마감</b></p>
                    </div>
                <?php
                    }
                    else
                    {
                ?>
                    <div class="survey_table_cell">
                        <p class="ing"><b>응시 중</b></p>
                    </div>
                <?php
                    }
                ?>
                <div class="survey_table_cell control">
                    <input type="submit"  name="end" values="<?= htmlspecialchars($entry->DOC_TITLE)?>" class="control_btn end_btn">
                    <input type="submit"  name="update" values="<?= htmlspecialchars($entry->DOC_TITLE) ?>" class="control_btn update_btn">
                    <input type="submit"  name="delete" values="<?= htmlspecialchars($entry->DOC_TITLE) ?>"class="control_btn delete_btn">
                </div>
            </div>
            <?php    
                }
            ?>

        </div>
    </form>
    <div class="shift_table_btn">
        <a href="#" class="previous_btn">◀</a>
        <a href="#" class="next_btn">▶</a>
    </div>
    <script src="<?php echo base_url(); ?>assets/survey/main_php/main.js"></script>
</body>
</html>
