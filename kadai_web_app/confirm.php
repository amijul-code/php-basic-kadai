<?php
 print_r($_POST);
 echo $_POST['employee_name'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>社員情報入力フォームを作成しよう</title>
  <meta charset="utf-8">
</head>

<body>
  <h1>入力内容をご確認ください。</h1>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックして下さい。</p>

  <form action="complete.php" method="post">

<label>社員名</label>　<?php echo $_POST['employee_name'];?>
<br>

<label>年齢</label>　<?php echo $_POST['employee_age'];?>
<br>

<label>所属部署</label>　<?php echo $_POST['department'];?>
<br>

<input type="hidden" name="employee_name" value="<?php echo $_POST['employee_name'];?>">
<input type="hidden" name="employee_age" value="<?php echo $_POST['employee_age'];?>">
<input type="hidden" name="department" value="<?php echo $_POST['department'];?>">

<input type="submit" value="確定">
<input type="button" value="キャンセル" onclick="history.back()">

</form>

</body>

</html>