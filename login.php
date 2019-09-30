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
	<title>登入|嘻嘻嘻交易平台</title>
    <script>
$(document).ready(function($) {
	$("#form1").validate({
		submitHandler: function(form) {
        form.submit();
    },
		rules:{
			account:{
				required:true,
			},
			password:{
				required:true,
			},
	},
	messages:{
		account:{
		    required:"請輸入帳號"
		},
		password:{
			required:"請輸入密碼"
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
						<h4><span>Login</span></h4>
                      
				<div id="text" align="center">
<form id="form1" name="form1" method="post" action="">
<table width="705" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="250" height="40"><div align="center">帳號</div></td>
    <td width="420">&nbsp;&nbsp;
      <label>
        <input type="text" name="account" id="account"/>
        </label>    </td>
  </tr>
  <tr>
    <td height="40"><div align="center">密碼</div></td>
    <td>&nbsp;&nbsp;
    <label>
      <input type="password" name="password" id="password"/>
    </label></td>
  </tr>
  <tr>
    <td height="40" colspan="2"><div align="center">
      <button type="submit" class="btn btn-primary">登　入</button>
      　　　　
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