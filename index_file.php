<title>File_Upload</title>
<meta http-equiv="content-type" charset="UTF-8" />

<h1>檔案上傳</h1>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="my_file[]" multiple>
    <input type="submit" value="Upload">
</form>