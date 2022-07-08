<html>
    <head>
    <script>
   
   document.addEventListener('visibilitychange',function(){
          if (document.visibilityState=="hidden")
          {
            alert("Tab swtiched last warning");
            
         
          }
            });

        </script>
         <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
        <style>
body{
    background-color:#eee;
}

label.radio {
  cursor: pointer;
}

label.radio input {
  position: absolute;
  top: 0; 
  left: 0;
  visibility: hidden;
  pointer-events: none;
}

label.radio span {
  padding: 4px 0px;
  border: 1px solid red;
  display: inline-block;
  color: red;
  width: 100px;
  text-align: center;
  border-radius: 3px;
  margin-top: 7px;
  text-transform: uppercase;
}

label.radio input:checked + span {
  border-color: red;
  background-color: red;
  color: #fff;
}

.ans {
  margin-left: 36px !important;
}

.btn:focus {
  outline: 0 !important;
  box-shadow: none !important;
}

.btn:active {
  outline: 0 !important;
  box-shadow: none !important;
}
            </style>
     </head>
<body>
        <center><h1>Online Portal</h1>
</center>
<video id ="cam" autoplay playinline width="100" height="100"></video>
         <canvas id="can"></canvas>
         <a download></a>
         <script>
        const camera=document.getElementById("cam");
        const canvas=document.getElementById("can");
        const webca=new Webcam(camera,"user",canvas);
        webca.start();
         </script>

<?php
$con=mysqli_connect("localhost","root","","onlineexam");
if($con)
{
    echo "";
}
else 
die();
$sql="select * from queandans";
$r=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($r)){
    $num=$row['qnum'];
    $que=$row['question'];
    $opt1=$row['option1'];
    $opt2=$row['option2'];
    $opt3=$row['option3'];
    $opt4=$row['option4'];
    $ans=$row['ans'];

?>
<div >
<form >
<p id='q'>Q <?php echo $num.". ". $que;?></p>

<input type="radio" id=<?php $opt1?> name="answer"><?php echo $opt1; ?>
<br>
<input type="radio" id=<?php $opt2?> name="answer"><?php echo $opt2; ?>
<br>
<input type="radio" id=<?php $opt3?> name="answer"><?php echo $opt3; ?>
<br>
<input type="radio" id=<?php $opt4?> name="answer"><?php echo $opt4; ?>

<?php
}

?>
<br>
<br>
</div>
<button>Submit</button>
</form>
</body>
</html>
