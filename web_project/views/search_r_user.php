<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
         <li class="mode">ใบคำร้อง l</li>
        <li ><a href="/se">หน้าหลัก</a></li>
        <li ><a href="/se/insert_r_user">แจ้งส่งใบคำร้อง</a></li>
        <li class="active"><a href="/se/search_r_user">เช็คสถานะ</a></li>
        <li><a href="/se/download">ดาวน์โหลดไฟล์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="height:40px; ">
        <li><a href="/se/admin"><button class="btn btn-success " >สำหรับเจ้าหน้าที่</button>  </a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="alert" class="bar">
    ค้นหา
</div>

<div   id="alert" class="container">
    <div>
        <form method="POST" action="/SE/search_r_user">
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
    <div > 
        <?php
        include("connect_db.php");

        $tb = $_POST['search'];
        $kw = $_POST['keyword'];

        if($tb=="")
        {
          $tb = "code";
        }

        $query='SELECT id , story as "เรื่อง",name as "ชื่อ-นามสกุล" , code as "รหัสนิสิต", branch as "สาขา", tel as "เบอร์โทรศัพท์", email as "E-mail", date as "วันที่ส่ง", status as "สถานะ"  FROM request where '.$tb.' like "%'.$kw.'%" ';
       

        
         
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
            <tr >
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
            <tbody> 
            <?php $count=1 ?>
                <?php while ($row = mysql_fetch_array($result)):
                    $colorCh="";
                    if($countCh%2==1)
                    {
                        $colorCh="tableC";
                    }
                    $countCh++;
                ?>
                <tr class="<?php echo $colorCh; ?>">
               
                    <?php for ($i = 0; $i < mysql_num_fields($result); $i++): ?>
                       <?php if($i==0): ?>
                        <td align="center"><?= $count ?></td>
                       <?php 
                            $count = $count + 1;
                            continue;
                        endif; ?> 
                        <td><?= $row[$field_name[$i]] ?></td>
                <?php endfor; ?>
                </tr>
            </tbody>
        <?php endwhile; ?>

        </table>

    </div>
</div>


