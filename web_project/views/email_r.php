<?
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
        <li ><a href="/se/alert">แจ้งเตือน</a></li>
        <li class="active"><a href="/se/email_r">ส่ง E-mail</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/se"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div id="delete_r" class="bar">
	ส่ง Email
</div>
<div   id="delete_r" class="container">
    <div>
        <form method="POST" action="/SE/email_r">
            <div class="form-group">
                <div class="form-inline">
                    <label class="laform">ค้นหาโดย:</label>
                    <input type="radio" name="search" value="code" checked="cheaked">รหัสนิสิต
                    <input type="radio" name="search" value="name">ชื่อ - นามสกุล
                    <input type="radio" name="search" value="branch">สาขา
                    <input class="form-control" name="keyword"  placeholder="" >
                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>

                </div>
            </div>
        </form>

    </div>
    <div  > 
        <?php
        include("connect_db.php");

        $tb = $_POST['search'];
        $kw = $_POST['keyword'];
         if($_POST["sendMail"][0] != ""):?>
        <h2>ลบข้อมูลเรียบร้อบแล้ว</h2> 
    <?php endif; ?>   
    <?php for($i=0;$i<count($_POST["sendMail"]);$i++)
    { 
        if($_POST["sendMail"][$i] != "")
        { 
            $strTo = $_POST["sendMail"][$i];
            $strSubject = "แจ้งเรื่องเอกสาร";
            $strHeader = "From: KUSRC";
            $strMessage = "ให้ติดต่อที่ห้อง ตึก2";
            $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);
        }
    }
    ?>

        

        <?php
        if($tb=="")
        {
          $tb = "code";
        }

        $query='SELECT id , story as "เรื่อง",name as "ชื่อ-นามสกุล" , code as "รหัสนิสิต", branch as "สาขา", tel as "เบอร์โทรศัพท์", email as "E-mail", date as "วันที่ส่ง", status as "สถานะ"  FROM request where '.$tb.' like "'.$kw.'%" ';
    
         
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

        <table class="table table-bordered" style="width:900px;"  >
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
            <?php 
               
            ?>
            <form method="post" action="/SE/email_r">
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
                    <td align="center" ><input type="checkbox" name="sendMail[]" id="sendMail<?php echo $j;?>" value="<?php echo $row["E-mail"];?>"></td>
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                        <?php if($i==0): ?>
                        <td align="center"><?= $count ?></td>
                       <?php 
                            
                            $count = $count + 1;
                            continue;
                        endif; ?> 
                        <td ><?= $row[$field_name[$i]] ?></td>
                         
                         <?php $key= $row[$field_name[0]];  ?>
                <?php endfor; ?> 
                </tr>

            </tbody>
        <?php endwhile; ?>
	</div>
        </table>  
        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-envelope"></span> ส่ง Email</button>
        </form>
    
</div>