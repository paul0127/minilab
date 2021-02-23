<?php include("header.php") ?>
<?php include("top_menu.php") ?>

    <div id="inUnitTag">
    	<div class="bg"><p>Shopping cart/<span> 購物車</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns shop">
        	<div class="shopStep">
            	<span class="use">購物車</span>
                <span>結帳</span>
                <span>完成訂單</span>
                <hr class="centerAlign">
            </div>
            <a class="btnStyleB shopmore" href=".">繼續購物</a>
            <table border="0" cellpadding="0" cellspacing="0" class="productForm">
            	<tr>
                	<td></td>
                	<td>產品描述</td>
                    <td>數量</td>
                    <td>單價</td>
                    <td>合計</td>
            	</tr>
                <tr>
                	<td><div class="imgBox" style="background-image:url(pics/pic4.jpg);"></div></td>
                    <td><a class="name" href="product.php">作品名作品名作品名作品名</a><p class="info">IGGY POP/5月發貨</p></td>
                    <td>1</td>
                    <td class="price">500</td>
                    <td class="price">500</td>
            	</tr>
                <tr>
                	<td><div class="imgBox" style="background-image:url(pics/pic3.jpg);"></div></td>
                    <td><a class="name" href="product.php">作品名作品名作品名作品名</a><p class="info">IGGY POP/5月發貨</p></td>
                    <td>2</td>
                    <td>500</td>
                    <td>1000</td>
            	</tr>
                <tr>
                	<td class="totalPrice" colspan="5">金額合計：<span class="price">1500</span></td>
                </tr>
            </table>
            <a class="btnStyleB" href="signin_shop.php">確認購買</a>
        </div>
    </div>

<?php include("footer.php") ?>
