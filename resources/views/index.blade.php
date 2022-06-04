<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>To-Do</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">List Product</h1>
                <p class="lead">Welcome to your Product List manager!</p>
            </div>
        </div>

        <div class="container mt-5">
            <a href="{{ route('addProduct') }}" class="btn btn-primary" type="submit">
                Add New Product
            </a>

            <div class="d-flex flex-wrap align-content-start mt-5">
                @forelse ($products as $product)
                <div class="card mb-4 me-4" style="width: 18rem">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="h5 card-title">{{ $product->name }}</div>
                            <div>
                                <div class="rounded p-1 bg-success text-white">
                                    {{ $product->quantity }}
                                </div>
                            </div>
                        </div>
                        <p class="card-text">
                            {{ $product->detail }}
                        </p>

                        <div class="mt-3 d-flex">
                            <a
                                href="{{ route('editProduct') }}"
                                class="btn btn-warning ms-2"
                                >Edit</a
                            >
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-info">
                    No products yet.
                </div>
                @endforelse
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
