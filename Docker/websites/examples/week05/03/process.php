<pre><code>
<?php

var_dump($_FILES);

if (array_key_exists("myfile", $_FILES) &&  $_FILES["myfile"]["error"] === 0) {
    $filename = $_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"], __DIR__ . "/uploads/" . $filename);
    $uploadedFilename = "/examples/week05/03/uploads/" . $filename;
}
else {
    die("You need to upload a file.");
}

?>
</code></pre>
<img src="<?= $uploadedFilename ?>">