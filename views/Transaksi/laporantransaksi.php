	<title>Transaksi</title>

	<!-- Title Page -->
	<div class="sec-title p-t-10">
	<br><br>
	<h3 class="m-text5 t-center">
	TRANSAKSI
	</h3>
	</div><br><br>


	<!-- Cart -->
	<section class="cart bgwhite">
		<div class="container">
			<!-- Transaksi item -->
			<div class="pos-relative">
			<form method="POST" action="<?php echo base_url()."Transaksi/tanggal";?>">
			<div class="input-group input-group-sm mb-3">
  				<p style="padding-right: 10px;">tanggal mulai :</p>
  				<input name="dari_tgl" id="datePickerId"  style="background-color: #EEEEEE" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
  				<p style="padding-right: 50px;">  </p>
  				<p style="padding-right: 10px;">tanggal akhir :</p>
  				<input name="sampai_tgl" id="datePickerId2" style="background-color: #EEEEEE" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
			</div>
			<div align="center" class="mb-3">
  				<button type="submit" class="btn btn-success btn-sm">submit</button>
  				<button type="button" class="btn btn-primary btn-sm">reset</button>
  			</div>
			</form>
			<?php foreach ($transaksi as $transaksi1) : ?>
				<h6 style="text-align: right;">Total Penjualan : Rp. <?php echo number_format($transaksi1->totally,'0',',','.') ?> </h6>
				<?php endforeach; ?>
			<br>
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="p-l-30">NO</th>
							<th class="column-1 ">KODE</th>
							<th class="column-1 ">NAMA</th>
							<th class="column-1 ">TANGGAL</th>
							<th class="p-l-75">PEMBAYARAN</th>
							<th class="p-l-75">TOTAL</th>
							<th class="p-l-75">STATUS TRANSAKSI</th>
							<th class="p-l-75">KEMBALIAN</th>
							<th class="p-l-75" style="padding-right: 50px;">ACTION</th>
						</tr>
						<?php $i=1;?>
						<?php foreach ($transaksi as $transaksi) : ?>

						<tr class="table-row" > 
						<td class="p-l-30"><?php echo $i; ?></td>
						<td class="column-1 "><a href="<?php echo base_url()."Transaksi/detail/".$transaksi->id_transaksi;?>"><u><b><?= $transaksi->id_transaksi ?></b></u></a></td>
						<td class="column-1 "><?= $transaksi->nama ?></td>
						<td class="column-1"><?= date('d-m-Y H:i:s', $transaksi->id_transaksi ) ?></td>
							<?php if ($this->session->userdata('akses_level') == 'admin') {
								?>
						<td class="p-l-75">Rp. <?php echo number_format($transaksi->tunai,'0',',','.')?></b></u></td>
							<?php }else {?>
							<?php }?>
							<?php if ($this->session->userdata('akses_level') == 'admin') {
								?>
						<td class="p-l-75"><input value="<?php if ($transaksi->tunai!==null){echo number_format($transaksi->total,'0',',','.');} ?>" type="text" id="num1"/></td>
								<?php }else {?>
								<?php }?> 
						<td class="p-l-75"><?= $transaksi->status_transaksi ?></td>
						<td class="p-l-75">Rp. <?php if ($transaksi->tunai!==null) {
							echo number_format($transaksi->tunai-$transaksi->total,'0',',','.');
							}else {
							} ?></td>
						<td class="p-l-75" style="padding-right: 50px;">
								<div>
								<?php if ($this->session->userdata('akses_level') == 'admin') {
								?>
								<a  style="font-size: 14px; color: black; text-align: center;" href="<?php echo base_url()."Transaksi/cetaktransaksi/".$transaksi->id_transaksi?>" target="_blank"><img src="<?php echo base_url()."/assets/";?>images/icons/print.png" alt="ICON"></a>
								<?php } ?>
						</div>
							</td>
						</tr>
						<?php $i++;
						endforeach; ?>
					</table>
				</div>
			</div>
<br>
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
		datePickerId.max = new Date().toISOString().split("T")[0];
		datePickerId2.max = new Date().toISOString().split("T")[0];
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});

		
		function changeFunc() {
	    var sorting = document.getElementById("sorting");
    	var selectedValue = sorting.options[sorting.selectedIndex].value;
    	alert(selectedValue);
   		}


	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
