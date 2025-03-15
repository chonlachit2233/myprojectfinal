<?php 
if(isset($_GET['pro_id'])){



    $stmtProduct = $dbh->prepare("SELECT * FROM product WHERE pro_id=:id ");
    //bindpram
    $stmtProduct->bindpram(':id', $_GET['pro_id'], PDO::PARAM_INT);
    $stmtProduct->execute();
    $rowProduct = $stmtProduct->fetch(PDO::FETCH_ASSOC);

    //ใว้เช็คว่า อะไรออกมาบ้าง
    // echo '<pre>';
    // print_r($rowProduct);
    // exit;
}

?>





<!-- start product deteil -->
<div class="container mt-1">
            <div class="row">
                <div class="col-12 col-sm-4 mb-2">
                  <img src="imgshushi/shushi2.png" width="100%">
                  <b>ภาพประกอบ</b> <br>

                  <div class="row">
                    <div class="col-6 col-sm-3 mb-2" >
                        <img src="imgshushi/shushi2.png" width="100%">
                    </div>
                    <div class="col-6 col-sm-3 mb-2">
                        <img src="imgshushi/shushi2.png" width="100%">
                    </div>
                    <div class=" col-6 col-sm-3 mb-2">
                        <img src="imgshushi/shushi2.png" width="100%">
                    </div>
                    <div class="col-6 col-sm-3 mb-2">
                        <img src="imgshushi/shushi2.png" width="100%">
                    </div>
                  </div>

                </div>
                <div class="col-12 col-sm-8">
                    <h4>
                        <font color="blue">Product Name </font>
                            <font color="red">Price : 250 บาท</font>
                        </h4>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque quasi rerum dignissimos saepe voluptatum molestias deleniti. Officiis, repudiandae voluptatibus eum dolorum id doloremque. Debitis saepe itaque laborum repudiandae perferendis.
               
                </div>
            </div>
          </div>
          <!-- end product deteil -->
