<head>
  <title>Create Item Survey</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/survey/create_item_php/create_item.css">
</head>

<body>
  <div id="main">
    <h1>설문조사 항목 만들기</h1>
    <div>
      <h2>문항 제목</h2>
      <input type="textbox" id="title">
    </div>
    <div>
      <h2>문항 설명</h2>
      <textarea id="title__desc"></textarea>
    </div>
    <div>
      <label>
        <p>필수항목 여부</p>
        <input type="checkbox" name="title__check">
      </label>
    </div>
    <div>
      <label>
        <p>문항 종류</p>
        <select name="title__selectItem" id="title__selectItem">
          <option value="null">문항선택</option>
          <option value="radio">단일선택</option>
          <option value="checkbox">다중선택</option>
          <option value="textbox">서술형</option>
          <option value="file">파일업로드</option>
        </select>
      </label>
    </div>
    <div>
      단일선택 항목 만들기
      <input type="button" value="(+) 답변항목 생성" id="createItem">
    </div>
    <div id="table">
      <div class="row">
        <div class="cell">
          <input type="radio">
        </div>
        <div class="cell">
          매우 어렵다
        </div>
        <div class="cell">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Blue_-_Squared_-_Delete_icon_%28Wikiproject_icons%29.svg/1024px-Blue_-_Squared_-_Delete_icon_%28Wikiproject_icons%29.svg.png">
        </div>
        <div class="cell">
          <img src="https://simpleicon.com/wp-content/uploads/cloud-upload-1.svg">
        </div>
      </div>
      <div class="row">
        <div class="cell">
          <input type="radio">
        </div>
        <div class="cell">
          매우 어렵다
        </div>
        <div class="cell">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Blue_-_Squared_-_Delete_icon_%28Wikiproject_icons%29.svg/1024px-Blue_-_Squared_-_Delete_icon_%28Wikiproject_icons%29.svg.png">
        </div>
        <div class="cell">
          <img src="https://simpleicon.com/wp-content/uploads/cloud-upload-1.svg">
        </div>
      </div>
    </div>
    <div class="control_box">
      <input type="submit" value="저장" class="control_btn">
      <button class="control_btn">취소</button>
    </div>
  </div>
</body>
<script src=" <?php echo base_url(); ?>assets/survey/create_item_php/create_item_ie.js"></script>