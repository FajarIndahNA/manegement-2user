<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" data-toggle="validator">
    <div class="modal-dialog" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <!-- Tombol Close yang akan menutup modal -->
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-3 control-label">Nama User</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" required autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="level" class="col-md-3 control-label">Level</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-cogs"></i>
                                    </span>
                                </div>
                                <select name="level" id="level" class="form-control" required>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control" required minlength="6" placeholder="Masukkan password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-3 control-label">Konfirmasi Password</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required data-match="#password" placeholder="Konfirmasi password">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- Tombol Simpan -->
                    <button class="btn btn-sm btn-flat btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- Tombol Batal yang menutup modal -->
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-bs-dismiss="modal">
                        <i class="fa fa-arrow-circle-left"></i> Batal
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>