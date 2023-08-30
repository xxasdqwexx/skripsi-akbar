<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url()."/assets/";?>images/icons/favicon2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>fonts/themify/themify-icons.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/assets/";?>css/main.css">

<!--===============================================================================================-->
</head>
<body class="animsition">
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
				</div>
				<span class="topbar-child1">
					Selamat Datang Admin!
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						Restoran Bakso Juta Rasa
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url()."Produk/katalog";?>" class="logo">
					<img src="<?php echo base_url()."/assets/";?>images/icons/logo2.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<?php if ($this->session->userdata('akses_level') == 'admin') {?>
							<li class="sale-noti">
							<a href="<?php echo base_url()."Produk/katalog";?>">Katalog Menu</a>
							</li>
							<li>
							<a href="<?php echo base_url()."Transaksi/checkout";?>">Checkout</a>
							</li>
							
							<?php if ($this->session->userdata('nama')) { ?>
							<li>
							<a href="<?php echo base_url()."Transaksi/lihat";?>">Transaksi</a>
							</li>
							<?php }
							else{} ?>

							<div class="dropdown">
  							<a class="btn dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">More Data</a>
  							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							<li>
							<a class="dropdown-item" href="<?php echo base_url()."Produk/katalog1";?>">Data Menu</a>
							</li>
    						<?php if ($this->session->userdata('akses_level') == 'admin') {
							$id_user = $this->session->userdata('id_user');?>
							<li>
							<a class="dropdown-item" href="<?php echo base_url().'Akun/detail/'.$id_user?>">Data Profile</a>
							</li>
							<li>
							<a class="dropdown-item" href="<?php echo base_url()."Biayaproduksi/data_by";?>">Input Data Biaya</a>
							</li>
							<li>
							<a class="dropdown-item" href="<?php echo base_url()."Grosspm/data_gpm";?>">Data GPM</a>
							</li>
							<li>
							<a class="dropdown-item" href="<?php echo base_url()."Profitmr/data_pmr";?>">Data PMR</a>
							</li>
							<?php }?>  							
  							</ul>
							</div>
							<?php } 
							else{
							?>
							<li class="sale-noti">
								<a href="<?php echo base_url()."Produk/katalog";?>">Katalog Menu</a>
							</li>
							<?php }?>
							<?php if ($this->session->userdata('akses_level') == 'admin') {
								?>
							
							<?php } 
							else{}
							?>
						</ul>
					</nav>
				</div>
						<?php if ($this->session->userdata('akses_level') == 'admin') {
								?>
						<li>
							<div class="search-product pos-relative">
								<form method="POST" action="<?php echo base_url()."Produk/cari";?>">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="keyword" placeholder="Cari Produk...">
							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
								</form>
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
							</li>
						<?php }else{} ?>
				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon2">
						<?php $cart=$this->cart->contents(); ?>
						<?php if ($this->session->userdata('akses_level') == 'admin') {?>
						<img src="<?php echo base_url()."/assets/";?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<!-- <span class="header-icons-noti"></span> -->
						<?php }else{} ?>

						<!-- Header cart noti -->
						<div id="result">
						<div class="header-cart header-dropdown" id="cart-details">
							<ul class="header-cart-wrapitem">
								<?php if (empty($cart)) {
									echo "Belum ada belanjaan!";
								}
								else{
									foreach ($cart as $cart) {
									$id = $cart['id'];
									$produknya = $this->model_produk->get_detail($id);	
								?>
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url()."/uploads/".$produknya->gambar1?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<?php echo $cart['name']; ?>
										</a>

										<span class="header-cart-item-info">
											<?php echo $cart['qty']; ?> x Rp. <?php echo number_format($cart['price'],'0',',','.'); ?> = Rp. <?php echo number_format($cart['subtotal'],'0',',','.'); ?>
										</span>
									</div>
								</li>

								<?php }} ?>
							</ul>

							<div class="header-cart-total">
								Total = Rp. <?php $keranjang1=$this->cart->total(); ?><?php echo number_format($keranjang1,'0',',','.'); ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<?php if ($this->session->userdata('akses_level') !== 'admin') {
								?>
									<a href="<?php echo base_url()."Transaksi/checkout";?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										CheckOut
									</a>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
					</div>
					<span class="linedivide1"></span>
					<?php if ($this->session->userdata('nama')) { ?>
				<a class="button" href="<?php echo base_url()."Akun/logout";?>">logout</a>
			<?php }else{ ?>
				<a class="button" href="<?php echo base_url()."Akun/login";?>">login</a>
			<?php }?>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?php echo base_url()."Produk/katalog";?>" class="logo-mobile">
				<img src="<?php echo base_url()."/assets/";?>images/icons/logo2.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
				<div class="header-wrapicon2">
					<?php $cart=$this->cart->contents(); ?>
					<?php if ($this->session->userdata('akses_level') == 'admin') {?>
					<img src="<?php echo base_url()."/assets/";?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<!-- <span id="noti1" class="header-icons-noti"></span> -->
					<?php }else{} ?>
							
					<!-- Header cart noti -->
					<div id="result1">
					<div class="header-cart header-dropdown" id="cart-details1">
						<ul class="header-cart-wrapitem">
							<?php if (empty($cart)) {
								echo "Belum ada belanjaan!";
							}
							else{
							foreach ($cart as $cart) {
							$id_produk = $cart['id'];
							$produknya = $this->model_produk->get_detail($id_produk);		
							?>
							<li class="header-cart-item">
							<div class="header-cart-item-img">
							<img src="<?php echo base_url()."uploads/".$produknya->gambar1?>">
							</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<?php echo $cart['name']; ?>
										</a>

										<span class="header-cart-item-info">
											<?php echo $cart['qty']; ?> x <?php echo number_format($cart['price'],'0',',','.'); ?> = <?php echo number_format($cart['subtotal'],'0',',','.'); ?>
										</span>
									</div>
								</li>
								<?php }} ?>
							</ul>

							<div class="header-cart-total">
								Total = Rp. <?php $keranjang1=$this->cart->total(); ?><?php echo number_format($keranjang1,'0',',','.'); ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<?php if ($this->session->userdata('akses_level') !== 'admin') {
								?>
									<a href="<?php echo base_url()."Transaksi/checkout";?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									<?php } ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
					<span class="linedivide2"></span>
				<?php if ($this->session->userdata('nama')) { ?>
				<a class="button" href="<?php echo base_url()."Akun/logout";?>">logout</a>
			<?php }else{ ?>
				<a class="button" href="<?php echo base_url()."Akun/login";?>">login</a>
			<?php }?>
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
				<?php if ($this->session->userdata('akses_level') == 'admin') {?>
					<li class="item-topbar-mobile p-1-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							<div class="search-product pos-relative">
							<form method="POST" action="<?php echo base_url()."Produk/cari";?>">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="keyword" placeholder="Cari Produk...">
							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
								</form>
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						</span>
					</li>
				<?php } else{} ?>
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Selamat Datang Admin
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								Restoran Bakso Juta Rasa
							</span>
						</div>
					</li>
					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
						</div>
					</li>
					<?php if ($this->session->userdata('akses_level') == 'admin') {?>
							<li class="item-menu-mobile">
							<a href="<?php echo base_url()."Produk/katalog";?>">Katalog Menu</a>
							</li>
							<li class="item-menu-mobile">
							<a href="<?php echo base_url()."Transaksi/checkout";?>">Checkout</a>
							</li>
							<?php } 
							else{
							?>
							<?php }?>
							<?php if ($this->session->userdata('nama')) { ?>
							<li class="item-menu-mobile">
								<a href="<?php echo base_url()."Produk/katalog1";?>">Data Menu</a>
							</li>
							<li class="item-menu-mobile">
								<a href="<?php echo base_url()."Transaksi/lihat";?>">Transaksi</a>
							</li>
							<li class="item-menu-mobile">
								<a href="<?php echo base_url()."Biayaproduksi/data_by";?>">Data Biaya</a>
							</li>
							<li class="item-menu-mobile">
							<a href="<?php echo base_url()."Grosspm/data_gpm";?>">Data GPM</a>
							</li>
							<li class="item-menu-mobile">
							<a href="<?php echo base_url()."Profitmr/data_pmr";?>">Data PMR</a>
							</li>
						<?php }
						else{} ?>
							<?php if ($this->session->userdata('akses_level') == 'admin') {
									$id_user = $this->session->userdata('id_user');
								?>
								<li class="item-menu-mobile">
								<a href="<?php echo base_url().'Akun/detail/'.$id_user?>">Data Profile</a>
							</li>
						<?php }else{} ?>
				</ul>
			</nav>
		</div>
	</header>