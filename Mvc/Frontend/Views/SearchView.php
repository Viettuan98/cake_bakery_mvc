<?php 
	//load file layout
$this->layout = "Mvc/Frontend/Views/Layout_trangtrong.php";
?>
<div class="row product_item_inner">
    <?php foreach ($data as $rows): ?>
        <div class="col-lg-4 col-md-4 col-6">
            <div class="cake_feature_item">
                <a href="Product/Detail/<?php echo $rows->id; ?>/<?php echo $this->removeUnicode($rows->name); ?>">
                    <div class="cake_img">
                       <img height="226px;" src="Assets/Upload/Products/<?php echo $rows->image; ?>" alt="">
                   </div>
               </a>
               <?php if ($rows->promotion_price != 0): ?>
                 <div class="ribbon-wrapper" style="top: 0px;right: 14px;"><div class="ribbon sale">Sale</div></div>
             <?php endif ?>
             <div class="cake_text">
                <h4 class="animated flash" style="font-size:22px;width: 250px; height: 70px; border-radius:40%;" >
                    <?php if ($rows->promotion_price==0): ?>
                        <span><?php echo number_format($rows->unit_price); ?></span><span>Vnđ</span>
                        <?php else: ?>
                            <del><?php echo number_format($rows->unit_price); ?></del>
                            <span><?php echo number_format($rows->promotion_price); ?></span><span>Vnđ</span>
                        <?php endif ?>
                    </h4>
                    <a href="Product/Detail/<?php echo $rows->id; ?>/<?php echo $this->removeUnicode($rows->name); ?>"><h3><?php echo $rows->name; ?></h3></a>
                    <a class="pest_btn" href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>">Thêm Vào Giỏ</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="product_pagination">
    <div class="left_btn">
        <a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
    </div>
    <div class="middle_list">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                 $key = isset($_GET["key"])?$_GET["key"]:"";
                 for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item active"><a class="page-link" href="index.php?controller=Search&key=<?php echo $key; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>

            <?php endfor; ?>
        </ul>
    </nav>
</div>
<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
</div>