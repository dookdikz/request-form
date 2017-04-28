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
  
<div style="width:1200px;" id="update_r" class="bar">
  แก้ไขข้อมูลที่ปรึกษา
</div>
<div  style="width:1200px;" id="update_r" class="container">
    <div>
        <form method="POST" action="/SE/update_ad">
            <div class="form-group">
                <div class="form-inline">
                    <label class="laform">ค้นหาโดย:</label>
                    <input type="radio" name="search" value="code" checked="checked">รหัสที่ปรึกษา
                    <input type="radio" name="search" value="title">คุณวุฒิ
                    <input type="radio" name="search" value="name">ชื่อ - นามสกุล
                    <input class="form-control" name="keyword"  placeholder="" >
                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                </div>
            </div>
        </form>

    </div>
    <div > 
        <?php
        include("connect_db.php");

        $tb = $_POST['search'];
        $kw = $_POST['keyword'];
        $edit = $_POST['edit'];
        $codeEdit = $_POST['1'];
        $titleEdit = $_POST['2'];
        $nameEdit = $_POST['3'];
        ?>
        
        <?php if($edit != ""):?>
        <h2>แก้ไขข้อมูลเรียบร้อย</h2>
        <?php endif;?>

        <?php

        if($tb=="")
        {
          $tb = "code";
        }
       $query2= 'UPDATE adviser set  code="'.$codeEdit.'", name="'.$nameEdit.'", title="'.$titleEdit.'" where ad_id like "'.$edit.'"'  ;
       
        
        $result2 = mysql_db_query($db, $query2);
        $query='SELECT ad_id,code as "รหัสที่ปรึกษา",title as "คุณวุติ",name as "ชื่อ - นามสกุล" FROM adviser where '.$tb.' like "'.$kw.'%" ';       
       
    
         
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

        <table class="table table-bordered" style="width: 1000px; " >
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
                $arrayData = array("a","1","2","3");
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
                <form method="post" action="/se/update_ad">
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                       
                       <?php if($i==0):
                        ?>
                        <td align="center" ><?= $count ?></td>
                       <?php   
                            $count = $count + 1;
                            continue;
                        endif; ?> 
                        
                        <td class="<?php echo $color; ?>">
                        <input  name= "<?= $arrayData[$i] ?>" class="form-control" value="<?= $row[$field_name[$i]]?>" style="width: 200px; "></td>
                         <input type="hidden" name = "edit" value="<?php echo $row[$field_name[0]] ;?>">
                         <?php $a= $row[$field_name[0]];  ?> 
                      
                <?php endfor; ?> 
                <td ><button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-pencil"></span> แก้ไข</button></td>
               
                </form>
                </tr>

            </tbody>
        <?php endwhile; ?>

        </table>
    </div>
</div>