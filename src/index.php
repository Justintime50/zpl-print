<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Upload and print ZPL files via a simple UI.">
        <meta name="Author" content="Justintime50 (Justin Hammond)">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body {
                font-family: Arial, Helvetica;
            }
            h1 {
                text-align: center;
            }
            .card {
                margin: 50px
            }
            button {
                margin: 15px 0;
            }
        </style>
    </head>

    <body>
        <div class="card">
            <div class="card-header">
                <h1>ZPL Print</h1>
            </div>

            <div class="card-body">
                <p>Select a ZPL file to upload. Once the file is uploaded, it will print via the server's connected ZPL printer.</p>

                <form action="print.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control-file" name="file" id="file">
                    <button type="submit" class="btn btn-primary" value="Upload File" name="submit">Upload & Print</button>
                </form>
            </div>
        </div>
    </body>
</html>
