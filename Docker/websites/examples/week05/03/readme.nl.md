# Week 5 - PHP - Bestanden uploaden

Soms willen gebruikers bestanden uploaden, zoals een avatarafbeelding, een PDF-bestand of een ander document. 

Geüploade bestanden worden gerapporteerd in de superglobale variabele `$_FILES`. Zorg ervoor dat de uploadopties in PHP.ini (of eventuele 
aanpassingen) zo zijn ingesteld dat het uploaden van bestanden met de juiste grootte en het juiste type mogelijk is. )

Gebruik de functie `move_uploaded_file()` om het bestand te verplaatsen vanuit de tijdelijke locatie waar de webserver het heeft geplaatst. 

Zorg ervoor dat `<form>` een attribuut heeft voor `enctype`:  
```html
<form action="process.php" method="post" enctype="multipart/form-data">
</form>
```

# Het bestand verwerken

In het onderstaande voorbeeld zien we verschillende stappen die onder het voorbeeld worden besproken. 

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

## 1. Controleer of een bestand correct is geüpload

## 2. Haal de bestandsnaam op

## 3. Verplaats het bestand naar onze eigen infrastructuur

## 4. Bepaal het pad voor de browser


# Referenties

* [MDN andere formulierbesturingselementen](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Other_form_controls)
* [PHP: omgaan met geüploade bestanden](https://www.php.net/manual/en/features.file-upload.post-method.php)