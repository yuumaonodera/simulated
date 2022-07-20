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
    }
    .button-one {
      display:flex;
    }
    .button-two {
      display:flex;
    }
    a {
      text-decoration:none;
      color:black;
    }
    .direction {
      margin-left:60%;
    }
    .small_title {
      background-color:white;
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
  <div class="button-one">
    <button>勤務開始</button>
    <button>勤務終了</button>
  </div>
  <div class="button-two">
    <button>休憩開始</button>
    <button>休憩終了</button>
  </div>
  <div class="small_title">
   <small>Atte,inc</small>
  </div>
</body>

</html>