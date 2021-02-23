<?php include("header.php") ?>
<?php include("top_menu.php") ?>

    <div id="inUnitTag" class="creator">
    	<div class="bg"><p>Creator Home/<span> 創作者專區</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns member creator">
        	
            <div class="welcome">
            	<span>歡迎你！ＸＸＸ　會員</span>
                <a class="btnStyleB small" href="member_account.php">帳戶設定</a>
                <a class="jsbtn logout btnStyleC">登出</a>
                <hr>
            </div>
            
            <div id="breadcrumb">
            	<a href="creator_member.php" class="sbtnStyleA">創作者專區</a>
                <a href="creator_product_on.php" class="sbtnStyleA">創作品管理</a>
                <span>內容管理</span>
            </div>
            
            <div><a class="btnStyleC">確認作品預購績效</a>　　<a class="btnStyleC">下載訂購人資料明細</a></div>
            
            
            <!------step製作中------>
            <div class="remarks blu">
            	<p>預購已結束，商品已進入製作階段，請確定依照生產方式描述進行製作並於指定出貨月份以前完成生產</p>
                <a class="btnStyleC jsbtn">已完成製作，開始進行商品寄送</a>
            </div>
            <div class="creatStep">
            	<span class="use">製作中</span>
                <span>發貨中</span>
                <span>完成訂單</span>
                <hr class="centerAlign">
            </div>
            
            <!------step發貨中------>
            <div class="remarks blu">
            	<p>商品寄送進行中……</p>
                <a class="btnStyleC jsbtn">確認已完成商品寄送</a>
            </div>
            <div class="creatStep">
            	<span class="complete">製作中</span>
                <span class="use">發貨中</span>
                <span>完成訂單</span>
                <hr class="centerAlign">
            </div>
            
            <!------step完成訂單------>
            <div class="remarks blu">
            	<p>進入保固階段，請多留意商品提問留言</p>
            </div>
            <div class="creatStep">
            	<span class="complete">製作中</span>
                <span class="complete">發貨中</span>
                <span class="use">完成訂單</span>
                <hr class="centerAlign">
            </div>
            <!-----stepEND------>
            
            <h3>作品資料</h3>
            <div class="newEdit">
                <div>
                   	<h4>圖片上傳</h4>
                   	<p>最多可上傳 9 個檔案 圖片規格說明：檔案格式限 jpg、jpeg、png 檔案大小限 5mb 以內。</p>
                    <div class="picBox">
                    	<span class="upPic"><img src="pics/pic1.jpg"></span>
                    	<span class="upPic"><img src="pics/pic2.jpg"></span>
                    	<span class="upPic"><img src="pics/pic3.jpg"></span>
                    	<span class="upPic"><img src="pics/pic4.jpg"></span>
                    	<span class="upPic"><img src="pics/pic5.jpg"></span>
                        <span class="upPic"><img src="pics/pic2.jpg"></span>
                    	<span class="upPic"><img src="pics/pic3.jpg"></span>
                    	<span class="upPic"><img src="pics/pic4.jpg"></span>
                    	<span class="upPic"><img src="pics/pic5.jpg"></span>
                    </div>
                </div>
                <div class="half">
                	<h4>作品名稱</h4>
                   	<input name="" type="text" placeholder="不超過20個字元，包含標點符號。" value="作品名稱作品名稱" disabled=>
                </div>
                <div class="half">
                	<h4>預定售價</h4>
                   	<input name="" type="text" placeholder="輸入數字" value="1000" disabled>
                </div>
                <hr>
                <div class="quarter">
                	<h4>生產總數量</h4>
                   	<input name="" type="text" placeholder="輸入數字" value="100" disabled>
                </div>
                <div class="quarter">
                	<h4>發送月份</h4>
                   	<input name="" type="text" placeholder="輸入數字" value="1" disabled=>
                </div>
                <div class="quarter">
                	<h4>開放預購日</h4>
                   	<input name="" type="text" placeholder="yyyy-mm-dd" value="2020-12-21" disabled>
                </div>
                <div class="quarter">
                	<h4>截止預購日</h4>
                   	<input name="" type="text" placeholder="yyyy-mm-dd" value="2021-02-21" disabled>
                </div>
                <hr>
                <div>
                   	<h4>生產方式</h4>
                   	<p>請說明預計生產的流程方式。如不了解生產方式或程序，請在內容留下需要協助訊息。說明內容不超過300個字元。</p>
                   	<textarea name="" cols="" rows="" placeholder="輸入文字" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明</textarea>
                </div>
                <div>
                	<h4>商品描述</h4>
                   	<p>內容圖文說明</p>
                   	<div style=" padding:1em; border:1px #AAA solid;">HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器HTML編輯器</div>
                </div>
                <div>
                	<h4>常見問答編輯</h4>
                   	<table border="0" cellpadding="0" cellspacing="0" class="commonFaqEdit">
                    	<tr>
                        	<td>序號</td>
                        	<td>問題</td>
                            <td>答案</td>
                        </tr>
                        <tr>
                        	<td>1</td>
                        	<td><textarea name="" cols="" rows="" placeholder="輸入問題" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫</textarea></td>
                            <td><textarea name="" cols="" rows="" placeholder="輸入答案" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明</textarea></td>
                        </tr>
                        <tr>
                        	<td>2</td>
                        	<td><textarea name="" cols="" rows="" placeholder="輸入問題" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫</textarea></td>
                            <td><textarea name="" cols="" rows="" placeholder="輸入答案" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明</textarea></td>
                        </tr>
                        <tr>
                        	<td>3</td>
                        	<td><textarea name="" cols="" rows="" placeholder="輸入問題" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫</textarea></td>
                            <td><textarea name="" cols="" rows="" placeholder="輸入答案" disabled>填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明填寫說明</textarea></td>
                        </tr>
                    </table>
                    <hr>
                </div> 
                 
            </div>
            <div>產品已審核完成，需要再次調整內容，請使用留言功能與站台管理人聯繫，謝謝。</div> 
        </div>
    </div>

<?php include("footer.php") ?>