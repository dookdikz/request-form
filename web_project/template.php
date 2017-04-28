<?php 
   header('Content-Type: text/html; charset=utf-8');
   session_start();
   $_SESSION["check_log"];
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>ระบบจัดการนิสิตปริญญาโท</title> 
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all" />
   
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
    

   

    
    <style type="text/css">
      .header{
        background: #212020;
        color:  #ffffff;
        font-size: 30px;
        padding: 5px;
        
      }
      body{
        background: #C6C6C6;
      
        
      }
      thead th {
     background-color: #167F92;
     font-size: 16px;
     color: #ffffff;
     text-align: center;
      }
      tr:hover {
     background-color: #CCFFFF;
      }
      td:hover {
     background-color: #CCFFFF;
      }
      li.ff{
        width: 500px;
        height: 500px;
        border-color: #000000;
      }
      #head.laform{
        margin-left: 15px;
        width: 230px;
        font-size: 16px;
      }
      #day.laform{
        margin-left: 15px;
        width: 50px;
        font-size: 14px;
      }
      #month.laform{
        margin-left: 10px;
        width: 45px;
        font-size: 14px;
      }
      #year.laform{
        margin-left: 10px;
        width: 20px;
        font-size: 14px;
      }
      #statusPresent.laform{
        margin-left: 15px;
        width: 170px;
        font-size: 16px;
      }
      .laform{
        margin-left: 15px;
        margin-bottom: 10px;
        width: 175px;
        font-size: 16px;
      }
      #submit{
        margin: 10px;
        width: 100px;
        font-size: 16px;
        padding: 10px;

      }
      ul{
        list-style: none;
      }
      a:hover{
        color: #ffffff;
      }
      a{
        color: #ffffff;
      }
      th{
        background: #98FB98;
      }
      .social{
        
        background: #212020;
       position: absolute;
     
      right: 0;
     
      
      }
      .nav{
       
      }
      .bar{
        width: 80%;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
      #exam.bar{
        width: 1500px;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
       #update_r.bar{
        width: 1350px;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
       #delete_r.bar{
        width: 1000px;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
       #login.bar{
        width: 600px;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
       #alert.bar{
        width: 1000px;
        margin: auto;
        margin-top: 50px;
        background: #212020;
        padding: 15px;
        color: #ffffff;
        font-size: 20px;
        border-radius: 10px 10px 0px 0px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
      .div{
        width: 600px;
        padding: 10px;

      }
      .box{
        width: 600px;
        border-style: solid;

        padding: 10px;

      }
      .table{
        width: 2000px;
        font-size: 12px;
      }
      #alert{
        width: 900px;
        font-size: 12px;
      }
      .container{
        
        width: 80%;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
      }
      #con.container{
        
         width: 80%;
         
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
      #exam.container{
        
        width: 1500px;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
      #update_r.container{
        
        width: 1350px;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
       #delete_r.container{
        
        width: 1000px;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
       #login.container{
        
        width: 600px;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
      #alert.container{
        
        width: 1000px;
        background: #FFFFFF;
        padding: 50px;
        border-radius: 0px 0px 10px 10px;
        box-shadow: 2px 2px 15px 5px #888888;
        
      }
      .mode{
        font-size: 25px;
        color: #ffffff;
        margin-top:7px;
      }
      .label
      {
        font-size: 15px;
        padding: 10px;
      }
      .jumbotron
      {
        background: #212020;
      }
      .tableC
      {
        background-color:#C9C9C9; 
      }
      .boxButton
      {
        width: 80%;


      }
      .menuButton1
      {
          width: 50%;
          height: 100px;
          font-size: 30px;
        
          float: left;
      }
       .menuButton2
      {
          width: 50%;
          height: 100px;
          font-size: 30px;
        
          float: right;
      }
       .boxCon
      {
        width: 80%;


      }
      .boxPic
      {
          width: 50%;
          height: 100px;
          font-size: 30px;
        

      }
       .boxInfo
      {
          
          width: 50%;
          
          font-size: 30px;
         
      }

      #clr{
        clear:both;
        float: left;
        margin-top: 10px;
      }
      .main{
        min-height: 850px;
      }
      .footer{
        margin-top: 10px;
        clear: both;
        width: 100%;
        background: #212020;
        color:  #ffffff;
        font-size: 16px;
        padding: 10px;
        text-align: center;
        
        
   

      }
    </style>
 </head>
    <body>
      <div class="header">
      <img src="img/header.jpg"  height="250px" width="100%">
        
      
      </div>
      <div class="main">
      
      
         <?php include $template['include_file'] ?>
      
     </div>
    <div class="footer">
    <p>คณะวิศวะกรรมศาสตร์ศรีราชา มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตศรีราชา</p>
    <p>เลขที่ 199 ถ.สุขุมวิท ต.ทุ่งสุขลา อ.ศรีราชา จ.ชลบุรี</p>
    <p>โทรศัพท์ 0-3835-4581-6 ต่อ 2805</p>
    <p>Email: waleerat@eng.src.ku.ac.th</p>
    <p>Copyright 2015</p>
    <a href="/se/contact"><button class="btn btn-success " >ติดต่อเจ้าหน้าที่</button>  </a>

      
    </div>
    </body>
    
</html>