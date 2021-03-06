<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>

<div class="site-section">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner item-entry">
                        <div class="carousel-item active">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span aria-hidden="true"><i class="fas fa-chevron-left text-black"></i></span>
                        <span class="sr-only text-dark">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <spanaria-hidden="true"><i class="fas fa-chevron-right text-black"></i></span>
                            <span class="sr-only text-dark">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-black">Nombre del producto</h2>
                <div class="star-rating">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                    <span><a href="review.php?id_prod=<?php echo $_GET['id_prod']?>" class="p-3 text-black colora">Reseñas</a></span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum fugiat fuga sit soluta. Expedita possimus illum debitis repellendus, voluptas, quam facere commodi recusandae laborum reiciendis eum labore dignissimos id! Eveniet?</p>
                <!--<p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>-->
                <p><strong class="text-primary h4">$50.00</strong></p>
                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                </div>
                <p>
                    <a type="button" href="#" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Añadir al carro</a>
                </p>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Productos similares</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="item">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="images/model_1.png" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                            <strong class="item-price"><del>$46.00</del> $28.00</strong>
                            <div class="star-rating">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="images/prod_3.png" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                            <strong class="item-price"><del>$46.00</del> $28.00</strong>

                            <div class="star-rating">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="images/model_5.png" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                            <strong class="item-price"><del>$46.00</del> $28.00</strong>

                            <div class="star-rating">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="images/prod_1.png" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                            <strong class="item-price"><del>$46.00</del> $28.00</strong>
                            <div class="star-rating">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="images/model_7.png" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                            <strong class="item-price">$58.00</strong>
                            <div class="star-rating">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../../templates/template.php');
template::footer();
?>