<div class="container card border-5 shadow-sm text-dark mb-3 overflow-hidden" data-aos="fade-up" style="width:500px; height:500px; position:middle; margin-top:50px; border-radius:20px;">
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
					<button type="submit" value="submit" class="beli">Submit</button>
				</form>
			</div>
 		</div>
<style>
    .beli{
  background: #3498db;
  width: 50%;
  color: #fff;
  border-radius: 50px;
  border:none;
  margin: 0 0 0 30px;
  padding: 10px 25px;
    }
    .beli:hover{
  background: #57aae1;
  color: #fff;
    }
</style>