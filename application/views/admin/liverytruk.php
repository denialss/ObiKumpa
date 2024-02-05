<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Livery</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary py-3">
                    <h6 class="m-0 font-weight-bold text-white">TRUK</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahliverytruk"><i class="bi bi-plus-lg"></i></button>
                            <thead>
                                <tr>
                                    <th>Upload Date</th>
                                    <th>Nama Livery</th>
                                    <th>Nama Mod</th>
                                    <th>Author</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Link Download</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12-01-2023</td>
                                    <td>Rimba Raya 009 by Obi Kumpa</td>
                                    <td>SR3 RM280 by ASXFM</td>
                                    <td>Faridh Madyawan</td>
                                    <td><img src="<?php echo base_url('assets/user/img/sr3rm2803.jpg');?>" width="100px" alt=""></td>
                                    <td>Deskripsi</td>
                                    <td>link</td>
                                    <td>
                                        <button class="btn btn-warning mb-3" type="button" data-toggle="modal" data-target="#editliverytruk"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger mb-3"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Tambah Mod Bus -->
<div class="modal fade" id="tambahliverytruk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Livery Truk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Livery :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Mod :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Author :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label">Gambar Utama :</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label">Screenshot 1 :</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label">Screenshot 2 :</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Deskripsi :</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama File :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Size :</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Link Download:</label>
            <input type="text" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Mod Bus -->
<div class="modal fade" id="editliverytruk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="exampleModalLabel">Update Livery Truk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Livery :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Author :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Deskripsi :</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama File :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Size :</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Link Download:</label>
            <input type="text" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Submit</button>
      </div>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->