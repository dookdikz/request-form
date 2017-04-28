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
        <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se/menu_admin">หน้าหลัก</a></li>
        <li ><a href="/se/insert_r">เพิ่มข้อมูล</a></li>
        <li><a href="/se/search_r">หาข้อมูล</a></li> 
        <li class="active"><a href="/se/update_r">แก้ไขข้อมูล</a></li>
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
  
<div id="update_r" class="bar">
	แก้ไขข้อมูล
</div>
<div   id="update_r" class="container">
    <div>
        <form method="POST" action="/SE/update_r">
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
    <div  style="overflow-x: scroll; "> 
        <?php
        include("connect_db.php");

        $tb = $_POST['search'];
        $kw = $_POST['keyword'];
        $edit = $_POST['edit'];
        $storyEdit = $_POST['1'];
        $nameEdit = $_POST['2'];
        $codeEdit = $_POST['3'];
        $branchEdit = $_POST['4'];
        $telEdit = $_POST['5'];
        $emailEdit = $_POST['6'];
        $dateEdit = $_POST['7'];
        $statusEdit = $_POST['8'];?>
        <?php if($edit != ""):?>
        <h2>แก้ไขข้อมูลเรียบร้อย</h2>
        <?php endif;?>

        <?php
        if($tb=="")
        {
          $tb = "code";
        }
       $query2= 'UPDATE request set  story="'.$storyEdit.'", name="'.$nameEdit.'", code="'.$codeEdit.'", tel="'.$telEdit.'", email="'.$emailEdit.'", date="'.$dateEdit.'", status="'.$statusEdit.'" where id like "'.$edit.'"'  ;
        $result2 = mysql_db_query($db, $query2);
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

        <table class="table table-bordered" id="alert">
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
            <?php 
                $arrayData = array("a","1","2","3","4","5","6","7","8");
            ?>
            <tbody>
                 <?php $countColor = 0; ?>
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
                <form method="post" action="/se/update_r">
                <tr class="<?php echo $colorCh; ?>">
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                        <?php if($i==0):?> 

                        
                        <td align="center" ><?= $count ?></td>
                       <?php
                       $count++;
                        continue;
                         endif; ?> 
                        <td>
                        <input class="form-control" name= "<?= $arrayData[$i] ?>" value="<?= $row[$field_name[$i]] ?>" style="width: 150px; "></td>
                         <input type="hidden" name = "edit" value="<?php echo $row[$field_name[0]] ;?>">
                         <?php $a= $row[$field_name[0]];  ?> 
                      
                <?php endfor; ?> 
                <td><button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-pencil"></span> แก้ไข</button></td>
               
                </form>
                </tr>

            </tbody>
        <?php endwhile; ?>

        </table>
    </div>
</div>