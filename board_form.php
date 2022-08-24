<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script><!-- 햄버거메뉴 -->
<script src="./js/header.js"></script>
<script>
//사용자가 입력창에 내용을 입력했는지 검사하는 페이지


  function check_input() {
      if (!document.board_form.subject.value.trim())
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value.trim())
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }

</script>
</head>
<body> 
<header>
	<?php include "header.php";?>
</header>  
<section>
	<div id="main_img_bar">
		
	</div>
	<div id="board_box">
		<h3 id="board_title">
			게시판 > 글 쓰기
		</h3>

		<form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data"> <!-- "board_insert.php로 이동 -->


			<ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
				<li>

					<span class="col1">제목 : </span>
					<span class="col2"><input name="subject" type="text"></span>

				</li>	    	
				<li id="text_area">	
					<span class="col1">내용 : </span>
					<span class="col2">


					<textarea name="content"></textarea>
					</span>
				</li>
				<li>


					<span class="col1"> 첨부 파일</span>
					<span class="col2"><input type="file" name="upfile"></span>
				</li>
			</ul>
			<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li> <!-- 완료 버튼을 클릭했을 때 function check_input() 스타트 -->
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
		</form>
	</div> 
</section> 
<footer>
	<?php include "footer.php";?>
</footer>
</body>
</html>