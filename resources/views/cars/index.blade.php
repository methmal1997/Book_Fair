<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Show</title>
</head>

<body>
    
    <main>

        <div class="album py-5 bg-light">
            <div class="container">
                <section id="blog-grid" class="mt-5">

                    <div class="section-title color-two text-center mt-5">
                        <h3 class="sub-title wow pixFadeUp"
                            style="font-family:cursive; font-weight:800; font-size:40px;color:green;"> Book Show
                            &amp; 2021</h3>
                        <h2 class="title wow pixFadeUp" data-wow-delay="0.3s"
                            style="font-family:cursive; font-weight:800; font-size:20px;color:green;"><i>
                                <b>STAY HOME Always Read</b></i></h2>
                    </div>
                    <!-- calendar -->
                   

                    <div class="row more-news-section mt-5">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($cars as $car)

                                <div class="col-4">
                                    <div class="card shadow p-3 mb-5 bg-body rounded rounded h-100 text-center" >
                                        <img src="{{ asset('images/' . $car->image_path) }}" width="325"
                                        height="250">
                                        <div class="card-body">
                                            <span class="text-uppercase font-weight-bold " style="color: black">
                                                <b>
                                                    <h4 class="card-title">{{ $car->name }}</h4>
                                                </b>
                                            </span>
                                            <p class="card-text"> {{ $car->description }}</p>
                                            <p style="font-style: italic">
                                                    founded in {{ $car->year }}
                                            </p>
                                            <p ><i> ----------------------------------
                                                </i>
                                            </p>
                                            <div style="position: absolute; bottom: 0; right: 0; left: 0;" class="m-1"  >
                                            <div class="m-1">
                                            <a href="cars/{{ $car->id }}/edit" class="btn btn-secondary btn-lg btn-block ">Edit</a>
                                            </div>
                                            <div class="m-1" >
                                                <form action="/cars/{{ $car->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-lg btn-block mb-2" type="submit">Delete</button>
                                                
                                                </form>
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            <div class="col-4">
                                <div class="card shadow p-3 mb-5 text-white bg-warning rounded h-100 text-center">

                                    <div class="card-body">
                                        <span class="text-uppercase font-weight-bold " style="color: black">
                                            <b>
                                                <h2 class="card-title">We love Books</h2>
                                            </b>
                                        </span>

                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum
                                            fugiat deleniti
                                            dolorum
                                            officia delectus modi alias recusandae,
                                            consequuntur corrupti omnis commodi molestias, voluptate, facere excepturi
                                            quam nisi temporibus
                                            dolore?
                                        </p>
                                        <a href="cars/create" class="btn btn-primary">Add New Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>

</html>
