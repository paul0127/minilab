<?php include("header.php") ?>
<?php include("top_menu.php") ?>


    <div id="inUnitTag">
    	<div class="bg"><p>Shopping cart/<span> 購物車</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns shop">
        	<div class="shopStep">
            	<span>購物車</span>
                <span>結帳</span>
                <span class="use">完成訂單</span>
                <hr class="centerAlign">
            </div>
            <h3>訂單明細</h3>
            <p class="orderNumber">訂單編號：200227001</p>
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
                    <td><span>1</span></td>
                    <td><span class="price">500</span></td>
                    <td><span class="price">500</span></td>
            	</tr>
                <tr>
                	<td><div class="imgBox" style="background-image:url(pics/pic3.jpg);"></div></td>
                    <td><a class="name" href="product.php">作品名作品名作品名作品名</a><p class="info">IGGY POP/5月發貨</p></td>
                    <td><span>2</span></td>
                    <td><span class="price">500</span></td>
                    <td><span class="price">1000</span></td>
            	</tr>
                <tr>
                	<td class="totalPrice" colspan="5">
                    	送貨至 日本 地區運費：<span class="price">600</span><br>
                        金額合計：<span class="price">2100</span>
                    </td>
                </tr>
            </table>
            <div class="remarks">
            	<p>查詢追蹤訂單，可於會員管理頁面進行查詢。<br>非會員訂單查詢，可於會員登入頁面輸入送貨資料中：電子郵件(帳號)、電話（密碼），登入後進行確認。</p>
            </div>
            <div class="deliveryInfo">
            	<h3>送貨資料</h3>
                <table border="0" cellpadding="0" cellspacing="0" >
                	<tr>
                		<td>收件人：Aron Yang</td>
                		<td>電子郵件：ra_kai@hotmail.com：</td>
            		</tr>
                    <tr>
                		<td>電話號碼：0980412193</td>
                		<td>付款方式：信用卡</td>
            		</tr>
                    <tr>
                		<td colspan="2">送貨地址：123-45台北市內湖區內湖路一段999號</td>
            		</tr>
                </table>
            </div>
            <div>
            	<a class="btnStyleB" href=".">確定</a>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>
