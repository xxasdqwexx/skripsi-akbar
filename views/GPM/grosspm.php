	<title>GPM</title>

	<!-- Judul -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					GROSS PROFIT MARGIN
				</h3>
				<br>
				<p class="t-center">Gross Profit Margin per-bulan.</p>
				<p style="font-size: 12px;" class="t-center">Gross profit margin atau margin laba kotor, juga dikenal sebagai margin kotor, adalah metrik keuangan yang menunjukkan seberapa efisien bisnis dalam mengelola operasinya pada penjualan setelah dikurangi oleh harga pokok penjualan.</p>
				<br>
				<div align="center" class="mb-3">
			  <button class="btn btn-info btn-sm" onclick="window.print()">print</button>
			</div>
			</div>
	<!-- Cart -->
	<section class="cart bgwhite">
		<div class="container">
				<table width="520" cellspacing="1" cellpadding="1">
						
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="p-l-10">BULAN</th>
							<th class="p-l-10">PENjUALAN</th>
							<th class="p-l-10">HPP</th>
							<th class="p-l-10">GROSS PROFIT MARGIN</th>
						</tr>
						<?php foreach ($harga_pokok_penjualan as $harga_pokok_penjualan) : ?>
						
						<tr class="table-row">
							<td class="p-l-10"><?php echo $harga_pokok_penjualan->tanggal_transaksi; ?></td>
							<td class="p-l-10">Rp <?php echo number_format($harga_pokok_penjualan->subtotal,'0',',','.'); ?></td>
							<td class="p-l-10">Rp <?php echo number_format($harga_pokok_penjualan->byt_produksi+$harga_pokok_penjualan->byo_produksi+$harga_pokok_penjualan->bb_produksi,'0',',','.'); ?></td>
							<td class="p-l-10"><?php echo number_format(($harga_pokok_penjualan->subtotal-($harga_pokok_penjualan->byt_produksi+$harga_pokok_penjualan->byo_produksi+$harga_pokok_penjualan->bb_produksi))/$harga_pokok_penjualan->subtotal*100,'0',',','.'); ?>%</td>
						</tr>
					<?php endforeach; ?>
					</table>
				</div>
			</div>
				<div>
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()."/assets/";?>vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>    
<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
