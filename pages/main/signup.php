
<div class="container" style="width: 800px;">
  <h4 class="text-center">Đăng ký</h4>

  <form method="post" action="./pages/main/process/process_signup.php">
    <div class="form-group">
        <label for="name">Tên người dùng</label>
        <input type="text" class="form-control" id="name" placeholder="Nhập tên người dùng" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Mật Khẩu</label>
        <input type="password" class="form-control" id="password" placeholder="Nhập password" name="password" required>
    </div>
    <div class="form-group">
        <label for="phone_number">SĐT</label>
        <input type="text" class="form-control" id="phone_number" placeholder="Nhập SDT người dùng" name="phone_number" required>
    </div>
    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" placeholder="Nhập tên người dùng" name="address" required>
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