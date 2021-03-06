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
      background:white;
      padding-left:35px;
    }
    a {
      text-decoration:none;
      color:black;
    }
    .direction {
      margin-left:66%;
      font-weight:bold;
      margin-top:30px;
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
    th {
      border-top:1px solid black;
      border-bottom:1px solid black;
      font-size:20px;
    }
    td {
      border-bottom:1px solid black;
    }
    table {
      border-collapse:collapse;
      margin-left:160px;
    }
    .name {
      padding-left:40px;
      padding-top:20px;
    }
    .start {
      padding-left:170px;
      padding-top:20px;
      padding-bottom:20px;
    }
    .end {
      padding-left:170px;
      padding-top:20px;
      padding-bottom:20px;
    }
    .breakstart{
      padding-left:170px;
      padding-top:20px;
      padding-bottom:20px;
    }
    .breakend {
      padding-left:170px;
      padding-top:20px;
      padding-bottom:20px;
    }
    .breakend {
      padding-right:30px;
      padding-top:20px;
      padding-bottom:20px;
    }
    .small_title {
      text-align:center;
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
  <table>
    <div class="infomation">
     <tr>
       <th class="name">名前</th>
       <th class="start">勤務開始</th>
       <th class="end">勤務終了</th>
       <th class="breakstart">休憩時間</th>
       <th class="breakend">勤務時間</th>
     </tr>
    </div>
    <tr>
      <td class="name">小野寺優舞</td>
      <td class="start">10:00:00</td>
      <td class="end">20:00:00</td>
      <td class="breakstart">18:00:00</td>
      <td class="breakend">50::00:00</td>
    </tr>
  </table>
  <div class="small_title">
    <small>Atte,inc</small>
  </div>
</body>

</html>