<?php include("header.php") ?>
<?php include("top_menu.php") ?>
    


    <div id="inUnitTag">
    	<div class="bg"><p>Account Home/<span> 會員專區</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns member shop memberIn">
        	
            <div class="welcome">
            	<span>歡迎你！ＸＸＸ　會員</span>
                <a class="btnStyleB small" href="member_account.php">帳戶設定</a>
                <a class="jsbtn logout btnStyleC">登出</a>
                <hr>
            </div>
            <div id="breadcrumb">
            	<a href="member.php" class="sbtnStyleA">會員專區</a>
                <a href="member_order.php" class="sbtnStyleA">所有訂單</a>
                <span>訂單明細</span>
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
            
        </div>
    </div>


    
    
<?php include("footer.php") ?>