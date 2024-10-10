<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology Papers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Biology Past Papers</h1>
    </header>

    <ul>
        <?php
        $dir = "weeebeeb/biology/";
        $folders = array_filter(glob($dir . '*'), 'is_dir');

        foreach ($folders as $folder) {
            $folderName = basename($folder);
            // Link to index.html or another file inside each folder
            echo "<li><a href='$folder/index.html'>$folderName</a></li>";
        }
        ?>
    </ul>

    <a href="index.html">Back to Home</a>
</body>
</html>
