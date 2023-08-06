<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 card mt-5">
                <form action="{{ route('category.save')}}" method="POST">
                    @csrf
                    <div class="card mt-5">
                        <div class="card-body">
                           <label for="" class="mt-3">Category ID :</label>
                           <input class="form-control" type="text"  aria-label="default input example" name="cat_id">
                           <label for="" class="mt-3">Category Name :</label>
                           <input class="form-control" type="text"  aria-label="default input example" name="cat_name">
                           

                        </div>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                           <label for="" class="mt-3">Sub category ID :</label>
                           <input class="form-control" type="text"  aria-label="default input example" name="sub_cat_id">
                           <label for="" class="mt-3">Sub category Name :</label>
                           <input class="form-control" type="text"  aria-label="default input example" name="sub_cat_name">
                           
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mt-5">Save</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
