<?php
     if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }
  include("connect_db.php");
  
  $query='SELECT name from adviser';
  $query2='SELECT code from branch';
  $result = mysql_query($query,$conn);
  $result2 = mysql_query($query2,$conn);
  $ad_out = array(); 
  $branch_out = array();  
  for($i=0;$i< mysql_num_fields($result);$i++)
  { 
    $field_name[$i] = mysql_field_name($result,$i) ; 
  } 

  while ($row = mysql_fetch_array($result)) 
  { 
    for($i=0;$i< mysql_num_fields($result);$i++)
    { 
      $ad_out[] = $row[$field_name[$i]];
    } 
  } 
  for($i=0;$i< mysql_num_fields($result2);$i++)
  { 
    $field_name[$i] = mysql_field_name($result2,$i) ; 
  } 

  while ($row = mysql_fetch_array($result2)) 
  { 
    for($i=0;$i< mysql_num_fields($result2);$i++)
    { 
      $branch_out[] = $row[$field_name[$i]];
    } 
  } 

?>
<script >
    $(document).ready(function () {
        $(".first").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateFirst").attr('disabled', true);
                document.getElementById('dateFirst').value = "";
                $("#dateFirst1").attr('disabled', true);
                document.getElementById('dateFirst1').value = "";
                $("#dateFirst2").attr('disabled', true);
                document.getElementById('dateFirst2').value = "";

            }
            else
            {
                $("#dateFirst").attr('disabled', false);
                document.getElementById('dateFirst').value = 1;
                $("#dateFirst1").attr('disabled', false);
                document.getElementById('dateFirst1').value = "มกราคม";
                $("#dateFirst2").attr('disabled', false);
                document.getElementById('dateFirst2').value = '<?php echo date("Y") + 543 ?>';

            }
        });
        $(".second").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateSecond").attr('disabled', true);
                document.getElementById('dateSecond').value = "";
                $("#dateSecond1").attr('disabled', true);
                document.getElementById('dateSecond1').value = "";
                $("#dateSecond2").attr('disabled', true);
                document.getElementById('dateSecond2').value = "";

            }
            else
            {
                $("#dateSecond").attr('disabled', false);
                document.getElementById('dateSecond').value = 1;
                $("#dateSecond1").attr('disabled', false);
                document.getElementById('dateSecond1').value = "มกราคม";
                $("#dateSecond2").attr('disabled', false);
                document.getElementById('dateSecond2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        $(".third").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateThird").attr('disabled', true);
                document.getElementById('dateThird').value = "";
                $("#dateThird1").attr('disabled', true);
                document.getElementById('dateThird1').value = "";
                $("#dateThird2").attr('disabled', true);
                document.getElementById('dateThird2').value = "";

            }
            else
            {
                $("#dateThird").attr('disabled', false);
                document.getElementById('dateThird').value = 1;
                $("#dateThird1").attr('disabled', false);
                document.getElementById('dateThird1').value = "มกราคม";
                $("#dateThird2").attr('disabled', false);
                document.getElementById('dateThird2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        $(".fourth").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateFourth").attr('disabled', true);
                document.getElementById('dateFourth').value = "";
                $("#dateFourth1").attr('disabled', true);
                document.getElementById('dateFourth1').value = "";
                $("#dateFourth2").attr('disabled', true);
                document.getElementById('dateFourth2').value = "";

            }
            else
            {
                $("#dateFourth").attr('disabled', false);
                document.getElementById('dateFourth').value = 1;
                $("#dateFourth1").attr('disabled', false);
                document.getElementById('dateFourth1').value = "มกราคม";
                $("#dateFourth2").attr('disabled', false);
                document.getElementById('dateFourth2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        $(".fourth").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateFourth").attr('disabled', true);
                document.getElementById('dateFourth').value = "";
                $("#dateFourth1").attr('disabled', true);
                document.getElementById('dateFourth1').value = "";
                $("#dateFourth2").attr('disabled', true);
                document.getElementById('dateFourth2').value = "";

            }
            else
            {
                $("#dateFourth").attr('disabled', false);
                document.getElementById('dateFourth').value = 1;
                $("#dateFourth1").attr('disabled', false);
                document.getElementById('dateFourth1').value = "มกราคม";
                $("#dateFourth2").attr('disabled', false);
                document.getElementById('dateFourth2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        $(".fifth").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateFifth").attr('disabled', true);
                document.getElementById('dateFifth').value = "";
                $("#dateFifth1").attr('disabled', true);
                document.getElementById('dateFifth1').value = "";
                $("#dateFifth2").attr('disabled', true);
                document.getElementById('dateFifth2').value = "";

            }
            else
            {
                $("#dateFifth").attr('disabled', false);
                document.getElementById('dateFifth').value = 1;
                $("#dateFifth1").attr('disabled', false);
                document.getElementById('dateFifth1').value = "มกราคม";
                $("#dateFifth2").attr('disabled', false);
                document.getElementById('dateFifth2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        $(".sixth").on('change', function () {
            if ($(this).val() != 1)
            {
                $("#dateSixth").attr('disabled', true);
                document.getElementById('dateSixth').value = "";
                $("#dateSixth1").attr('disabled', true);
                document.getElementById('dateSixth1').value = "";
                $("#dateSixth2").attr('disabled', true);
                document.getElementById('dateSixth2').value = "";

            }
            else
            {
                $("#dateSixth").attr('disabled', false);
                document.getElementById('dateSixth').value = 1;
                $("#dateSixth1").attr('disabled', false);
                document.getElementById('dateSixth1').value = "มกราคม";
                $("#dateSixth2").attr('disabled', false);
                document.getElementById('dateSixth2').value = '<?php echo date("Y") + 543; ?>';

            }
        });
        
    });
</script>
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
    เพิ่มข้อมูลนิสิต
</div>

<div class="container">
    <form action="/SE/example.php" method="POST">
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">รหัสนิสิต:</label>
                <input class="form-control" name="code" placeholder=""  Required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform">ชื่อ - นามสกุล:</label>
                <input class="form-control" name="name" placeholder="" style="width: 300px;" Required >
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" >รหัสสาขา:</label>
                <select class="form-control" id="branch"  name="branch" style="width:100px;">
                    <?php foreach($branch_out as $item): ?>
                      <option value="<?= $item ?>"><?= $item; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="laform" style="width:100px;">สาขา:</label>
                <label id="name_branch" class="laform" style="width:300px;"></label>
                
                </select>
                
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">เบอร์โทรศัพท์:</label>
                <input class="form-control" name="tel" placeholder=""  Required>

            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">E-mail:</label>
                <input class="form-control" name="email" placeholder="" style="width: 300px;" Required>

            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" > 
                <?php
                if ($_SESSION["status"] == "นิสิตปัจจุบัน") {
                    $s1 = "selected";
                    $s2 = "";
                    $s3 = "";
                    $s4 = "";
                    $s5 = "";
                } elseif ($_SESSION["status"] == "สำเร็จการศึกษา") {
                    $s1 = "";
                    $s2 = "selected";
                    $s3 = "";
                    $s4 = "";
                    $s5 = "";
                } elseif ($_SESSION["status"] == "พ้นสภาพ") {
                    $s1 = "";
                    $s2 = "";
                    $s3 = "selected";
                    $s4 = "";
                    $s5 = "";
                } elseif ($_SESSION["status"] == "ขอลาพักการศึกษา") {
                    $s1 = "";
                    $s2 = "";
                    $s3 = "";
                    $s4 = "selected";
                    $s5 = "";
                } else {
                    $s1 = "";
                    $s2 = "";
                    $s3 = "";
                    $s4 = "";
                    $s5 = "selected";
                }
                ?>
                <label class="laform">สถานภาพ:</label>
                <select class="form-control" name="status" style="width:200px;" >
                    <option <?php echo $s1 ?>>นิสิตปัจจุบัน</option>
                    <option <?php echo $s2 ?>>สำเร็จการศึกษา</option>
                    <option <?php echo $s3 ?>>พ้นสภาพ</option>
                    <option <?php echo $s4 ?>>ขอลาพักการศึกษา</option>
                    <option <?php echo $s5 ?>>ลาออก</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">GPA:</label>
                <input class="form-control" name="GPA"  placeholder=""  Required>

            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" >ที่ปรึกษาหลัก:</label>
                <select class="form-control" id="m_ad"  name="mainAdviser" style="width:200px;">
                    <?php foreach($ad_out as $item): ?>
                      <option value="<?= $item ?>"><?= $item; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="laform" style="width:100px;">รหัสอาจารย์:</label>
                <label id="code_ad" class="laform" style="width:100px;"></label>
                <label class="laform" style="width:100px;">คุณวุฒิ:</label>
                <label id="title_ad" class="laform" style="width:100px;" ></label>
                </select>
                
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" >ที่ปรึกษาร่วมคนที่ 1:</label>
                <select class="form-control" id="co_ad"  name="coAdviser" style="width:200px;" >
                    <option value="">ไม่มี</option>
                    <?php foreach($ad_out as $item): ?>
                      <option value="<?= $item ?>"><?= $item; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="laform" style="width:100px;">รหัสอาจารย์:</label>
                <label id="code_ad2" class="laform" style="width:100px;"></label>
                <label class="laform" style="width:100px;">คุณวุฒิ:</label>
                <label id="title_ad2" class="laform" style="width:100px;" ></label>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" >ที่ปรึกษาร่วมคนที่ 2:</label>
                <select class="form-control" id="co_ad2"  name="coAdviser2" style="width:200px;" >
                    <option value="">ไม่มี</option>
                    <?php foreach($ad_out as $item): ?>
                      <option value="<?= $item ?>"><?= $item; ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="laform" style="width:100px;">รหัสอาจารย์:</label>
                <label id="code_ad3" class="laform" style="width:100px;"></label>
                <label class="laform" style="width:100px;">คุณวุฒิ:</label>
                <label id="title_ad3" class="laform" style="width:100px;" ></label>
                </select>
            </div>
        </div>
        <div class="form-group">

        </div>
        <div class="form-group">    
            <label class="laform" id="head">วันอนุมัติแต่งตั้งที่(บว.02):</label>

            <input type="radio" name="first" class="first" value="1" checked="checked">
            <span class="wrap">ปกติ</span>
            <input type="radio" name="first" class="first" value="2">
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="first" class="first" value="3">
            <span class="wrap">ยังไม่ส่ง</span>
            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateFirst" name="dayFirst" >
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["dayFirst"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
                    <?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateFirst1" name="monthFirst">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
    <?php if ($value == $_SESSION["monthFirst"]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateFirst2" name="yearFirst">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearFirst"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
                    <?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">    
            <label class="laform" id="head">แผนการเรียน(บว.03-2):</label>
            <input type="radio" name="second" class="second" value="1" checked="checked">
            <span class="wrap">ปกติ</span>
            <input type="radio" name="second" class="second" value="2">
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="second" class="second" value="3">
            <span class="wrap">ยังไม่ส่ง</span>
            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateSecond" name="daySecond">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["daySecond"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateSecond1" name="monthSecond">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthSecond"]): ?>
                            <option selected><?php echo $value ?></option>
    <?php else: ?>
                            <option><?php echo $value ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateSecond2" name="yearSecond">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearSecond"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">    
            <label class="laform" id="head">เปลี่ยนสภาพนิสิต :</label>
            <input type="radio" name="third" class="third" value="1" checked="checked">
            <span class="wrap">ปกติ</span>
            <input type="radio" name="third" class="third" value="2">
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="third" class="third" value="3">
            <span class="wrap">ยังไม่ส่ง</span>


            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateThird" name="dayThird">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["dayThird"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateThird1" name="monthThird">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthThird"]): ?>
                            <option selected><?php echo $value ?></option>
    <?php else: ?>
                            <option><?php echo $value ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateThird2" name="yearThird">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearThird"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
                        <?php endif; ?>
<?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">    
            <label class="laform" id="head">วันอนุมัติโครงการ(บว.04) :</label>
            <input type="radio" name="fourth" class="fourth" value="1" checked="checked">
            <span class="wrap">ปกติ</span>
            <input type="radio" name="fourth" class="fourth" value="2">
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="fourth" class="fourth" value="3">
            <span class="wrap">ยังไม่ส่ง</span>

            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateFourth" name="dayFourth">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["dayFourth"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateFourth1" name="monthFourth">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthFourth"]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
    <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateFourth2" name="yearFourth">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearFourth"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
                        <?php endif; ?>
                    <?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">    
            <label class="laform" id="head">สอบ/เรียนภาษา ENG :</label>
            <input type="radio" name="fifth" class="fifth" value="1" checked="checked">
            <span class="wrap">ปกติ</span>
            <input type="radio" name="fifth" class="fifth" value="2">
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="fifth" class="fifth" value="3">
            <span class="wrap">ยังไม่ส่ง</span>

            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateFifth" name="dayFifth">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["dayFifth"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateFifth1" name="monthFifth">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthFifth"]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
    <?php endif; ?>
<?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateFifth2" name="yearFifth">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearFifth"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
                        <?php endif; ?>
                    <?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">    
            <label class="laform" id="head">วันอนุมัติสอบปากเปล่า(บว.07):</label>
            <input type="radio" name="sixth" class="sixth" value="1" checked="checked" >
            <span class="wrap">ปกติ</span>
            <input type="radio" name="sixth" class="sixth" value="2" >
            <span class="wrap">ฤดูร้อน</span>
            <input type="radio" name="sixth" class="sixth" value="3" >
            <span class="wrap">ยังไม่ส่ง</span>
            <div class="form-inline" >
                <label class="laform" id="day">วัน:</label>
                <select class="form-control" id="dateSixth" name="daySixth">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["daySixth"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="dateSixth1" name="monthSixth">
<?php
$month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthSixth"]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
                        <?php endif; ?>
<?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="dateSixth2" name="yearSixth">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearSixth"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
                        <?php endif; ?>
                    <?php endfor ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" style="width: 230px;">การนำเสนอบทความ:</label>
                <select class="form-control" id="statusPre" name="statusPresent" style="width:200px;">
                   
                    <option>ดำเนินการแล้ว</option>
                    <option>ยังไม่ดำเนินการ</option>
                </select>
                
            </div>
        </div>
        <div class="form-group" id="namePre">
            <div class="form-inline">
                <label class="laform" style="width: 230px;">ชื่อบทความ(ภาษาไทย):</label>
                <input class="form-control" id="name_p"name="namePre" placeholder="" style="width: 300px;" >
            </div>
        </div>
         <div class="form-group" id="engPre">
            <div class="form-inline">
                <label class="laform" style="width: 230px;">ชื่อบทความ(ภาษาอังกฤษ):</label>
                <input class="form-control" id="eng_p"name="engPre" placeholder="" style="width: 300px;"  >
            </div>
        </div>
        <div class="form-group" id="placePre">
            <div class="form-inline">
                <label class="laform" style="width: 230px;">สถานที่นำเสนอบทความ:</label>
                <input class="form-control" id="place_p"name="placePre" placeholder="" style="width: 500px;"  >
            </div>
        </div>
        <div class="form-group">    
           
            

            <div class="form-inline" id="dayPre" >
                <label class="laform" id="day" style="width: 130px">วันเสนอบทความ:</label>
                <select class="form-control" id="datePre" name="dayPre">
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $_SESSION["dayFourth"]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
<?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="datePre1" name="monthPre">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php foreach ($month as $value): ?>
                        <?php if ($value == $_SESSION["monthFourth"]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
    <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="datePre2" name="yearPre">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $_SESSION["yearFourth"]): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
                        <?php endif; ?>
                    <?php endfor ?>
                </select>
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
<script>
function checkTextField(field) {
    if (field.value == '') {
        alert("Field is empty");
    }
}
  $(document).ready(function(){
    $("#m_ad").on('change',function(){
      var id = $(this).val();
      $.get('title.php?name_ad='+id,function(result){
        $("#title_ad").html(result);
      });
      $.get('code.php?name_ad='+id,function(result){
        $("#code_ad").html(result);
      });
      
      
    });
    $("#co_ad").on('change',function(){
      var id = $(this).val();
      $.get('title.php?name_ad='+id,function(result){
        $("#title_ad2").html(result);
      });
      $.get('code.php?name_ad='+id,function(result){
        $("#code_ad2").html(result);
      });
      
      
    });
    $("#co_ad2").on('change',function(){
      var id = $(this).val();
      $.get('title.php?name_ad='+id,function(result){
        $("#title_ad3").html(result);
      });
      $.get('code.php?name_ad='+id,function(result){
        $("#code_ad3").html(result);
      });
      
      
    });
    $("#branch").on('change',function(){
      var id = $(this).val();
      $.get('branch.php?branch_code='+id,function(result){
        $("#name_branch").html(result);
      });          
    });
    $("#statusPre").on('change',function(){
        var status =$(this).val();
        if(status=="ดำเนินการแล้ว")
        {
            $("#namePre").show();
            $("#engPre").show();
            $("#placePre").show();
            $("#dayPre").show();
            $("#datePre").val(1);
            $("#datePre1").val("มกราคม");
            $("#datePre2").val(2558);

        }
        else
        {
            $("#namePre").hide();
            $("#engPre").hide();
            $("#placePre").hide();
            $("#dayPre").hide();
            $("#name_p").val("");
            $("#eng_p").val("");
            $("#place_p").val("");
            $("#datePre").val("");
            $("#datePre1").val("");
            $("#datePre2").val("");

        }
      
    });    
    var id = $("#m_ad").val();
    var id2 = $("#co_ad").val();
    var id4 = $("#co_ad2").val();
    var id3 = $("#branch").val();
    $.get('title.php?name_ad='+id,function(result){
        $("#title_ad").html(result);
    });
    $.get('code.php?name_ad='+id,function(result){
        $("#code_ad").html(result);
    });
    $.get('title.php?name_ad='+id2,function(result){
        $("#title_ad2").html(result);
    });
    $.get('code.php?name_ad='+id2,function(result){
        $("#code_ad2").html(result);
    });
    $.get('title.php?name_ad='+id4,function(result){
        $("#title_ad3").html(result);
    });
    $.get('code.php?name_ad='+id4,function(result){
        $("#code_ad3").html(result);
    });
    $.get('branch.php?branch_code='+id3,function(result){
        $("#name_branch").html(result);
    }); 
    
  });

</script>
<?php
$_SESSION["name"] = "";
$_SESSION["code"] = "";
$_SESSION["tel"] = "";
$_SESSION["email"] = "";
$_SESSION["status"] = "นิสิตปัจจุบัน";
$_SESSION["GPA"] = "";
$_SESSION["mainAdviser"] = "";
$_SESSION["coAdviser"] = "";
$_SESSION["dayFirst"] = "1";
$_SESSION["monthFirst"] = "มกราคม";
$_SESSION["yearFirst"] = date("Y");
$_SESSION["daySecond"] = "1";
$_SESSION["monthSecond"] = "มกราคม";
$_SESSION["yearSecond"] = date("Y");
$_SESSION["dayThird"] = "1";
$_SESSION["monthThird"] = "มกราคม";
$_SESSION["yearThird"] = date("Y");
$_SESSION["dayFourth"] = "1";
$_SESSION["monthFourth"] = "มกราคม";
$_SESSION["yearFourth"] = date("Y");
$_SESSION["dayFifth"] = "1";
$_SESSION["monthFifth"] = "มกราคม";
$_SESSION["yearFifth"] = date("Y");
$_SESSION["daySixth"] = "1";
$_SESSION["monthSixth"] = "มกราคม";
$_SESSION["yearSixth"] = date("Y");
$_SESSION["statusPresent"] = "ดำเนินการแล้ว";
?>
