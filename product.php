 <?php 
   $queryproduct = $dbh->prepare("SELECT * FROM product ORDER BY pro_id DESC");
   $queryproduct->execute();
   $rsproduct = $queryproduct->fetchAll();

 ?>
 
 <!-- start product -->
 <div class="container mt-1">
                    <div class="row">

                    <?php foreach($rsproduct as $row){ ?>
                        <div class="col-12 col-sm-3">
                            <div class="card" style="width: 100%;">
                                <img src="<?=$row['pro_img'];?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title"><?=$row['pro_name'];?></h5>
                                  <p class="card-text">ราคา <?=$row['pro_price'];?> บาท</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                        <?php } ?>


                        </div>
                    </div>
                  </div>

                     <!-- end product-->