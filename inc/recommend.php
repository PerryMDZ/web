<section id="iq-suggested" class="s-margin">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
            <h4 class="main-title">Maybe you like</h4>
            <a href="#" class="iq-view-all">View All</a>
        </div>
        <div class="favorite-contens">
            <ul class="favorites-slider list-inline row p-0 mb-0">
            <!-- slide item 1 -->
            <?php
                $stmt = $conn->prepare( "SELECT * FROM list_movie ORDER BY RAND() LIMIT 6");
                $stmt->execute();
                $res = $stmt->get_result();
                while($row_movie = mysqli_fetch_assoc($res)){
                    ?>
                    <li class="slide-item">
                        <div class="block-images position-relative">
                        <div class="img-box">
                            <img src="<?php echo $row_movie['img_movie']?>" class="img-fluid" alt="" />
                        </div>
                        <div class="block-description">
                            <h6 class="iq-title">
                            <a href="#"><?php echo $row_movie['name_movie']?></a>
                            </h6>
                            <div class="movie-time d-flex align-items-center my-2">
                            <div class="badge badge-secondary p-1 mr-2">15+</div>
                            <span class="text-white"><?php echo $row_movie['time']?></span>
                            </div>
                            <div class="hover-buttons">
                            <span class="btn btn-hover iq-button" onclick="window.location.href='watch.php?watch=<?php echo $row_movie["id_movie"]?>';">
                                <i class="fa fa-play mr-1"></i>
                                Play Now
                            </span>
                            </div>
                        </div>
                        <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                            <li class="share">
                                <span><i class="fa fa-share-alt"></i></span>
                                <div class="share-box">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                                    <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                                    <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                                </div>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-heart"></i></span>
                                <span class="count-box"><?php echo $row_movie['view']?></span>
                            </li>
                            <li>
                                <span><i class="fa fa-plus"></i></span>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </li>
                
                    <?php
                }
            ?>
            </ul>
        </div>
        </div>
    </div>
    </div>
</section>