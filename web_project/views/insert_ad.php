<?php
   if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }
  $_SESSION["checkCon"]= 0;
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">ข้อมูลนิสิต l</li>
        <li ><a href="/se/menu_admin">หน้าหลัก</a></li>
        <li class="dropdown active">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">เพิ่มข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/insert">เพิ่มข้อมูลนิสิต</a></li>
            <li><a href="/se/insert_ad">เพิ่มข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/insert_branch">เพิ่มข้อมูลสาขา</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">หาข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/search">หาข้อมูลนิสิต</a></li>
            <li><a href="/se/search_ad">หาข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/search_branch">หาข้อมูลสาขา</a></li> 
          </ul>
        </li> 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">แก้ไขข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/update">แก้ไขข้อมูลนิสิต</a></li>
            <li><a href="/se/update_ad">แก้ไขข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/update_branch">แก้ไขข้อมูลสาขา</a></li> 
          </ul>
        </li> 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ลบข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/delete">ลบข้อมูลนิสิต</a></li>
            <li><a href="/se/delete_ad">ลบข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/delete_branch">ลบข้อมูลสาขา</a></li> 
          </ul>
        </li>   
        <li><a href="/se/email">ส่ง Email</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/se"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="bar">
    เพิ่มข้อมูลที่ปรึกษา
</div>

<div class="container">
    <form action="/SE/confirm_ad.php" method="POST">
        <div class="form-group">
            <div class="form-inline">
                <label class="laform">รหัสที่ปรึกษา:</label>
                <input class="form-control" name="code" placeholder=""  Required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">คุณวุติที่ปรึกษา:</label>
                <input class="form-control" name="title" placeholder=""  Required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">ชื่อที่ปรึกษา:</label>
                <input class="form-control" name="name" placeholder="" style="width: 300px;" Required>
            </div>
        </div>
        <div class="form-group">
            <div align="center" class="form-inline">
                <button  id="submit" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-folder-open"></span> เพิ่มข้อมูล</button>
                <a href="/se"><button  style="width:80px; height: 45px;" class="btn btn-default">ยกเลิก</button></a>
                <button  id="submit" type="button" class="btn btn-info" onClick="history.go(0)"><span class="glyphicon glyphicon-refresh"></span></button>
            </div>

        </div>

</div>
</form>


</div>