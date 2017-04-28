<?php
    $mydate=getdate(date("U"));
    $_SESSION["check_cap"] ==0;
    $_SESSION["check_in"] ==0;
    include("connect_db.php");
    $query2='SELECT code from branch';
    $result2 = mysql_query($query2,$conn); 
    $branch_out = array();
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
         <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se">หน้าหลัก</a></li>
        <li class="active"><a href="/se/insert_r_user">แจ้งส่งใบคำร้อง</a></li>
        <li ><a href="/se/search_r_user">เช็คสถานะ</a></li>
        <li><a href="/se/download">ดาวน์โหลดไฟล์</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right" style="height:40px; ">
        <li><a href="/se/admin"><button class="btn btn-success " >สำหรับเจ้าหน้าที่</button>  </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="bar">
    ส่งใบคำร้อง
</div>

<div class="container">
    <form action="/SE/confirm_r_user.php" method="POST">
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">รหัสนิสิต:</label>
                <input class="form-control" name="code_r" placeholder=""  Required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-inline">
                <label class="laform">ชื่อ - นามสกุล:</label>
                <input class="form-control" name="name_r" placeholder="" style="width: 300px;" Required>
            </div>
        </div>
        
        <div class="form-group">
            <div class="form-inline">
                <label class="laform" >รหัสสาขา:</label>
                <select class="form-control" id="branch"  name="branch_r" style="width:100px;">
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
                <input class="form-control" name="tel_r" placeholder=""  Required>

            </div>
        </div>
         <div class="form-group">
            <div class="form-inline" >
                <label class="laform">Email:</label>
                <input class="form-control" name="email_r" placeholder="" style="width: 300px;" Required>

            </div>
        </div>
        <?php 
            $arrayRe = array("เรื่องทั่วไป (บว.01)","แต่งตั้ง/เปลี่ยนแปลงคณะกรรมการที่ปรึกษา (บว.02)","เสนอ/เปลี่ยนแปลงแผนการเรียน (บว.03)","รายงานผลการเรียนตามหลักสูตร (บว.03-2)","เสนอ/เปลี่ยนแปลงโครงการวิทยานิพนธ์ (บว.04, บว.05)","สอบประมวลความรู้/วัดคุณสมบัติ (บว.06)","สอบปากเปล่าขั้นสุดท้าย (บว.07)","ตรวจรูปแบบการพิมพ์วิทยานิพนธ์ (วพ.01)","ส่งต้นฉบับวิทยานิพนธ์ (วพ.02)","การขอให้บัณฑิตวิทยาลัยพิมพ์ใบรับรองวิทยานิพนธ์ (วพ.02-1)","การตีพิมพ์ผลงานวิทยานิพนธ์ (วพ.04)","ขอหนังสือรับรอง/ใบคะแนน (บว.08)","ใบขอจบการศึกษา ไทย / ENG");
        ?>
        <div class="form-group">
            <div class="form-inline" >
                <label class="laform">สถานภาพ:</label>
                <select class="form-control" name="story_r" style="width:400px;" >
                    <?php foreach($arrayRe as $value): ?>
                    <option ><?php echo $value; ?></option>
                <?php endforeach;?>
                </select>

            </div>
        </div>
        
        
        <div class="form-group">

        </div>
        <div class="form-group">    
            <div class="form-inline" >
                <label class="laform" id="day">วันที่ส่ง:</label>
                <select class="form-control" id="date_r" name="day_r" >
<?php for ($x = 1; $x <= 31; $x++): ?>
    <?php if ($x == $mydate[mday]): ?>
                            <option selected><?php echo $x ?></option>
    <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
                    <?php endfor ?>
                </select>
                <label class="laform" id="month">เดือน:</label>
                <select class="form-control" id="date_r" name="month_r">
                    <?php
                    $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                    ?>
                    <?php 
                    $count = 1;
                    foreach ($month as $value): ?>
    <?php if ($count == $mydate[mon]): ?>
                            <option selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option><?php echo $value ?></option>
                        <?php endif; 
                    $count++;?>
                    <?php endforeach; ?>
                </select>
                <label class="laform" id="year">ปี:</label>
                <select class="form-control" id="date_r" name="year_r">
                    <?php for ($x = date("Y") + 528; $x <= date("Y") + 558; $x++): ?>
                        <?php if ($x == $mydate[year]+543): ?>
                            <option selected><?php echo $x ?></option>
                        <?php else: ?>
                            <option><?php echo $x ?></option>
    <?php endif; ?>
                    <?php endfor ?>
                </select>
            </div>
        </div>
         <div class="form-group">
            <div class="form-inline" >
                <label class="laform" id="month" style="width: 100px;">Captcha: </label>
              <img src="imagebuilder.php" border="1">  
             
             <input name="userstring" type="text" value="" style="width: 150px;">

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
    $(document).ready(function(){
        $("#branch").on('change',function(){
            var id = $(this).val();
            $.get('branch.php?branch_code='+id,function(result){
                $("#name_branch").html(result);
            });          
        });
        var id3 = $("#branch").val();
        $.get('branch.php?branch_code='+id3,function(result){
        $("#name_branch").html(result);
    });

    });
</script>
<?php
$_SESSION["name_r"] = "";
$_SESSION["code_r"] = "";
$_SESSION["tel_r"] = "";
$_SESSION["day_r"] = "1";
$_SESSION["month_r"] = "มกราคม";
$_SESSION["year_r"] = date("Y");
$_SESSION["story"] = "";
?>
