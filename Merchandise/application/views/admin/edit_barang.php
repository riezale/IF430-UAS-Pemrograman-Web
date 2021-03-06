<div class="container-fluid">
    <h5 class="font-weight-bold text-dark"><i class="far fa-edit mt-2"></i> Edit Data Barang</h5>
        <?php foreach($barang as $brg) : ?>
            <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">

            <div class="for-group mt-4">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="for-group mt-2">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="for-group mt-2">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group mt-2">
                <label>Stock</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-md mt-4"> Simpan </button>

            </form>
        <?php endforeach; ?>
</div>