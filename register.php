<?php include("header.php") ?>
<?php include("top_menu.php") ?>
    

    <div id="inUnitTag">
    	<div class="bg"><p>Rregister/<span> 註冊會員</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns member">
        	
            <h3>註冊會員</h3>
            <a class="jsbtn mediaLogin btnStyleB fb">使用FACEBOOK帳號註冊</a>
            <div class="or"><span class="centerAlign">或</span><hr class="centerAlign"></div>
            <div class="fromLogin">
            	<div><span>電子郵件：</span><input name="" type="text"></div>
            	<div><span>手機：</span><input name="" type="text"></div>
            	<div><span>密碼：</span><input name="" type="text"></div>
            	<div><span>確認密碼：</span><input name="" type="text"></div>
            </div>
            <div class="statement">
                請閱讀<a class="sbtnStyleA" href="#">會員條款</a>，並且同意遵守條款，<br>
                確認已詳閱商品購買協議並已明瞭有關內容，勾選以同意上述條款以成為會員。<br><br>
                <input name="" type="checkbox" id="check" value="">
                <label for="check">我已詳讀同意會員條款</label>
            </div>
            <div align="center" style="margin:2em 0;">
            	<span style="display: inline-block; background-color: #EEE; padding: 2em 4em;">我不是機器人工具</span>
            </div>
            <a class="btnStyleB" href="signin.php">確認註冊</a><br><br>
            <div align="center">已有帳戶嗎?<a class="sbtnStyleA" href="signin.php">登入</a></div>
            
        </div>
    </div>
    
    
<?php include("footer.php") ?>