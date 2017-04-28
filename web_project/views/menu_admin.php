<?php
  if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">หน้าหลัก (เจ้าหน้าที่) l</li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/se"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="bar">
	หน้าหลัก (เจ้าหน้าที่)
</div>

<div class="container">
	<a href="/se/insert_r"><div class="jumbotron">

    <h1>ใบคำร้อง</h1>      
    <p>เพิ่มข้อมูล ค้นหาข้อมูล แก้ไขข้อมูล แจ้งเตือน</p>
  </div></a>
  <a href="/se/insert"><div class="jumbotron">

    <h1>ข้อมูลนิสิต</h1>      
    <p>เพิ่มข้อมูล ค้นหาข้อมูล แก้ไขข้อมูล ส่งEmail</p>
  </div></a>
		
</div>
