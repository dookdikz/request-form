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
	ยืนยัน
</div>
<div class="container">
  <?php 
       if($_SESSION["checkCon"] ==0)
    { 
      $_SESSION["checkCon"] = 1;
      include("connect_db.php");
      $sql = 'INSERT INTO data (code,name,branch,tel,email,status,GPA,main_ad,co_ad,co_ad2,day_first,day_sec,day_third,day_four,day_fif,day_six,status_pre,name_pre,eng_pre,place_pre,day_pre) VALUES ("'.$_SESSION["code"].'", "'.$_SESSION["name"].'", "'.$_SESSION["branch"].'", "'.$_SESSION["tel"].'", "'.$_SESSION["email"].'", "'.$_SESSION["status"].'", "'.$_SESSION["GPA"].'", "'.$_SESSION["mainAdviser"].'", "'.$_SESSION["coAdviser"].'", "'.$_SESSION["coAdviser2"].'", "'.$_SESSION["tDayFirst"].'", "'.$_SESSION["tDaySecond"].'", "'.$_SESSION["tDayThird"].'", "'.$_SESSION["tDayFourth"].'", "'.$_SESSION["tDayFifth"].'", "'.$_SESSION["tDaySixth"].'", "'.$_SESSION["statusPresent"].'", "'.$_SESSION["namePresent"].'", "'.$_SESSION["engPresent"].'", "'.$_SESSION["placePresent"].'", "'.$_SESSION["tDayPre"].'")';
      if(!mysql_query($sql,$conn)):
        ?>
        <h2>บันทึกข้อมูลไม่สำเร็จ</h2>

      <?php 
      else:?>
      <h2>บันทึกข้อมูลสำเร็จ</h2>
     <?php endif; 

    }
  ?>
</div>

