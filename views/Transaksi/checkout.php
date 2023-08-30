	<title>Checkout</title>

	
	<!-- Title Page -->
					<div class="sec-title p-t-10">
					<br><br>
				<h3 class="m-text5 t-center">
					CHECKOUT
				</h3>
			</div>
	<br>

	<!-- Cart -->
	<section class="cart bgwhite">
		<div class="container">
			<!-- Cart item -->
			<form method="POST" action="<?php echo base_url()."Transaksi/create";?>">
			<?php $cart=$this->cart->contents(); ?>
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-3 p-l-20">GAMBAR</th>
							<th class="column-2">Nama</th>
							<th class="column-3 p-l-20">Harga</th>
							<th class="column-3 p-l-20">Jumlah</th>
							<th class="column-3">subtotal</th>
							<th class="column-3 p-l-20">action</th>
						</tr>
								<?php if (empty($cart)) {
									echo "Belum ada belanjaan !";
								}
								else{
									foreach ($cart as $item) {
									$id_produk = $item['id'];
									$produknya = $this->model_produk->get_detail($id_produk);					
								?>
						<tr class="table-row">
							<td class="column-3 p-l-20">
								<div class="wrap-pic-w">
									<input type="hidden" name="id_produk" id="id_produk" value="<?= $id_produk?>">
									<img src="<?php echo base_url()."/uploads/".$produknya->gambar1?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><input size="40" type="text" name="nama_produk" value="<?php echo $item['name']; ?>" readonly></td>
							<td class="column-3 p-l-20">Rp. <?php echo number_format($item['price'],'0',',',','); ?> <input style="width: 200px;" type="number" name="harga" value="<?php echo number_format($item['price'],'0',',',','); ?>" readonly></td>
							<td class="column-3 p-l-20">
							<div class="flex-w w-size17">

								<button onclick="check2(<?= $item['rowid']; ?>, <?= $item['price']; ?>)" class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" id="buttonminus" aria-hidden="true"></i>
								</button>

									<input readonly="true" id="<?= $item['rowid']; ?>" class="size8 m-text18 t-center num-product" type="number" name="jumlah" value="<?php echo $item['qty']; ?>">

								<button onclick="check(<?= $item['rowid']; ?>, <?= $item['price']; ?>)" class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true" id="buttonplus"></i>
								</button>

								</div>
							</td>
							<td class="column-3">Rp <input  style="width: 110px;" id="subtotal-<?= $item['rowid']; ?>" type="float" name="subtotal" value="<?php echo number_format($item['subtotal'],'0',',',','); ?>" readonly></td>
							<td class="column-3 p-l-20">
								<a style="font-size: 14px; color: black;" href="<?php echo base_url().'Transaksi/deletecart/'.$item['rowid'];?>"><img src="<?php echo base_url()."/assets/";?>images/icons/cancel.png" alt="ICON"></a></td>
						</tr>
						<?php }} ?>
					</table>
					<br>
					<?php $keranjang1=$this->cart->total();?>
					<p style="color: black; text-align: right; margin-right: 10px;" >
					<b> TOTAL : Rp. <span id="total"><?php echo number_format($keranjang1,'0',',',','); ?></span></b>
					</p>
					<br>
				</div>
			</div>
			<br>
				<div class="jumbotron" style="text-align: left; width: 350px;">
					<?php if($this->session->userdata('id_user')){ 
						?>
						<span>Rincian Pembayaran</span>
						<?php $keranjang1=$this->cart->total();?>
						<div class="rs2-select2 bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" placeholder="Pembayaran : Rp..." type="text" name="tunai">
						<!-- <select class="selection-2 select2-hidden-accessible" name="kurir" tabindex="-1" aria-hidden="true">
						<option>JNE</option>
						<option>TIKI</option>
						</select> -->
						</div>
				<div>
						<input type="text" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" hidden>
						<input type="text" name="status_transaksi" value="Selesai" hidden>
					</div></div>
					<button class="flex-c-m size2 bg1 m-text3 w-size25" style="float: right;" type="submit">
								Checkout
							</button>
						<?php }else{
						echo 'Silahkan <a class="button" href="'.base_url().'Akun/login">login</a> terlebih dahulu';
					} ?>
				
				</form>
				<br><br><br><br>
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

		function calculate () {

			var arr = document.getElementsByName('subtotal');
      		var tot=0;
      		const total = $('#total');
        	for(var i=0;i<arr.length;i++){
          	if(parseInt(arr[i].value.replace(/,/g,''), 10))
            tot += parseInt(arr[i].value.replace(/,/g,''), 10);
        	}
           	total.html((tot).toLocaleString());
            //console.log(tot);
         };


		function check(id, price){
			const _attr = id;
			//const cart = parseInt(document.getElementsById('noti').value, 0) + 1;
			const value = parseInt(id.value, 0) + 1;
			const subtotalEl = $('#subtotal-' + id.id);
			//const notilel = $('#noti');
			//const noti1lel = $('#noti1');
			//notilel.html(cart)
			//console.log(cart);
			//$('#total').html("");
			subtotalEl.val(((value * price)).toLocaleString());
			calculate();
			$.post('<?php echo base_url().'Transaksi/updatecart'; ?>', {id : id.id, jumlah : value}, response => {
				$( "#result" ).load(location.href + " #cart-details" );
						      			$( "#result1" ).load(location.href + " #cart-details1" );
			})

		}

		function check2(id, price){
			const _attr = id;
			const value = parseInt(id.value, 0) - 1;
			if (value === 0) return
			const subtotalEl = $('#subtotal-' + id.id);	
			subtotalEl.val(((value * price)).toLocaleString());
			calculate();
			$.post('<?php echo base_url().'Transaksi/updatecart'; ?>', {id : id.id, jumlah : value}, function(responseText){
				$( "#result" ).load(location.href + " #cart-details" );
						      			$( "#result1" ).load(location.href + " #cart-details1" );
			})
		}

	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url()."/assets/";?>js/main.js"></script>

</body>
</html>
