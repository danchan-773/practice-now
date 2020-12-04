<doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>ハローワールド</title>
      <link rel="stylesheet" href="practice.css">
    </head>
    <body>
      <form method="post" action="form.php">
        <ul>

          <!--名前を入力-->
          <li>
            <label>名前:<input type="text" name="name"></label>
          </li>
          <!--性別を選択-->
          <li><span>性別：</span>
            <label><input type="radio" name="sex" value="男性">男性</label>
            <label><input type="radio" name="sex" value="女性">女性</label>
          </li>
          <!--身長を入力-->
          <li>
            <label>身長:<input type="number" name="height"></label>
          </li>
          <!--体重を入力-->
          <li>
            <label>体重:<input type="number" name="weight"></label>
          </li>

          <li>
            <input type="submit" value="作成！">
          </li>
      </form>
    </body>
  </html>
