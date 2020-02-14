<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Upload and print ZPL files via a simple UI.">
        <meta name="Author" content="Justintime50 (Justin Hammond)">

        <style>
            body {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1>ZPL Print</h1>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select ZPL file to upload:
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>
