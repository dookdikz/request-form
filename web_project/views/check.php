<?php
   if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }
	include("connect_db.php");
	$sql = 'update request set status = "ตรวจสอบแล้ว" where status like "ยังไม่ได้ตรวจสอบ"';
	$result = mysql_query($sql,$conn);
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se">หน้าหลัก</a></li>
        <li ><a href="/se/insert_r">เพิ่มข้อมูล</a></li>
        <li><a href="/se/search_r">หาข้อมูล</a></li> 
        <li><a href="/se/update">แก้ไขข้อมูล</a></li> 
        <li class="active"><a href="/se/alert">แจ้งเตือน</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>