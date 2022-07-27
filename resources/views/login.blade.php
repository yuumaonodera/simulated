<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simuleted</title>
</head>

<body style="margin:0px;">
  <style>
    body {
      background-color:whitesmoke;
    }
    .title {
      background-color:white;
    }
    h1 {
      margin:0px;
      padding-top:13px;
      padding-bottom:13px;
      padding-left:35px;
    }
    .small_title {
      background-color:white;
      text-align:center;
      margin-top:184px;
    }
    p {
      margin:0px;
    }
    .meal {
      text-align:center;
      margin-top:10px;
    }
    .password {
      text-align:center;
      margin-top:20px;
    }
    .login {
      text-align:center;
      margin-top:18px;
    }
    .no {
      text-align:center;
      font-size:13px;
      margin-top:9px;
      margin-bottom:0px;
    }
    .register {
      text-align:center;
      margin-bottom:462px;
    }
    h3 {
      text-align:center;
      margin-top:60px;
    }
    .who{
      text-align:center;
      width:350px;
      background-color:blue;
      color:white;
      margin-top:20px;
      margin-bottom:250px;
    }
    .hu {
      text-decoration:none;
      color:white;
    }
    input {
      height:35px;
      border-radius:4px;
      border:1px solid gray;
    }
    a {
      text-decoration:none;
      text-align:center;
    }
    .login {
      text-align:center;
    }
    .push {
      text-align:center;
    }
  </style>
  <div class="title">
    <h1>Atte</h1>
  </div>
  <form action="{ route('LoginController@checkUser')}" method="POST">
    @csrf
    <div class="subtitle">
      <h3>ログイン</h3>
    </div>
    <div class="meal">
      <input type="text" name="email" placeholder="メールアドレス" size="45px">
    </div>
    <div class="password">
      <input type="text" name="password" placeholder="パスワード" size="45px">
   </div>
   <div class="no">
    <h4>アカウントをお持ちでない方はこちらからお願い</h4>
   </div>
   <div class="login">
    <a href="/register">会員登録</a>
   </div>
   <div class="push">
    <input type="submit" value="ログイン" class="who">
   </div>
   <div class="small_title">
    <small>Atte,inc</small>
   </div>
  </form>
</html>