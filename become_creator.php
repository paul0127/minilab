<?php include("header.php") ?>
<?php include("top_menu.php") ?>
    <div id="inBanner" class="about">
		<img src="imgs/img1.jpg" class="centerAlign" style="height: auto; width: 100%; opacity: 0.95;">
    	<p class="title">JOIN US!!</p>
    </div>
    <div id="inUnitTag">
    	<div class="bg"><p>Recruiting creators/<span> 募集創作者</span></p></div>
    </div>
    
    <div id="mainContents">
    	<div class="ctns member creator">
            
            <h3>更新會員基本資料</h3>
            <div class="frombox">
            	<div style="color:#369">[<strong style="color:#C00"> * </strong>]為必填資訊欄位</div>
            	<table border="0" cellpadding="0" cellspacing="0" class="joinCreator">
            	<tr>
                	<td>會員編號</td>
                	<td>00001234</td>
            	</tr>
            	<tr>
                	<td>暱稱</td>
                	<td><input name="" type="text" placeholder="輸入文字"></td>
            	</tr>
                <tr>
                	<td class="start">姓名</td>
                	<td><input name="" type="text" placeholder="您的真實姓名"></td>
            	</tr>
            	<tr>
                	<td class="start">生日</td>
                	<td><input name="" type="text"  placeholder="出生日期"></td>
            	</tr>
            	<tr>
                	<td class="start">性別</td>
                	<td>
                        <input type="radio" name="txt_sex" id="txt_sex" value="男" data-bv-field="txt_sex"> 男
                        <input type="radio" name="txt_sex" id="txt_sex" value="女" data-bv-field="txt_sex">女
                    </td>
            	</tr>
            	<tr>
                	<td class="start">手機號碼</td>
                	<td><input type="text" name="txt_mobile" disabled="disabled" value="0987654321"></td>
            	</tr>
            	<tr>
                	<td>電子郵件</td>
                	<td><input type="text" name="txt_email" disabled="disabled" value="abc1999@hotmail.com"></td>
            	</tr>
                <tr>
                	<td>綁定facebook</td>
                	<td>未綁定<a class="btnStyleB small jsbtn" href="javascript:void(0);">進行綁定</a></td>
            	</tr>
            	</table>
            </div>
            <h3>撥款帳戶及其他資料</h3>
            <div class="frombox">
            	<div style="color:#369">[<strong style="color:#C00"> * </strong>]為必填資訊欄位</div>
            	<table border="0" cellpadding="0" cellspacing="0" class="joinCreator">
                	<tr>
                		<td class="start">品牌身分</td>
                		<td colspan="2">
                        	<input type="radio" name="txt_identity" id="txt_identity" value="個人" data-bv-field="txt_identity">個人
                        	<input type="radio" name="txt_identity" id="txt_identity" value="公司" data-bv-field="txt_identity">公司
                    	</td>
            		</tr>
            		<tr>
                		<td class="start">銀行帳戶名稱</td>
                		<td colspan="2"><input name="" type="text"  placeholder="輸入文字"><br><b>※如為個人品牌身分，請輸入與會員姓名相同帳戶</b></td>
            		</tr>
                    <tr>
                		<td class="start">銀行帳戶號碼</td>
                		<td colspan="2"><input name="" type="text"  placeholder="輸入數字"></td>
            		</tr>
                    <tr>
                		<td class="start">銀行名稱及代碼</td>
                		<td><input name="" type="text"  placeholder="銀行名稱"></td>
                		<td><input name="" type="text"  placeholder="銀行代碼"></td>
            		</tr>
                    <tr>
                		<td class="start">分行名稱及代碼</td>
                		<td><input name="" type="text"  placeholder="分行名稱"></td>
                		<td><input name="" type="text"  placeholder="分行代碼"></td>
            		</tr>
                    
            		<tr>
                		<td class="start">身分證號/公司統號</td>
                		<td colspan="2"><input name="" type="text" placeholder="輸入數字"></td>
            		</tr>
                	<tr>
                		<td class="start">個人地址/公司地址</td>
                		<td colspan="2"><input name="" type="text"  placeholder="輸入文字"></td>
            		</tr>
                    <tr>
                		<td>公司電話</td>
                		<td colspan="2"><input name="" type="text"  placeholder="輸入數字"><br><b>※個人品牌身分免填寫</b></td>
            		</tr>
                    <tr>
                		<td>個人職稱</td>
                		<td colspan="2"><input name="" type="text"  placeholder="輸入數字"><br><b>※個人品牌身分免填寫</b></td>
            		</tr>                
            	</table>
            </div>
            <div>
            	<a href="become_confirm.php" class="btnStyleB">完成填寫</a>
            </div>
            
        </div>
    </div>
    
<?php include("footer.php") ?>