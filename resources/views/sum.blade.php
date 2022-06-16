<!DOCTYPE html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
</head>
<body>
<form method="post">
 @csrf
  <div class="form-group">
    
    <input type="number" class="form-control" name="soA" placeholder="Số A">
   
  </div>
  <div class="form-group">
    
    <input type="number" class="form-control"  name="soB" placeholder="Số B">
  </div>
  
  <button type="submit" class="btn btn-primary">Tổng</button>
  <div class="form-group">
        <input type="number" class="form-control"disabled="" value="<?php if(isset($sum)) echo $sum ?>">
    </div>
</form>
</body>