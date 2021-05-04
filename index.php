<h3>Single upload</h3>
<form method="post" action="./core/upload.php" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>

<h3>Multi upload</h3>
<form method="post" action="./core/multiupload.php" enctype="multipart/form-data">
    <input type="file" name="images[]">
    <input type="file" name="images[]">
    <button type="submit">Upload</button>
</form>
