<?php 
	//load file layout
$this->layout = "Mvc/Frontend/Views/Layout_trangtrong.php";
?>
<div class="row product_item_inner">
    <?php foreach ($data as $rows): ?>
        <div class="col-lg-4 col-md-4 col-6">
            <div class="cake_feature_item">
                <a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>">
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
                    <a href="index.php?controller=Product&action=detail&id=<?php echo $rows->id; ?>"><h3><?php echo $rows->name; ?></h3></a>
                    <a class="pest_btn" href="index.php?controller=Cart&action=add&id=<?php echo $rows->id; ?>">Thêm Vào Giỏ</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
