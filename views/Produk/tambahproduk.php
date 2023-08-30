	<title>Tambah Menu</title>

	<!-- Title Page -->
		<div class="sec-title p-t-10">
									<br><br>
				<h3 class="m-text5 t-center">
					TAMBAH MENU
				</h3>
			</div>
<br>
	<!-- Cart -->
	<section class="container bgwhite">
		<form method="POST" action="<?php echo base_url()."Produk/tambah_produk";?>" enctype="multipart/form-data">
		<br>
						<span>Nama Menu</span>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nama_produk" placeholder="contoh : Produk" required>
						</div>
						<span>Harga Menu</span>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="harga" placeholder="contoh : Rp. 10.000" required>
						</div>
						<span>Gambar Menu</span>
						<br><br>
						<div class="container pos-relative">
						<table class=""><tr>
						<span class="s-text7">Gambar Utama</span>
						<div class="of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-r-15" type="file" name="gambar1" placeholder="" required>
						</div>
						
						<span class="s-text7">Gambar Kedua</span>
						<div class="of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-r-15" type="file" name="gambar2" placeholder="" required>
						</div>
						
						<span class="s-text7">Gambar Ketiga</span>
						<div class="of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-r-15" type="file" name="gambar3" placeholder="" required>
						</div>
						</div>
						</tr>
						</table>
						</div>
						<span>Deskripsi Menu</span>
						<textarea class="sizefull s-text7 p-l-15 p-r-15" type="text" name="deskripsi" placeholder="tulis spesifikasi atau deskripsi produk" style="height: 200px;" required></textarea> 
						<br><br>
								<!-- Button -->
							<div class="row" style="float: right;">
							<button class="flex-c-m size2 m-text3 w-size25" style="margin-left : 10px; color: white; background-color: #4CAF50;" type="submit">SIMPAN</button>
							<a onClick="window.location.href = '<?php echo base_url();?>Produk/katalog1';return false;" class="button flex-c-m size2 m-text3 w-size25" style="margin-left : 10px; color: white; background-color: red;" href="#">BATAL</a>
						</div>
						<br><br><br>	
						</form>
	</section>



	<!-- Footer -->
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
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
