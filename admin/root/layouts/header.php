		<header class="header bg-dark text-white ">
			<?php if(!empty($_SESSION['id_admin'])) { ?>
			<h6 class="ml-6" style="margin-left: 86px;">Xin chào 
					<span class="text-danger text-uppercase"><?php echo $_SESSION['username'] ?></span>
			<?php } ?>
			</h6>
			<div class="header__right">
				<h6 class="header_right-home">
					<a class="header__right-link text-decoration-none text-white" href="index.php">
						<i class="fa-solid fa-house-user"></i>						
						Trang chủ
					</a>
				</h6>
				<h6 class="header_right-logout">
					<a class="header__right-link text-decoration-none text-white" href="process_logout.php">
						<i class="fa-solid fa-power-off"></i>
						Đăng xuất 
					</a>
				</h6>
			</div>
		</header>


