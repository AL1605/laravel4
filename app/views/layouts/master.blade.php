<!--การเรียกใช้ Template-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>My Template</title>
{{ HTML::style('css/style.css') }}
</head>

<!-- การใช้งาน Form -->
<body style="background: snow;">
	<header>Laravel4 Basic</header>
	<div class="container">
		<div id="content">
			@yield('content') <!--@yield = การแสดงเนื้อหาของไฟล์ที่เป็น View ไว้ ณ ตำแหน่งนั้นๆ-->
		</div>
	</div>
</body>
</html>