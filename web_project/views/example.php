<?php
 if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }
   $_SESSION["name"] = $_POST['name'];
   $_SESSION["code"] = $_POST['code'];
   $_SESSION["branch"] = $_POST['branch'];
   $_SESSION["tel"] = $_POST['tel'];
   $_SESSION["email"] = $_POST['email'];
   $_SESSION["status"] = $_POST['status'];
   $_SESSION["GPA"] = $_POST['GPA'];
   $_SESSION["mainAdviser"] = $_POST['mainAdviser'];
   $_SESSION["coAdviser"] = $_POST['coAdviser'];
   $_SESSION["coAdviser2"] = $_POST['coAdviser2'];
   $_SESSION["first"] = $_POST['first'];
   $_SESSION["dayFirst"] = $_POST['dayFirst'];
   $_SESSION["monthFirst"] = $_POST['monthFirst'];
   $_SESSION["yearFirst"] = $_POST['yearFirst'];
   $_SESSION["second"] = $_POST['second'];
   $_SESSION["daySecond"] = $_POST['daySecond'];
   $_SESSION["monthSecond"] = $_POST['monthSecond'];
   $_SESSION["yearSecond"] = $_POST['yearSecond'];
   $_SESSION["third"] = $_POST['third'];
   $_SESSION["dayThird"] = $_POST['dayThird'];
   $_SESSION["monthThird"] = $_POST['monthThird'];
   $_SESSION["yearThird"] = $_POST['yearThird'];
   $_SESSION["fourth"] = $_POST['fourth'];
   $_SESSION["dayFourth"] = $_POST['dayFourth'];
   $_SESSION["monthFourth"] = $_POST['monthFourth'];
   $_SESSION["yearFourth"] = $_POST['yearFourth'];
   $_SESSION["fifth"] = $_POST['fifth'];
   $_SESSION["dayFifth"] = $_POST['dayFifth'];
   $_SESSION["monthFifth"] = $_POST['monthFifth'];
   $_SESSION["yearFifth"] = $_POST['yearFifth'];
   $_SESSION["sixth"] = $_POST['sixth'];
   $_SESSION["daySixth"] = $_POST['daySixth'];
   $_SESSION["monthSixth"] = $_POST['monthSixth'];
   $_SESSION["yearSixth"] = $_POST['yearSixth'];
   $_SESSION["statusPresent"] = $_POST['statusPresent'];
   $_SESSION["namePresent"] = $_POST['namePre'];
   $_SESSION["engPresent"] = $_POST['engPre'];
   $_SESSION["placePresent"] = $_POST['placePre'];
   $_SESSION["dayPre"] = $_POST['dayPre'];
   $_SESSION["monthPre"] = $_POST['monthPre'];
   $_SESSION["yearPre"] = $_POST['yearPre'];
   $_SESSION["tDayFirst"]= "";
   $_SESSION["tDaySecond"]="";
   $_SESSION["tDayThird"]="";
   $_SESSION["tDayFourth"]="";
   $_SESSION["tDayFifth"]="";
   $_SESSION["tDaySixth"]="";
   $_SESSION["tDaySixth"]="";
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
      <div id="exam" class="bar">
       ตัวอย่าง
      </div>
        <div   id="exam" class="container">
        
          <h2>ตัวอย่าง</h2>
          <div style="overflow-x: scroll;"> 
          <form action="/SE/confirm.php" method="POST">
          <table  class="table table-bordered" >
            <thead>
              <tr>
                <th name="test">รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>สาขา</th>
                <th>เบอร์โทรศัพท์</th>
                <th>e-mail</th>
                <th>สถานภาพนิสิต</th>
                <th>GPA</th>
                <th>ที่ปรึกษาหลัก</th>
                <th>ที่ปรึกษาร่วมคนที่ 1</th>
                <th>ที่ปรึกษาร่วมคนที่ 2</th>
                <th>วันอนุมัติแต่งตั้ง</th>
                <th>แผนการเรียน</th>
                <th>เปลี่ยนสถานภาพนิสิต</th>
                <th>วันอนุมัติโครงการ</th>
                <th>สอบ/เรียนภาษา ENG</th>
                <th>วันอนุมัติสอบปากเปล่า</th>
                <th>การนำเสนอบทความ</th>
                <th>ชื่อบทความ(ภาษาไทย)</th>
                <th>ชื่อบทความ(ภาษาอังกฤษ)</th>
                <th>สถานที่นำเสนอบทความ</th>
                <th>วันส่งบทความ</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $_SESSION["code"] ?></td> 
              <td><?php echo $_SESSION["name"] ?></td>
               <td><?php echo $_SESSION["branch"] ?></td>
              <td><?php echo $_SESSION["tel"] ?></td>
              <td><?php echo $_SESSION["email"] ?></td>
              <td><?php echo $_SESSION["status"] ?></td>
              <td><?php echo $_SESSION["GPA"] ?></td>
              <td><?php echo $_SESSION["mainAdviser"] ?></td>
              <td><?php echo $_SESSION["coAdviser"] ?></td>
              <td><?php echo $_SESSION["coAdviser2"] ?></td>
              <?php 
              $numm = array("First", "Second", "Third", "Fourth", "Fifth", "Sixth");
              foreach ($numm as $value) : ?>
                <?php if($_SESSION[strtolower($value)]==1):?>
                <td><?php echo $_SESSION["day".$value]."-".$_SESSION["month".$value]."-".substr($_SESSION["year".$value],2) ?></td>
                <?php $_SESSION["tDay".$value] = $_SESSION["day".$value]."-".$_SESSION["month".$value]."-".substr($_SESSION["year".$value],2);?> 
                <?php elseif($_SESSION[strtolower($value)]==2): ?>
                <td><?php echo "ฤดูร้อน"?></td>
                <?php $_SESSION["tDay".$value] = "ฤดูร้อน";?>
                <?php else: ?>
                  <td></td>
                <?php endif; ?>
              
              <?php endforeach; ?>
              <?php if($_SESSION["statusPresent" ]=="ยังไม่ดำเนินการ")
              {
                  $_SESSION["statusPresent"]="";

                }?>
              <td><?php echo $_SESSION["statusPresent"] ?></td>
              <td><?php echo $_SESSION["namePresent"] ?></td>
              <td><?php echo $_SESSION["engPresent"] ?></td>
              <td><?php echo $_SESSION["placePresent"] ?></td>
              <?php $_SESSION["tDayPre"] = $_SESSION["dayPre"]."-".$_SESSION["monthPre"]."-".substr($_SESSION["yearPre"],2);?> 
              <td><?php echo $_SESSION["dayPre"]."-".$_SESSION["monthPre"]."-".substr($_SESSION["yearPre"],2) ?></td>
              </tbody>
            </tr>
            
          </table>
         
          </div>
            <div class="form-group">
              <div class="form-inline" >
                <button id="submit" type="submit" class="btn btn-success">ยืนยัน</button>
                
          </form>
          <a href="/SE/insert"><button id="submit" class="btn btn-default">ย้อนกลับ</button></a>
            </div>
          </div>
        </div>

        
    
    
   