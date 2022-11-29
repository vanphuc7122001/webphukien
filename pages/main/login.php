
<div class="container" style="width: 800px;">
  <h4 class="text-center">Đăng Nhập</h4>

  <form method="post" action="./pages/main/process/process_login.php">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Mật Khẩu</label>
        <input type="password" class="form-control" id="password" placeholder="Nhập password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
</div>


<?php
      if(!empty($_SESSION['status'])) {
?>
      <script>
          alert("<?php echo $_SESSION['status'] ?>");
      </script>
<?php } 
    unset($_SESSION['status']);
?>