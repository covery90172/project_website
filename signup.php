<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
	<title>註冊|嘻嘻嘻交易平台</title>
    <script>
$(document).ready(function($) {
	$("#form1").validate({
		submitHandler: function(form) {
        alert("success!");
        form.submit();
    },
		rules:{
			account:{
				required:true,
				minlength:6,
				maxlength:12
			},
			password:{
				required:true,
				minlength:6,
				maxlength:12
			},
			confirm_password:{
				required:true,
				minlength:6,
				equalTo:"#password"
			},
			name:{
				required:true,
			},
			phonenumber:{
				required:true,
				minlength:10,
				maxlength:10
			},
			email:{
				required:true,
				email:true
			},
			nickname:{
				required:true
			},
			gender: {
            	required: true
        	},
        	agree: {
            	required: true
        	},
	},
	messages:{
		account:{
		    required:"帳號為必填欄位",
		    minlength:"帳號最少要6個字",
		    maxlength:"帳號最多為12個字"
		},
		password:{
			required:"密碼為必填欄位",
		    minlength:"密碼最少要6個字",
		    maxlength:"密碼最多為12個字"
		},
		confirm_password:{
			required:"密碼確認為必填欄位",
		    minlength:"密碼最少要6個字",
			equalTo:"與密碼不符"
		},
		name:{
			required:"姓名為必填欄位"
		},
		phonenumber:{
				required:"電話號碼為必填欄位",
				minlength:"格式不合",
				maxlength:"格式不合"
			},
	    email:{
			required:"e-mail為必填欄位",
			email:"格式不合"
		},
		nickname:{
			required:"請輸入暱稱"
		},
		agree:{
			required:"請詳閱合約並勾選同意"
		},
	}
  })
});
  </script>
  <style type="text/css">
.error {
     color:#F00;
     font-family: "微軟正黑體";
     padding: 1px;
}
</style>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<? include 'header.php'; ?>
            <div id="contents">
			<div id="featured">
						<h4><span>Signup</span></h4>
                      
				<div id="text" align="center">
<form id="form1" name="form1" method="post" action="">
<table width="705" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="250" height="40"><div align="center">帳號</div></td>
    <td width="420">&nbsp;&nbsp;
      <label>
        <input type="text" name="account" id="account" placeholder="限填6-12個字"/>
        </label>    </td>
  </tr>
  <tr>
    <td height="40"><div align="center">密碼</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="password" name="password" id="password" placeholder="限填6-12個字"/>
    </label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">密碼確認</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="請再次輸入密碼"/>
    </label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">姓名</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="text" name="name" id="name" placeholder="請輸入您的真實姓名"/>
    </label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">性別</div></td>
    <td><label>
    &nbsp;&nbsp;
      <input type="radio" name="gender" id="gender1" value="radio" />男生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
      <label>
      <input type="radio" name="gender" id="gender2" value="radio2" />女生      </label>
       <label for="gender" class="error"></label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">電話號碼</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="text" name="phonenumber" id="phonenumber" placeholder="請輸入您的手機號碼"/>
    </label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">電子郵件</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="email" name="email" id="email" placeholder="請輸入您的電子信箱"/>
    </label></td>
  </tr>
  <tr>
    <td height="40"><div align="center">暱稱</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="text" name="nickname" id="nickname" placeholder="請輸入您的使用者名稱"/>
    </label></td>
  </tr>
  <tr>
    <td height="100"><div align="center">同意會員合約</div></td>
    <td>&nbsp;&nbsp;
    <label>
    
      <textarea name="textarea" id="textarea" cols="45" rows="5" readonly>哈囉你好嗎</textarea>
    </label></td>
  </tr>
  <tr>
    <td height="40" colspan="2"><label>
      <div align="center">
        <input type="checkbox" name="agree" id="agree" />
        我同意會員合約 <br />
        <label class="error" for="agree"></label><br />
      </div></td>
    </tr>
  <tr>
    <td height="40" colspan="2"><div align="center">
      <button type="submit" class="btn btn-warning">送　出</button>
      　　　　
      <button type="reset" class="btn btn-primary">重　填</button>
    </div></td>
  </tr>
</table>
</form>
</div>
			</div>
            </div>
			<? include 'footer.php'; ?>
		</div>
	</div>
</body>
</html>