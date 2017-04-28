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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
      
        <li class="mode">ข้อมูลนิสิต l</li>
        <li ><a href="/se/menu_admin">หน้าหลัก</a></li>
        <li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">เพิ่มข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/insert">เพิ่มข้อมูลนิสิต</a></li>
            <li><a href="/se/insert_ad">เพิ่มข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/insert_branch">เพิ่มข้อมูลสาขา</a></li> 
          </ul>
        </li>
        <li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">หาข้อมูล
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/se/search">หาข้อมูลนิสิต</a></li>
            <li><a href="/se/search_ad">หาข้อมูลที่ปรึกษา</a></li>
            <li><a href="/se/search_branch">หาข้อมูลสาขา</a></li> 
          </ul>
        </li> 
        <li class="dropdown active">
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
  
<div id="update_r" class="bar">
  แก้ไขข้อมูล
</div>
<div   id="update_r" class="container">
    <div>
        <form method="POST" action="/SE/update">
            <div class="form-group">
                <div class="form-inline">
                    <label class="laform">ค้นหาโดย:</label>
                    <input type="radio" name="search" value="code" checked="checked">รหัสนิสิต
                    <input type="radio" name="search" value="name">ชื่อ - นามสกุล
                    <input type="radio" name="search" value="branch">สาขา
                    <input class="form-control" name="keyword"  placeholder="" >
                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>

                </div>
            </div>
        </form>

    </div>
    <div style="overflow-x: scroll; overflow-y: scroll;"> 
        <?php
        include("connect_db.php");

        $tb = $_POST['search'];
        $kw = $_POST['keyword'];
        $edit = $_POST['edit'];
        $codeEdit = $_POST['1'];
        $nameEdit = $_POST['2'];
        $branchEdit = $_POST['3'];
        $telEdit = $_POST['4'];
        $emailEdit = $_POST['5'];
        $statusEdit = $_POST['6'];
        $GPAEdit = $_POST['7'];
        $main_adEdit = $_POST['8'];
        $co_adEdit = $_POST['9'];
        $co_ad2Edit = $_POST['10'];
        $day_firstEdit = $_POST['11'];
        $day_secEdit = $_POST['12'];
        $day_thirdEdit = $_POST['13'];
        $day_fourEdit = $_POST['14'];
        $day_fifEdit = $_POST['15'];
        $day_sixEdit = $_POST['16'];
        $status_preEdit = $_POST['17'];
        $name_preEdit = $_POST['18'];
        $eng_preEdit = $_POST['19'];
        $place_preEdit = $_POST['20'];
        $day_preEdit = $_POST['21'];
        ?>
        
        <?php if($edit != ""):?>
        <h2>แก้ไขข้อมูลเรียบร้อย</h2>
        <?php endif;?>

        <?php

        if($tb=="")
        {
          $tb = "code";
        }
       $query2= 'UPDATE data set  code="'.$codeEdit.'", name="'.$nameEdit.'", branch="'.$branchEdit.'", tel="'.$telEdit.'", email="'.$emailEdit.'", status="'.$statusEdit.'", GPA="'.$GPAEdit.'", main_ad="'.$main_adEdit.'", co_ad="'.$co_adEdit.'", co_ad2="'.$co_ad2Edit.'", day_first="'.$day_firstEdit.'", day_sec="'.$day_secEdit.'", day_third="'.$day_thirdEdit.'", day_four="'.$day_fourEdit.'", day_fif="'.$day_fifEdit.'", day_six="'.$day_sixEdit.'", status_pre="'.$status_preEdit.'", name_pre="'.$name_preEdit.'", eng_pre="'.$eng_preEdit.'", place_pre="'.$place_preEdit.'", day_pre="'.$day_preEdit.'" where id like "'.$edit.'"'  ;
        
        $result2 = mysql_db_query($db, $query2);
        $query='SELECT id,code as "รหัสนิสิต",name as "ชื่อ-นามสกุล",branch as "สาขา",tel as "เบอร์โทรศัพท์",email as "E-mail",status as "สถานะนิสิต",GPA ,main_ad as "ที่ปรึกษาหลัก",co_ad as "ที่ปรึกษาร่วมคนที่ 1",co_ad2 as "ที่ปรึกษาร่วมคนที่ 2",day_first as "วันอนุมัติแต่งตั้ง", day_sec as "แผนการเรียน", day_third as "เปลี่ยนสถานภาพนิสิต", day_four as "วันอนุมัติโครงการ", day_fif as "สอบ/เรียนภาษา ENG" ,day_six as "วันอนุมัติสอบปากเปล่า", status_pre as "การนำเสนอบทความ", name_pre as "ชื่อบทความ(ภาษาไทย)", eng_pre as "ชื่อบทความ(ภาษาอังกฤษ)", place_pre as "สถานที่นำเสนอบทความ", day_pre as "วันส่งบทความ" FROM data where '.$tb.' like "%'.$kw.'%" ';
       
    
         
        $result = mysql_db_query($db, $query);
        if(!$result)
        {
            exit;
        }
        $check = mysql_num_rows($result);



        if (!$check) {
            echo "DON'T FIND.\n";
            echo "PLEASE TRY AGAIN.";
            exit;
        } 
        ?>

        <table class="table table-bordered" >
            <thead>
            <tr>

                <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>

                    <?php $field_name[$i] = mysql_field_name($result, $i); ?>
                    <?php if($i==0): ?>
                        <th><?= "ลำดับ" ?></th>
                       <?php continue;
                     endif; ?> 

                    <th><?= $field_name[$i] ?></th>
            <?php endfor; ?> 
            </tr>
            </thead>
            <?php $count=1 ?>
            <?php 
                $arrayData = array("a","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21");
            ?>
            <tbody>
             <?php $countCh = 0; ?>
             <?php $count = 1; ?>
                <?php while ($row = mysql_fetch_array($result)): 
                    $colorCh="";
                    if($countCh%2==1)
                    {
                        $colorCh="tableC";
                    }
                    $countCh++;
                    ?>
                   
                <tr class="<?php echo $colorCh; ?>">
                <form method="post" action="/se/update">
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                       
                       <?php if($i==0):
                        ?>
                        <td align="center" ><?= $count ?></td>
                       <?php   
                            $count = $count + 1;
                            continue;
                        endif; ?> 
                        
                        <td class="<?php echo $color; ?>">
                        <?php if($arrayData[$i]==3):?>
                          <select class="form-control" id="branch"  name= "3" style="width:200px;">
                            <?php foreach($branch_out as $item): ?>
                              <?php if($row[$field_name[$i]]== $item):?>
                                <option selected value="<?= $item ?>"><?= $item; ?></option>
                              <? else: ?>
                                <option  value="<?= $item ?>"><?= $item; ?></option>
                              <?php endif;?>
                             <?php endforeach; ?>
                          </select>
                        <?php elseif($arrayData[$i]==6):?>
                          <select class="form-control" id="branch"  name= "6" style="width:200px;">
                            <?php $statusArray = array("นิสิตปัจจุบัน","สำเร็จการศึกษา","พ้นสภาพ","ขอลาพักการศึกษา","ลาออก")?>
                            <?php foreach($statusArray as $item): ?>
                              <?php if($row[$field_name[$i]]== $item):?>
                                <option selected value="<?= $item ?>"><?= $item; ?></option>
                              <? else: ?>
                                <option  value="<?= $item ?>"><?= $item; ?></option>
                              <?php endif;?>
                             <?php endforeach; ?>
                          </select>
                        <?php elseif($arrayData[$i]==8):?>
                          <select class="form-control" id="branch"  name= "8" style="width:200px;">
                            
                            <?php foreach($ad_out as $item): ?>
                              <?php if($row[$field_name[$i]]== $item):?>
                                <option selected value="<?= $item ?>"><?= $item; ?></option>
                              <? else: ?>
                                <option  value="<?= $item ?>"><?= $item; ?></option>
                              <?php endif;?>
                             <?php endforeach; ?>
                          </select>
                        <?php elseif($arrayData[$i]==9):?>
                          <select class="form-control" id="branch"  name= "9" style="width:200px;">
                            <option selected value="">ไม่มี</option>
                            <?php foreach($ad_out as $item): ?>
                              <?php if($row[$field_name[$i]]== $item):?>
                                <option selected value="<?= $item ?>"><?= $item; ?></option>
                              <? else: ?>
                                <option  value="<?= $item ?>"><?= $item; ?></option>
                              <?php endif;?>
                             <?php endforeach; ?>
                          </select>
                        <?php elseif($arrayData[$i]==10):?>
                          <select class="form-control" id="branch"  name= "10" style="width:200px;">
                            <option selected value="">ไม่มี</option>
                            <?php foreach($ad_out as $item): ?>
                              <?php if($row[$field_name[$i]]== $item):?>
                                <option selected value="<?= $item ?>"><?= $item; ?></option>
                              <? else: ?>
                                <option  value="<?= $item ?>"><?= $item; ?></option>
                              <?php endif;?>
                             <?php endforeach; ?>
                          </select>


  
              <?php else: ?>
                        <input  name= "<?= $arrayData[$i] ?>" class="form-control" value="<?= $row[$field_name[$i]]?>" style="width: 200px; "></td>
                         <input type="hidden" name = "edit" value="<?php echo $row[$field_name[0]] ;?>">
                         <?php $a= $row[$field_name[0]];  ?> 
              <? endif; ?>
                      
                <?php endfor; ?> 
                <td ><button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-pencil"></span> แก้ไข</button></td>
               
                </form>
                </tr>

            </tbody>
        <?php endwhile; ?>

        </table>
    </div>
</div>
