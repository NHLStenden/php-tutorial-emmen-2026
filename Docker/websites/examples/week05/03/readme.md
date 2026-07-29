# Uploading files

Uploaded files will be reported in the Super Global `$_FILES`. Make sure that the upload options in PHP.ini (or any 
overrides are setup to allow for file uploads of right size and types. )

Use the `move_uploaded_file()` function to move the file from its temporary locatoin where the webserver placed them. 

Make sure the `<form>` had an attribute for `enctype`:  
```html
<form action="process.php" method="post" enctype="multipart/form-data">
</form>
```

# Processing the file

In the example below we see several steps discussed below the example. 

```php

if (array_key_exists("myfile", $_FILES) &&  $_FILES["myfile"]["error"] === 0) {
    $filename = $_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"], __DIR__ . "/uploads/" . $filename);
    $uploadedFilename = "/examples/week05/03/uploads/" . $filename;
}
else {
    die("You need to upload a file.");
}

?>
<img src="<?= $uploadedFilename ?>">
```

## 1. Check if a file was properly uploaded

## 2. Get the filename

## 3. Move the file to our own infrastructure

## 4. Determine the path for the browser


# References

* [MDN other form controls](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Other_form_controls)
* [PHP Handling uploaded files](https://www.php.net/manual/en/features.file-upload.post-method.php)