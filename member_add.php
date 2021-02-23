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
            <div id="breadcrumb">
            	<a href="member.php" class="sbtnStyleA">會員專區</a>
                <span>地址管理</span>
            </div>
            
            <h3>收件地址</h3>
           	<ul class="addList">
            	<li class="preset">
                	<p>王 曉明</p>
                    <p>0987654321</p>
                    <p>三重路19-11號E棟3樓</p>
                    <p>南港區 台北市 115 台灣</p>
                    <span>V 預設收件地址</span>
                    <a class="jsbtn dlt">X</a>
                </li>
                <li>
                	<p>王 曉明</p>
                    <p>0987654321</p>
                    <p>三重路19-11號E棟3樓</p>
                    <p>南港區 台北市 115 台灣</p>
                    <span><input name="" type="checkbox" value=""> 設為預設地址</span>
                    <a class="jsbtn dlt">X</a>
                </li>
                <li>
                	<p>王 曉明</p>
                    <p>0987654321</p>
                    <p>三重路19-11號E棟3樓</p>
                    <p>南港區 台北市 115 台灣</p>
                    <span><input name="" type="checkbox" value=""> 設為預設地址</span>
                    <a class="jsbtn dlt">X</a>
                </li>
                <li>
                	<a href="member_add_details.php" class="new">＋新增收件地址</a>
                </li>
                <hr>
            </ul>
            
        </div>
    </div>
    
<?php include("footer.php") ?>
