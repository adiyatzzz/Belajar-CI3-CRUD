<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data 
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa["id"] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $mahasiswa["nama"] ?>">
                            <small  class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="attack">Attack</label>
                            <input type="number" name="attack" id="attack" class="form-control" value="<?= $mahasiswa["attack"] ?>">
                            <small  class="form-text text-danger"><?= form_error('attack') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="health">Health</label>
                            <input type="number" name="health" id="health" class="form-control" value="<?= $mahasiswa["hp"] ?>">
                            <small  class="form-text text-danger"><?= form_error('health') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" class="form-control">
                                <?php foreach($role as $r): ?> 
                                    <?php if( $mahasiswa["role"] == $r ): ?>
                                        <option value="<?= $r ?>" selected ><?= $r ?></option>
                                    <?php else: ?>
                                        <option value="<?= $r ?>"><?= $r ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>