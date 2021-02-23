<?php include("header.php") ?>
<?php include("top_menu.php") ?>

    <div id="inUnitTag">
    	<div class="bg"><p>Shopping cart/<span> 購物車</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns shop member">
        	<div class="shopStep">
            	<span class="use">購物車</span>
                <span>結帳</span>
                <span>完成訂單</span>
                <hr class="centerAlign">
            </div>
        	<div class="half">
            	<h3>訪客結帳</h3>
        		<div class="box">
        			<div class="inputTxt">
            			<p class="txt">繼續結帳並同意保存您的詳細信息，以備下次使用。<p>
            		</div>
            		    <a class="btnStyleB" href="shop_step2.php">訪客結帳</a>
            	</div>
            </div>
            <div class="half">
        		<h3>現有會員</h3>
        		<div class="box">
                	<a class="jsbtn mediaLogin btnStyleB fb" href="javascript:void(0);">使用FACEBOOK帳號繼續</a><br>
        			<div class="inputTxt">
            			<span>電子郵件</span><input name="" type="text">
            		</div>
            		<div class="inputTxt">
            			<span>密碼</span><input name="" type="text">
            		</div>
            		<div class="btns">
            		    <a class="btnStyleB" href="shop_step2.php">登入結帳</a>
            		    <br>
            		    <a class="sbtnStyleA" href="forgetsn.php">忘記密碼</a>
            		</div>
            	</div>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>