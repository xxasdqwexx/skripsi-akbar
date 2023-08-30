<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url()."/assets/";?>images/icons/favicon1.png"/>
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
	<title>Detail Transaksi</title>

	<!-- Title Page -->
					<div class="sec-title p-t-10">
									<br><br>
				<h3 class="m-text5 t-center">
					DETAIL TRANSAKSI
				</h3>
			</div>
	
<br>

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
						<tr>
						</table>
						<br>

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




<script>
		window.print();
	</script>


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
