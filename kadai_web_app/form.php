<!DOCTYPE html>
<html>

<head>
  <title>社員情報入力フォームを作成しよう</title>
  <meta charset="utf-8">
</head>

<body>
  <h1>社員情報入力フォーム</h1>
 <form action="confirm.php" method="post">

  <label>社員名</label>
  <input type="text" name="employee_name">
  <br>

  <label>年齢</label>
  <input type="text" name="employee_age">
  <br>

  <label>所属部署</label>
  <select name="department">
    <option value="開発部">開発部</option>
    <option value="営業部">営業部</option>
    <option value="人事部">人事部</option>
  </select>
  <br>

  <input type="submit" value="送信">


</form>
</body>

</html>
  