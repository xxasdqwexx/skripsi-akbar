	<title>Edit Profile</title>
	<!-- Title Page -->
					<div class="sec-title p-t-10">
				<h3 class="m-text5 t-center">
					EDIT PROFILE
				</h3>
			</div>
	
<br>

	<section class="container bgwhite">
		<br><?php if ($this->session->userdata('akses_level') == 'admin') {
					$id_user = $this->session->userdata('id_user');
					$akses_level = $this->session->userdata('akses_level');
			?>
				<form method="POST" action="<?php echo base_url()."Akun/editprofile/";?>" enctype="multipart/form-data">
					<input type="text" name="id_user" value="<?php echo $id_user ?>" hidden>
					<input type="text" name="akses_level" value="<?php echo $akses_level ?>" hidden>
					
				<span>Nama </span>
			<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nama" value="<?php echo $detail->nama;?>" required>
					</div>
					<span>Email </span>
					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" value="<?php echo $detail->email;?>" required>
					</div>
					<span>Telepon </span>
					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="telepon" value="<?php echo $detail->telepon;?>" required>
					</div>
					<span>Alamat </span>
					<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="alamat" value="<?php echo $detail->alamat;?>" required>
					</div>
					<span>Password</span>
					<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-15 p-r-15" type="Password" name="password" id="myInput2" onkeyup='check();' minlength="7" maxlength="7" value="<?php echo $detail->password;?>">
					</div>
					<div><input type="checkbox" onclick="myFunction2()"><font size="2">Show Password</font></div>
					<br>
					<?php }?>
					<div class="row" style="float: right;">
					<button class="flex-c-m size2 m-text3 w-size25" style="margin-left : 10px; color: white; background-color: #4CAF50;" type="submit">SIMPAN</button>
					<?php if ($this->session->userdata('akses_level') == 'admin') {
					$id_user = $this->session->userdata('id_user');
					?>
					<a class="button flex-c-m size2 m-text3 w-size25" style="margin-left : 10px; color: white; background-color: red;" href="<?php echo base_url().'Akun/detail/'.$id_user?>">BATAL</a>
			<?php }?>
						
					</div>
					</form>
					<br><br><br>	
	</section>



	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size26">
						Ada pertanyaan? Beritahu kami di toko Jl. Sultan Alauddin No.92, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					</div>
				</div>
			</div>

			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					TENTANG
				</h4>

				<div>
					<p class="s-text7 w-size23">
						Warung Bakso Solo Juta Rasa merupakan sebuah tempat makan yang berada di Makassar. Rumah makan ini menyajikan berbagai menu aneka nasi, bakmie & bakso & soto yang dibanderol dengan harga yang murah dan bersahabat dengan kantong Anda. Jika Anda mencari daftar harga menu Warung Bakso Solo Juta Rasa, Anda berada di tempat yang tepat. Di bawah ini akan dibahas secara lengkap menu apa saja yang dijual oleh Warung Bakso Solo Juta Rasa beserta harganya. 
					</p>

				</div>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				Copyright © 2019 All rights reserved. <i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>
		</div>
	</footer>






	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
		function myFunction2() {
  		var y = document.getElementById("myInput2");
  		if (y.type === "password") {
    	y.type = "text";
  		} else {
    	y.type = "password";
  		}
		}
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
