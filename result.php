<?php 
include 'admin/db_connect.php'; 
?>
<header>
    <title>Result | Alumni Aravali College of Engineering & Management</title>
</header>
<body>
    <div class="result">
        <br/>
        <br/>
        <br/>
    <h1>Hello Aravalians</h1>
    <p>Select your University from the below options: </p>
    </div>

    <div class="university">
        <div class="column">
        <a href="https://result.mdurtk.in/postexam/result.aspx"> <img src="mdu.png" alt="Snow" style="width:50%"></a>
        </div>
        <div class="column">
          <a href="https://jcboseustymca.co.in/Forms/Student/ResultStudents.aspx"><img src="ymca.png" alt="Forest" style="width:50%"></a>
        </div>
      </div>

<style>
.result h1{
  color: rgb(92, 105, 58);
  text-align: center;
  margin-top: 30px;
  font-weight: 700;
}
.result p{
  text-align: center;
  margin-top: 80px;
  font-size: 20px;
  font-weight: 800;
  color: brown;
}
.column {
  box-sizing: border-box;
  float: left;
  width: 50%;
  padding: 100px;
}
.university{
  content: "";
  clear: both;
  display: table;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: -70px;
}
@media screen and (max-width: 600px) {
  .column {
      width: 100%;
      padding: 40px;
          }
      }
</style>