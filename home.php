<div class="span9">
    <div class="well np">
        <div id="myCarousel" class="carousel slide homCar">
            <div class="">
                <div class="item">
                    <img style="width:700px;height:300px" src="assets/img/logo.png" alt="bootstrap ecommerce templates">
                    <div class="carousel-caption">
                        <h4>Roman Indah UKM</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="well well-small">
        <h3>New Products </h3>
        <hr class="soften" />
        <div class="row-fluid">
            <ul class="thumbnails">

                <?php
                $ambil = $koneksi->query("SELECT * FROM barang ORDER BY kd_barang DESC LIMIT 3 ");
                while ($pecah = $ambil->fetch_assoc()) {
                ?>
                    <li class="span4">
                        <div class="thumbnail">
                            <a href="index.php?page=detail&idbarang=<?php echo $pecah['kd_barang'] ?>" class="overlay"></a>
                            <a class="zoomTool" href="index.php?page=detail&idbarang=<?php echo $pecah['kd_barang'] ?>" title="Detail"><span class="icon-search"></span> Detail</a>
                            <a href="index.php?page=detail&idbarang=<?php echo $pecah['kd_barang'] ?>">
                                <img style="width:100%; height: 230px" src="admin/assets/images/<?php echo $pecah['gambar'] ?>" alt="">
                            </a>
                            <div class="caption cntr">
                                <p><?php echo $pecah['nm_barang'] ?></p>
                                <p><strong>Rp. <?php echo number_format($pecah['harga']) ?></strong></p>
                                <h4>
                                    <?php
                                    if ($pecah['stok'] == 0) {
                                    ?>
                                        <a disabled type="submit" class="defaultBtn"><span class="icon-ban-circle"></span>
                                            Stok Tidak Tersedia</a>
                                    <?php } else { ?>
                                        <a href="index.php?page=beli&kd_barang=<?php echo $pecah['kd_barang'] ?>" type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span>
                                            Tambah Ke Keranjang</a>
                                    <?php } ?>

                                </h4>
                                <div class="actionList">
                                    <p>
                                        <span style="font-size:10px" class="pull-left">Stok : <?php echo $pecah['stok'] ?></span>
                                        <!-- <span style="font-size:10px" class=" pull-right"> Add to Compare </span> -->
                                    </p>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</div>