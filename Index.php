<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}
$em_name = "";
$em_name = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<link rel="stylesheet" href="styletab.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

</head>
<body>
<link href="select2-4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="select2-4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="scripttab.js"></script>

<div class="page-header">
        <h1><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> เข้าสู่ระบบ</h1>
        <a href="reset-password.php" class="btn btn-warning">รีเซ็ทพาสเวิร์ด</a>
        <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
    </div>
<h2>Bead Crack and Side Crack Expand Check Record</h2>
<h3>ใบบันทึกการเช็คขอบแตกและแก้มแตกด้วยชุดถ่างขอบ</h3>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Goodtire')" id="defaultOpen">ยางดี</button>
  <button class="tablinks" onclick="openCity(event, 'Reworktire')">ยางซ่อม</button>
  <button class="tablinks" onclick="openCity(event, 'Rejecttire')">ยางเสีย</button>
</div>

<div id="Goodtire" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>ยางดี</h3>
  <p>หน้านี้สำหรับบันทึกยอดยางดี</p>
  <form method ="post" action="testconnect.php">
  <div class="name">
  <label for="fname">รหัสพนักงาน:</label><br>
  <input type="text" id="member_name" name="member_name" value="<?php echo $em_name; ?>" readonly><br>
  <label for="lname">ไซส์ยาง:</label><br>
  <input type="text" id="member_lname" name="member_lname"><br>
  <label for="username">จำนวน:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="problemtype">ประเภทยาง:</label><br>
  <input type="text" id="problemtype" name="problemtype" value="ยางดี" readonly><br>
  <label for="problem">ปัญหายาง:</label><br>
  <input type="text" id="problem" name="problem" value="-" readonly><br><br></div>
  <div class="submit"><input type="submit" value="Submit"></div>
  
</form> 
</div>

<div id="Reworktire" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>ยางซ่อม</h3>
  <p>หน้านี้สำหรับบันทึกยอดยางซ่อม</p> 
  <form method ="post" action="testconnect.php">
  <div class="name">
  <label for="fname">รหัสพนักงาน:</label><br>
  <input type="text" id="member_name" name="member_name" value="<?php echo $em_name; ?>" readonly><br>
  <label for="lname">ไซส์ยาง:</label><br>
  <input type="text" id="member_lname" name="member_lname"><br>
  <label for="username">จำนวน:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="problemtype">ประเภทยาง:</label><br>
  <input type="text" id="problemtype" name="problemtype" value="ยางซ่อม" readonly><br>
  <label for="problem">ปัญหายาง:</label><br>
  <input type="text" id="problem" name="problem"><br><br></div>
  <div class="submit"><input type="submit" value="Submit"></div>
  
</form> 
</div>

<div id="Rejecttire" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>ยางเสีย</h3>
  <p>หน้านี้สำหรับบันทึกยอดยางเสีย</p>
  <form method ="post" action="testconnect.php">
  <div class="name">
  <label for="fname">รหัสพนักงาน:</label><br>
  <input type="text" id="member_name" name="member_name" value="<?php echo $em_name; ?>" readonly><br>
  <label for="lname">ไซส์ยาง:</label><br>
  <input type="text" id="member_lname" name="member_lname"><br>
  <label for="username">จำนวน:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="problemtype">ประเภทยาง:</label><br>
  <input type="text" id="problemtype" name="problemtype" value="ยางเสีย" readonly><br>
  <label for="problem">ปัญหายาง:</label><br>
  <input type="text" id="problem" name="problem"><br><br></div>
  <div class="submit"><input type="submit" value="Submit"></div>
  
</form> 
</div>
  
</form> 
</body>
</html>
