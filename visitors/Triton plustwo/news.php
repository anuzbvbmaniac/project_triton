<?php 
include('header.php');
?>
<div class="index-content">
    <div class="container">
       <div class="row">
        <?php
        require_once('../../connection.php');
        $query_check = "SELECT * FROM tbl_news WHERE news_level=2";
        $result = $conn->query( $query_check );
        $data = $result->fetch_array();
        if (empty($data)){
            ?>
            <div class="col-lg-4 wow slideInLeft">
                <div class="card">

                    <h4>No News Published.</h4>

                </div>
            </div>
            <?php
        }else{
            $query_check = "SELECT * FROM tbl_news WHERE news_level=2";
            $result = $conn->query( $query_check );
            while($data=$result->fetch_array()){
                ?>
                <div class="col-lg-4 wow slideInLeft">
                    <a ></a>
                    <div class="card">
                        <img src="../../cpanel/newsImage/<?php echo $data['featured_image']?>">
                        <h4><?php echo $data['news_heading']?></h4>
                        <p><?php echo $data['news_content']?></p>
                    </div>
                </div>
                <?php
            }
        }

        ?>	
    </div>
</div>
</div>

<?php 
include('footer.php');
?>