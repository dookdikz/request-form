<?php
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $chk = $_POST['chk'];
  $_SESSION["check_log"] = 0;
  if ($user == "admin" and $pass == "admin") {  
          $_SESSION["check_log"] = 1;
          echo "<meta http-equiv='refresh' content='0;URL=menu_admin.php'>";

  }
  else { 
          if($chk == 1)
          {
            $message = "รหัสผ่านผิด";
          echo "<script type='text/javascript'>alert('$message');</script>";
          }
          

  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="mode">เข้าสู่ระบบ l</li>
        <li ><a href="/se">หน้าหลัก</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right" style="height:40px; " >
        <li><a href="/se/admin"><button class="btn btn-success " >สำหรับเจ้าหน้าที่</button>  </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="bar" id="login">
  เข้าสู่ระบบ

</div>

<div class="container" id="login">
  <form class="form-horizontal" method="POST" action"/se/admin">
    <div class="form-group">
      <label class="control-label col-sm-2" >Username:</label>
      <div class="col-sm-10">
        <input type="test" class="form-control" id="user" name="user" placeholder="" value="<?php echo  $_SESSION["user"] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pass" placeholder="">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">ลงชื่อเข้าใช้</button>
        <a href="/se"><button type="button" class="btn btn-default">ยกเลิก</button></a>
        <input type="hidden" class="form-control" name="chk" placeholder="" value=1>
      </div>
    </div>
  </form>
</div>
