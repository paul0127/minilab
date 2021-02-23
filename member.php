<?php include("header.php") ?>
<?php include("top_menu.php") ?>
    


    <div id="inUnitTag">
    	<div class="bg"><p>Account Home/<span> 會員專區</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns member">
        	
            <div class="welcome">
            	<span>歡迎你！ＸＸＸ　會員</span>
                <a class="btnStyleB small" href="member_account.php">帳戶設定</a>
                <a class="jsbtn logout btnStyleC">登出</a>
                <hr>
            </div>
            <a href="creator_member.php" class="creatorHome btnStyleB">創作者專區</a>
            <hr>
            <ul class="memberFunction">
            	<li><a href="member_order.php">所有訂單</a></li>
                <li><a href="member_add.php">地址管理</a></li>
                <li><a href="member_favorites.php">我的收藏</a></li>
                <li><a href="member_favcreator.php">追蹤創作者</a></li>
                <hr>
            </ul>
            
            <h3>您30天內已購買</h3>
            <table border="0" cellpadding="0" cellspacing="0" class="productForm">
            	<tbody><tr>
                	<td></td>
                	<td>產品描述</td>
                    <td>數量</td>
                    <td>單價</td>
                    <td>合計</td>
                    <td>訂購日期</td>
                    <td>訂單狀態</td>
            	</tr>
                <tr>
                	<td><div class="imgBox" style="background-image:url(pics/pic4.jpg);"></div></td>
                    <td><a class="name" href="product.php">作品名作品名作品名作品名</a><p class="info">IGGY POP/5月發貨</p></td>
                    <td>1</td>
                    <td class="price">500</td>
                    <td class="price">500</td>
                    <td>2020.12.31</td>
                    <td class="status">預購中<br><a href="member_order_details.php" class="sbtnStyleA">查看訂單明細</a></td>
            	</tr>
                <tr>
                	<td><div class="imgBox" style="background-image:url(pics/pic3.jpg);"></div></td>
                    <td><a class="name" href="product.php">作品名作品名作品名作品名</a><p class="info">IGGY POP/5月發貨</p></td>
                    <td>2</td>
                    <td class="price">500</td>
                    <td class="price">1000</td>
                    <td>2020.12.31</td>
                    <td class="status">截止預定製作中<br><a href="member_order_details.php" class="sbtnStyleA">查看訂單明細</a></td>
            	</tr>
            </tbody></table>
            
            <br><br>
            <h3>推薦作品</h3>
            <ul class="creationBox quarter">        	
        	<li class="contentsList typeH">
            	<a href="product.php">
            	<div class="photo">
        		<img src="pics/pic2.jpg" class="centerAlign">
                </div>
        		<div class="like">9999</div>
        		<div class="timer">30 days</div>
                <div class="info">
                	<h2>NAME 作品名稱 NAME 作品名稱 NAME 作品名稱</h2>
                    <h3>By abcde 壹貳參</h3>
                </div>
                </a>
        	</li>
        	<li class="contentsList typeH">
            	<a href="product.php">
            	<div class="photo">
        		<img src="pics/pic3.jpg" class="centerAlign">
                </div>
        		<div class="like">9999</div>
        		<div class="timer">30 days</div>
                <div class="info">
                	<h2>NAME 作品名稱 NAME 作品名稱 NAME 作品名稱</h2>
                    <h3>By abcde 壹貳參</h3>
                </div>
        		</a>
        	</li>
        	<li class="contentsList typeH">
            	<a href="product.php">
            	<div class="photo">
        		<img src="pics/pic4.jpg" class="centerAlign">
                </div>
        		<div class="like">9999</div>
        		<div class="timer">30 days</div>
                <div class="info">
                	<h2>NAME 作品名稱 NAME 作品名稱 NAME 作品名稱</h2>
                    <h3>By abcde 壹貳參</h3>
                </div>
                </a>
        	</li>
            <li class="contentsList typeH">
            	<a href="product.php">
            	<div class="photo">
        		<img src="pics/pic3.jpg" class="centerAlign">
                </div>
        		<div class="like">9999</div>
        		<div class="timer">30 days</div>
                <div class="info">
                	<h2>NAME 作品名稱 NAME 作品名稱 NAME 作品名稱</h2>
                    <h3>By abcde 壹貳參</h3>
                </div>
        		</a>
        	</li>
            </ul>
            <hr>
            
        </div>
    </div>


    
    
<?php include("footer.php") ?>