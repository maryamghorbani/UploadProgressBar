<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Progress Bar</title>
    <link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v20.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


<!--    <link rel="stylesheet" href="./reset.css">-->
</head>
<body>

    <div class="container">
         <div class="row">
               <div class="col">
                    <form action="/upload.php" method="POST" enctype="multipart/form-data" id="upload" class="mt-4">
                        <div class="form-group">
                            <label for="fileupload">File : </label>
                            <input type="file" id="fileupload" name="file" class="form-control-file">
                        </div>
                        <button class="btn btn-danger mt-4">submit</button>
                    </form>
                    <div class="mt-4 d-none" id="progress">
                        <div class="progress">
                             <div class="progress-bar" style="width: 0%">0%</div>
                        </div>
                    </div>
               </div>
         </div>
    </div>
    
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>