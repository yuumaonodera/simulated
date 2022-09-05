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
    .title {
      display:flex;
      background-color:white;
      padding-top:12px;
      padding-bottom:12px;
      padding-left:35px;
    }
    a {
      text-decoration:none;
      color:black;
    }
    .direction {
      margin-left:66%;
      margin-top:30px;
      font-weight:bold;
    }
    .date {
      margin-left:50px;
    }
    .login {
      margin-left:50px;
    }
    .small_title {
      background-color:white;
    }
    .small_title {
      text-align:center;
    }
    .button-one {
      display:flex;
    }
    .button-two {
      display:flex;
    }
    .name {
      text-align:center;
      margin-top:30px;
      margin-bottom:30px;
    }
    .end {
      width:400px;
      height:200px;
      margin-left:100px;
    }
    .start {
      width:400px;
      height:200px;
      margin-left:300px;
      margin-bottom:50px;
    }
    .breaktime_start {
      width:400px;
      height:200px;
      margin-left:300px;
    }
    .breaktime_end {
      width:400px;
      height:200px;
      margin-left:100px;
    }
  </style>
  <div class="title">
    <h1>Atte</h1>
    <div class="direction">
       <a href="/stamp" class="stamp">ホーム</a>
       <a href="/date" class="date">日付一覧</a>
       <a href="/login" class="login">ログアウト</a>
    </div>
  </div>
  <div class="name">
     <h2><?php $user = Auth::user(); ?>{{ $user->name}}さんお疲れ様です</h2>
  </div>
   <div class="button-one">
    <form action="/punchIn" method="GET">
      @csrf
      <input type="submit" value="勤務開始" class="start">
    </form>
    <form action="/punchOut" method="POST">
      @csrf
      <input type="submit" value="勤務終了" class="end">
    </form>
   </div>
   <div class="button-two">
    <form action="/startRest" method="GET">
      @csrf
      <input type="submit" value="休憩開始" class="breaktime_start">
    </form>
    <form action="/endRest" method="POST">
      @csrf
      <input type="submit" value="休憩終了" class="breaktime_end">
    </form>
   </div>
  <div class="small_title">
   <small>Atte,inc</small>
  </div>
</body>

</html