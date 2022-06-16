<!DOCTYPE html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <!-- Styles -->
</head>
<body>
    <form method="post" style="width: 600px;margin-left:500px;">
<!-- @csrf -->

  <div class="container">
 
       <div class="form-group">
                <label>Danh mục sản phẩm</label>
                <input type="text" class="form-control" name="dm">
            </div>

 <!-- Button  để mở form  -->
 <button id="myBtn"></button>

 <!-- The Modal -->
 <div id="myModal" class="modal">
     <!-- Nội dung form  -->
     <div class="modal-content">
         <form action="#">
             <span class="close">&times;</span>
             <h2>Danh mục sản phẩm</h2>
             <div class="fomrgroup">
                 <b>Điện thoại di dộng</b>
                 <input type="text" name="username">
             </div>
             <div class="fomrgroup">
                 <b>Máy tính bảng</b>
                 <input type="passWord" name="passWord">
             </div>
             <div class="fomrgroup">
               <b>Laptop</b>
             </div>
             <div class="fomrgroup">
               <b>Phụ kiên</b>
             </div>
         </form>
     </div>
 </div>
</div>
<script>
    // lấy phần Modal
    var modal = document.getElementById('myModal');
  
    // Lấy phần button mở Modal
    var btn = document.getElementById("myBtn");
  
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];
  
    // Khi button được click thi mở Modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
  
    // Khi span được click thì đóng Modal
    span.onclick = function() {
        modal.style.display = "none";
    }
  
    // Khi click ngoài Modal thì đóng Modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</form>
</body>