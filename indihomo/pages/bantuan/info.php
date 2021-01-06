<div class="container bg-light" style="width:500px; height:500px; position:middle; margin-top:50px; border-radius:20px;">
    			<div class="">
				<form action="pages/bantuan/info_proses.php?aksi=insert" method="POST" role="form">
					<br>
					<h3>Mengisi Ketersediaan</h3>
					<br>
					<div class="form-group">
							<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Contoh form text ...">
					</div>
					<br>
					<div class="form-group">
							<label for="email">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Contoh form text ...">
                    </div>
                    <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'];?>">
					<br>
					<button type="submit" value="submit" class="btn btn-primary">Submit</button>]
				</form>
			</div>
 		</div>
