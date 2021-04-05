
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

            <div class="row text-center mt-3">

        <?php foreach ($result as $hasil_search) : ?>

             <div class="card ml-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$hasil_search['gambar']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1 font-weight-bold"><?php echo $hasil_search['nama_brg']?></h5>
                        <small><?php echo $hasil_search['keterangan']?></small><br>
                        <span class="badge badge-pill badge-primary mb-3">Rp. <?php echo number_format($hasil_search['harga']), 0,',','.'?></span>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' .$hasil_search['id_brg'],'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>')?>
                        <?php echo anchor('dashboard/detail/' .$hasil_search['id_brg'],'<div class="btn btn-sm btn-success">Detail</div>')?>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>
 </div>
