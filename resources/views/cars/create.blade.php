<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Adding</title>
</head>

<body class="text-center">
    <div class="container mt-5 ml-5 w-4/8 p-5 ">

        <div class="alert alert-success m-5 mb-4" role="alert">
            <h1 align="center">Add new Books</h1>

        </div>
    


        <form class="form-signin" method="post" action="/cars" enctype="multipart/form-data">
            @csrf
            <div class="mb-5 m-5 mt-2">
                <label class="form-label mb-1" style="font-size: 25px"><strong>Name</strong></label>
                <input type="text" class="form-control" name="name" style="font-size: 20px;" placeholder="name">
            </div>
            
            <div class="mb-5 m-5 mt-2">
                <label class="form-label mb-1" style="font-size: 25px"><strong>Description</strong></label>
                <input type="text" class="form-control" name="description" style="font-size: 20px;" placeholder="Description">
            </div>
            <div class="mb-5 m-5 mt-2">
                <label class="form-label mb-1" style="font-size: 25px"><strong>Year</strong></label>
                <input type="text" class="form-control" name="year" style="font-size: 20px;" placeholder="Year">
            </div>
            <div class="mb-5 m-5 mt-2">
                <label class="form-label mb-1" style="font-size: 25px"><strong>Image</strong></label>
                <input type="file" class="form-control" name="image" style="font-size: 20px;">
            </div>
            <button type="submit" class="btn btn-danger mt-4" style="width: 100%; font-size:30px">Submit</button>
        </form>



    </div>
</body>

</html>
