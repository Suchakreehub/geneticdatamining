
<?php $age = array(30,35,40,45,50);
    $gender = array(5,-5);
    $exercise = array(0 , -5,-10,-20,-30);
    $smoke = array(20,-10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMining</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    ตัวอย่าง<br>
    <div class="row">
  <div class="col">
    <input type="int" class="form-control" name = "age" placeholder="อายุ" aria-label="age">
  </div>
  <div class="col">
    <select class="form-select" id = "gender">
    <option value="">Choose...</option>
    <option value="">Choose...</option>
  </div>
</div>
<br>
<div class ="row"> 
<div class="col">
    <input type="int" class="form-control" name = "exercise"  placeholder="ออกกำลังกาย" aria-label="exercise">
  </div>
  <div class="col">
    <input type="int" class="form-control" name = "smoke"  placeholder="สูบบุหรี่" aria-label="smoke ">
  </div>
</div>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>