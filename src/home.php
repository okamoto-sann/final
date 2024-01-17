<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>仮</title>
    </head>
    <body>
  <form action="UTIAGE.php" method="post" enctype="multipart/form-data" >
      <input type="file" name="test" onchange="previewFile(this);" required>
      <input type="submit" value="送信する">

  </form>
  <p>プレビュー</p>
  <img id="preview">
</body>
</html>