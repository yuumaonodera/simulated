<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simule</title>
</head>

<body style="margin:0px;">
  <style>
    body {
      background-color:whitesmoke;
    }
    h1 {
      margin:0px;
    }
    .title {
      background-color:white;
      padding-top:14px;
      padding-bottom:14px;
      padding-left:35px;
    }
    .small_title {
      background-color:white;
    }
    p {
      margin:0px;
    }
    .sub-title {
      text-align:center;
      margin-top:50px;
    }
    .name {
      text-align:center;
    }
    .meal {
      text-align:center;
    }
    .password {
      text-align:center;
    }
    .check {
      text-align:center;
    }
    .register {
      text-align:center;
      margin-top:18px;
    }
    .small {
      text-align:center;
      font-size:13px;
      margin-top:18px;
    }
    .login {
      text-align:center;
      margin-bottom:12%;
    }
    .small_title {
      text-align:center;
      margin-top:322px;
    }
    .member {
      padding-left:147px;
      padding-right:147px;
      background-color:blue;
      color:white;
      border:none;
      border-radius:4px;
      padding-top:8px;
      padding-bottom:8px;
    }
    input {
      height:35px;
      border-radius:4px;
      border:1px solid gray;
      margin-top:18px;
    }
    a {
      text-decoration:none;
    }
  </style>
  <div class="title">
    <h1>Atte</h1>
  </div>
  <div class="sub-title">
    <h2>会員登録</h2>
  </div>
  <form action="/login" method="POST">
    @csrf
   <div class="name">
     <input type="text" placeholder="名前" name="name" size="45px">
   </div>
   <div class="meal">
     <input type="text" name="email" placeholder="メールアドレス" size="45px">
   </div>
   <div class="password">
     <input type="text" name="password" placeholder="パスワード" size="45px">
   </div>
   <div class="check">
     <input type="text" name="check" placeholder="確認用パスワード" size="45px">
   </div>
   <div class="register">
     <input type="submit" value="会員登録">
   </div>
   <div class="small">
     <p>アカウントをお持ちの方はこちらから</p>
   </div>
   <div class="login">
     <a href="/login">ログイン</a>
   </div>
  </form>
  <div class="small_title">
    <small>Atte,inc</small>
  </div>
</body>

</html>