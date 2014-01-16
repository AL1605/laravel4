<!--การเรียกใช้ Template-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>My Template</title>
</head>

<body>
	<h1>My Template</h1>
	<div>
		@yield('content') <!--@yield = การแสดงเนื้อหาของไฟล์ที่เป็น View ไว้ ณ ตำแหน่งนั้นๆ-->
	</div>
</body>
</html>