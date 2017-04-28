<?php
     if ($_SESSION["check_log"] != 1) {  
          $message = "กรุณา login";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=admin.php'>";

  }

?>
<script >
function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
 
</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se/menu_admin">หน้าหลัก</a></li>
        <li ><a href="/se/insert_r">เพิ่มข้อมูล</a></li>
        <li><a href="/se/search_r">หาข้อมูล</a></li> 
        <li ><a href="/se/update_r">แก้ไขข้อมูล</a></li>
        <li><a href="/se/delete_r">ลบข้อมูล</a></li>  
        <li class="active"><a href="/se/alert">แจ้งเตือน</a></li>
        <li ><a href="/se/email_r">ส่ง E-mail</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/se"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="bar" id="alert">
   แจ้งเตือน
</div>
   
<div class="container" id="alert"> 
<h2>เอกสารที่ยังไม่ตรวจสอบ</h2>
     <?php
    include("connect_db.php");
    for($i=0;$i<count($_POST["chkC"]);$i++)
    { 
        if($_POST["chkC"][$i] != "")
        {

            $strSQL = 'update request set status="ตรวจสอบแล้ว" where id like "'.$_POST["chkC"][$i].'"' ;
            $objQuery = mysql_query($strSQL);
        }
    }
        $query='SELECT id , story as "เรื่อง",name as "ชื่อ-นามสกุล" , code as "รหัสนิสิต", branch as "สาขา", tel as "เบอร์โทรศัพท์", email as "E-mail", date as "วันที่ส่ง", status as "สถานะ"  FROM request where status like "ยังไม่ได้ตรวจสอบ" ';
       

    
         
        $result = mysql_db_query($db, $query);
        if(!$result)
        {
            exit;
        }
        $check = mysql_num_rows($result);



        if (!$check) {
            echo "ไม่มีเอกสารที่ยังไม่ได้ตรวจสอบ.\n";
            
            exit;
        } 
        ?>

        <table class="table table-bordered" id="alert">
            <thead>
            <tr>
            <th ><div align="center"><INPUT type="checkbox" onchange="checkAll(this)" name="chk[]" /> </div></th>
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

        <form method="post" action="/se/alert">
            <tbody>
                <?php $count=1; ?>
                <?php $countCh=0;?> 
                <?php while ($row = mysql_fetch_array($result)): 
                    $colorCh="";
                    if($countCh%2==1)
                    {
                        $colorCh="tableC";
                    }
                    $countCh++;
                ?>
                <tr class="<?php echo $colorCh; ?>">
                <td align="center" ><input type="checkbox" name="chkC[]" id="chkC<?php echo $j;?>" value="<?php echo $row["id"];?>"></td>
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                        <?php if($i==0): 
                        ?>
                        <td align="center"><?= $count ?></td>
                       <?php 
                            $count = $count + 1;
                            continue;
                        endif; ?> 
                        <td ><?= $row[$field_name[$i]] ?></td>

                <?php endfor; ?>
                

                </tr>
            </tbody>
        <?php endwhile; ?>

        </table>
        
        <input type="hidden" name="hdnCount" value="<?php echo $j;?>">
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> ตรวจสอบแล้ว</button>
        </form>
        
</div>
