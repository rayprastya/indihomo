<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data User</a></li>
  </ol>
  <h1 class="page-header">Cek Ketersediaan</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <div class="alert alert-warning fade show">
          <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          </button>
          <p></p>
        </div>
        <div class="panel-body">
          <!-- modal -->

          <h4>Cek Ketersediaan Lokasimu disini</h4>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Launch demo modal
        </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!--  -->
                    <div class="col-lg-10 col-md-13" data-aos="fade-up" data-aos-delay="300">
                        <form action="pages/laporan/laporan_proses.php?aksi=insert" method="POST" role="form" class="php-email-form">
                              <div class="form-group">
                                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Kamu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                      <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" data-rule="email" data-msg="Please enter a valid email" />
                                      <div class="validate"></div>
                            </div>
                            <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'];?>">
                            <div class="form-group">
                                  <textarea class="form-control" name="pertanyaan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                  <div class="validate"></div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                </div>
                            </div>   
                        </div>
                            <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                    <!--  -->
                    </form>
                  </div>
                  
                  
                </div>
              </div>
            </div>

          <!-- end modal -->
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id_user;
    }
  }
</script>