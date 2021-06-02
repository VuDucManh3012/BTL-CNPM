<div class="products container">
    <h3>Sản phẩm mới</h3>
    <div class="product-list row">
        <?php 
            $sql = "SELECT * FROM product WHERE prd_featured = '0' ORDER BY prd_id DESC LIMIT 6";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
            <div class="product-item card text-center">
            <span class="badge badge-danger"> NEW </span>
                <a href="index.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>"><img src="admin/images/<?php echo $row['prd_image']; ?>" width="150" height="200"></a>
                <h4><a href="index.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>"><?php echo $row['prd_name']; ?></a></h4>
                <p>Giá bán: <span><?php echo number_format( $row['prd_price'] ); ?> đ</span></p>
            </div>
        </div>
        
        <?php        
            }
        ?>
    </div>
</div>
