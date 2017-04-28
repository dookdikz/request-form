<?php
   if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }
	
	$_SESSION["day_r"] = $_POST['day_r']; 
    $_SESSION["month_r"] = $_POST['month_r']; 
    $_SESSION["year_r"] = $_POST['year_r']; 
			if($_SESSION["month_r"]=="มกราคม")
            {
              $_SESSION["monthYo_r"]="ม.ค.";
            }
            elseif ($_SESSION["month_r"]=="กุมภาพันธ์") 
            {
              $_SESSION["monthYo_r"]="ก.พ.";
            }
            elseif ($_SESSION["month_r"]=="มีนาคม") 
            {
              $_SESSION["monthYo_r"]="มี.ค.";
            }
             elseif ($_SESSION["month_r"]=="เมษายน") 
            {
              $_SESSION["monthYo_r"]="เม.ย.";
            }
            elseif ($_SESSION["month_r"]=="พฤษภาคม") 
            {
              $_SESSION["monthYo_r"]="พ.ค.";
            }
            elseif ($_SESSION["month_r"]=="มิถุนายน") 
            {
              $_SESSION["monthYo_r"]="มิ.ย.";
            }
            elseif ($_SESSION["month_r"]=="กรกฎาคม") 
            {
              $_SESSION["monthYo_r"]="ก.ค.";
            }
            elseif ($_SESSION["month_r"]=="สิงหาคม") 
            {
              $_SESSION["monthYo_r"]="ส.ค.";
            }
            elseif ($_SESSION["month_r"]=="กันยายน") 
            {
              $_SESSION["monthYo_r"]="ก.ย.";
            }
            elseif ($_SESSION["month_r"]=="ตุลาคม") 
            {
              $_SESSION["monthYo_r"]="ต.ค.";
            }
            elseif ($_SESSION["month_r"]=="พฤศจิกายน") 
            {
              $_SESSION["monthYo_r"]="พ.ย.";
            }
            elseif ($_SESSION["month_r"]=="ธันวาคม") 
            {
              $_SESSION["monthYo_r"]="ธ.ค.";
            }

	$_SESSION["tDay_r"] = $_SESSION["day_r"]."-".$_SESSION["monthYo_r"]."-".substr($_SESSION["year_r"],2);
	$_SESSION["name_r"] = $_POST['name_r']; 
	$_SESSION["code_r"] = $_POST['code_r'];
  $_SESSION["branch_r"] = $_POST['branch_r'];
	$_SESSION["tel_r"] = $_POST['tel_r'];
  $_SESSION["email_r"] = $_POST['email_r'];
	$_SESSION["story_r"] = $_POST['story_r'];
 

  if($checkIn_r == 0) 
  {
    $checkIn_r =1;
    include("connect_db.php");
    $sql = 'INSERT INTO request (story,name,code,branch,tel,email,date,status) VALUES ("'.$_SESSION["story_r"].'", "'.$_SESSION["name_r"].'", "'.$_SESSION["code_r"].'", "'.$_SESSION["branch_r"].'", "'.$_SESSION["tel_r"].'", "'.$_SESSION["email_r"].'","'.$_SESSION["tDay_r"].'","ยังไม่ได้ตรวจสอบ")';
    $result = mysql_query($sql,$conn);
  }
 	
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se/menu_admin">หน้าหลัก</a></li>
        <li class="active"><a href="/se/insert_r">เพิ่มข้อมูล</a></li>
        <li><a href="/se/search_r">หาข้อมูล</a></li> 
        <li ><a href="/se/update_r">แก้ไขข้อมูล</a></li>
        <li><a href="/se/delete_r">ลบข้อมูล</a></li>  
        <li ><a href="/se/alert">แจ้งเตือน</a></li>
        <li ><a href="/se/email_r">ส่ง E-mail</a></li>
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
บันทึกข้อมูลเรียบร้อย
</div>
