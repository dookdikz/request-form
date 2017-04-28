<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">ข้อมูลนิสิต l</li>
        <li><a href="/se">หน้าหลัก</a></li>
        <li class="active"><a href="/se/search_user">ค้นหาข้อมูล</a></li> 
        
      </ul>
      <ul class="nav navbar-nav navbar-right" style="height:40px; ">
        <li><a href="/se/admin"><button class="btn btn-success " >สำหรับเจ้าหน้าที่</button>  </a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="exam" class="bar">
    ค้นหา
</div>

<div   id="exam" class="container">
    <div>
        <form method="POST" action="/SE/search_user">
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

        if($tb=="")
        {
          $tb = "code";
        }


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

        <table class="table table-bordered">
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
            <tbody>
            <?php $countCh=0 ?>
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


