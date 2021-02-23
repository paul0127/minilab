<?php include("header.php") ?>
<?php include("top_menu.php") ?>
    


    <div id="inUnitTag">
    	<div class="bg"><p>Account Home/<span> 會員專區</span></p></div>
    </div>
    <div id="mainContents">
    	<div class="ctns member shop">
        	
            <div class="welcome">
            	<span>歡迎你！ＸＸＸ　會員</span>
                <a class="btnStyleB small" href="member_account.php">帳戶設定</a>
                <a class="jsbtn logout btnStyleC">登出</a>
                <hr>
            </div>
            <div id="breadcrumb">
            	<a href="member.php" class="sbtnStyleA">會員專區</a>
                <span>帳戶設定</span>
            </div>
            
            <h3>會員資料</h3>
            <div class="frombox">
            
            <table border="0" cellpadding="0" cellspacing="0">
            	<tr>
                	<td>會員編號</td>
                	<td>00001234</td>
            	</tr>
            	<tr>
                	<td>暱稱</td>
                	<td><input name="" type="text"></td>
            	</tr>
                <tr>
                	<td>姓名</td>
                	<td><input name="" type="text"></td>
            	</tr>
            	<tr>
                	<td>生日</td>
                	<td><input name="" type="text"></td>
            	</tr>
            	<tr>
                	<td>性別</td>
                	<td>
                        <input type="radio" name="txt_sex" id="txt_sex" value="男" data-bv-field="txt_sex"> 男</label>
                        <input type="radio" name="txt_sex" id="txt_sex1" value="女" data-bv-field="txt_sex">女</label>
                    </td>
            	</tr>
            	<tr>
                	<td>手機號碼</td>
                	<td><input  type="text" name="txt_mobile" disabled="disabled" value="0987654321"></td>
            	</tr>
            	<tr>
                	<td>電子郵件</td>
                	<td><input type="text" name="txt_email" disabled="disabled" value="abc1999@hotmail.com"></td>
            	</tr>
                <tr>
                	<td>綁定facebook</td>
                	<td>未綁定<a class="btnStyleB small jsbtn">進行綁定</a></td>
            	</tr>
            </table>
            </div>
            
            <h3>變更密碼</h3>
            <div class="frombox">
            
            <table border="0" cellpadding="0" cellspacing="0">
            	<tr>
                	<td>輸入舊密碼</td>
                	<td><input name="" type="text"></td>
            	</tr>
            	<tr>
                	<td>輸入新密碼</td>
                	<td><input name="" type="text"></td>
            	</tr>
            	<tr>
                	<td>再次輸入新密碼</td>
                	<td><input name="" type="text"></td>
            	</tr>
            </table>
            </div>
            <div>
            	<a href="member_add.php" class="btnStyleB">確認新增</a>
            </div>
        </div>
    </div>

    
    
<?php include("footer.php") ?>
