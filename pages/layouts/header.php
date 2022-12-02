		<div class="row">
			<div class="col-md-12">
				<header class="header">
					<nav class="navbar navbar-expand-sm navbar-dark" style=" width: 100%; height: 60px; background-color:#212121;">
		    			<!-- logo -->
				        <div class="col-md-4" style="height: 90px;text-align: center">
				            <a href="index.php">
				            	<img src="./img/logo_phukien.png" class="rounded-circle img-thumbnail" style="margin-top: 10px; " width="60px" height="60px">
				            </a>
				        </div>
			     		<!-- tim kiem -->
			    		 <div class="col-md-4" style="color: white;margin-top: 20px;">
			            	<form method="post" action="index.php?action=search">
				                <div class="header__search">
				                    <input type="text" placeholder="Nhập tên sản phẩm cần tìm kiếm ..." name="tukhoa" class="form-control ">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
				                </div>
			            	</form>
			        	</div>

			        	<!--dang nhap -->
			            <div class="col-md-4 heder_right " id="menu_right" style="margin-bottom: 10px;">
			        		<div class="col-lg-offset-4">
			            		<div class="login_signup">
			            			<?php if(empty($_SESSION['id'])) { ?>
				            			<a class="login text-decoration-none text-white" href="index.php?action=login">
				            				<i class="fa fa-user"></i> 
				            				Đăng nhập |
				            			</a>
				                        <a class="register text-decoration-none text-white" href="index.php?action=register">
				                        	<i class="fa fa-user-plus"></i> 
				                        	Đăng ký
				                    	</a>
							        <?php } else { ?>
							        	<a class="text-white text-decoration-none " href="index.php?action=view_cart">
							        		<i class="fa fa-shopping-cart"></i>
							        		 Giỏ hàng
							        	</a>
							        	<p class="text-white float-right">Xin chào <b><?php echo $_SESSION['name'] ?></b></p>
							        	<a class="login ml-3 text-decoration-none text-white" href="index.php?action=logout">
				            				<i class="fa-solid fa-power-off"></i>
				            				Đăng xuất 
				            			</a>
							        	
							        <?php } ?>
							   
			                    </div>
			            	</div>
			            </div>
		            </nav>
				</header>
			</div>
		</div>