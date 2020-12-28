<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data 
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                            <small  class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="attack">Attack</label>
                            <input type="number" name="attack" id="attack" class="form-control">
                            <small  class="form-text text-danger"><?= form_error('attack') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="health">Health</label>
                            <input type="number" name="health" id="health" class="form-control">
                            <small  class="form-text text-danger"><?= form_error('health') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" class="form-control">
                                <option value="Strength">Strength</option>
                                <option value="Intelligence">Intelligence</option>
                                <option value="Agility">Agility</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>