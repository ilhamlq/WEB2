<?php foreach ($isi_berita as $dt): ?>
                    
                <h2>
                    <a href="#"><?php echo $dt['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i><?php echo $dt['tanggal'] ?></p>
                <hr>
                
                <hr>
                <p><?php echo $dt['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <?php endforeach ?>