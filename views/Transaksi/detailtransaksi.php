	<title>Detail Transaksi</title>

	<!-- Title Page -->
					<div class="sec-title p-t-10">
									<br><br>
				<h3 class="m-text5 t-center">
					DETAIL TRANSAKSI
				</h3>
			</div>
	
<br>
	<!-- Cart -->
	<section class="cart bgwhite">
		<div class="container">
				<table width="520" cellspacing="1" cellpadding="1">
						<tr>
						<td width="153">Kode Transaksi</td>
						<td width="23"><div align="center" >:</div></td>
						<td width="326"><?php echo $transaksi->id_transaksi; ?></td>
						</tr>
						<tr>
						<td>Nama Penerima</td>
						<td><div align="center" >:</div></td>
						<td><?php echo $transaksi->nama; ?></td>
						</tr>
						<tr>
						<td>Email Penerima</td>
						<td><div align="center" >:</div></td>
						<td><?php echo $transaksi->email; ?></td>
						</tr>
						<tr>
						<td>Telepon Penerima</td>
						<td><div align="center" >:</div></td>
						<td><?php echo $transaksi->telepon; ?></td>
						</tr>
						<tr>
						<td>Alamat Penerima</td>
						<td><div align="center" >:</div></td>
						<td ><?php echo $transaksi->alamat; ?></td>
						</tr>
						<tr>
						<td>Tanggal Transaksi</td>
						<td><div align="center" >:</div></td>
						<td><?php echo $transaksi->tanggal_transaksi; ?></td>
						</tr>
						<tr>
						<td>Status Transaksi</td>
						<td><div align="center" >:</div></td>
						<td><?php echo $transaksi->status_transaksi; ?></td>
						</tr>
						<tr>
						<td>Tunai</td>
						<td><div align="center" >:</div></td>
						<td >Rp. <?php echo number_format($transaksi->tunai,'0',',','.'); ?></td>
						</tr>
						</table>
						<br>
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="p-l-10">NAMA</th>
							<th class="p-l-10">Harga</th>
							<th class="p-l-10">Jumlah</th>
							<th class="p-l-10">Subtotal</th>
						</tr>
						<?php foreach ($item as $item) : ?>
						<tr class="table-row">
							<td class="p-l-10"><?php echo $item->nama_produk; ?></td>
							<td class="p-l-10">Rp. <?php echo number_format($item->harga,'0',',','.'); ?></td>
							<td class="p-l-10"><?php echo $item->jumlah; ?></td>
							<td class="p-l-10">Rp. <?php echo number_format($item->total,'0',',','.'); ?></td>
						</tr>
					<?php endforeach; ?>
					</table>
				</div>
			</div>

			<br>
			<div class="jumbotron" style="text-align: right;">
					<span>
						<b>TOTAL PEMBAYARAN : Rp. <?php if ($transaksi->tunai!==null) {
							echo number_format($transaksi->total,'0',',','.');
						} ?></b>
					</span>
					<br>
					<span>
						<b>PEMBAYARAN DITERIMA : Rp. <?php if ($transaksi->tunai!==null) {
							echo number_format($transaksi->tunai,'0',',','.');
						} ?></b>
					</span>
					<br>
					<span>
						<b>TOTAL KEMBALIAN : Rp. <?php if ($transaksi->tunai!==null) {
					echo number_format($transaksi->tunai-$transaksi->total,'0',',','.');
						} ?>
						</b>
					</span>
					<br><br>
				</div>
				<div>
						<br><br>
				</div>
		</div>
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
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
