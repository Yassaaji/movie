<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Bintang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/rating.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="image-container">
                <img class="image" src="{{ asset('img/foto-rating/spidermann.jpg') }}" alt="Film">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                    <h2 class="card-title text-start" style="color: rgb(0, 0, 0);">Spiderman VS Everybody</h2>
                    <div class="data">
                        <p><strong>Durasi :</strong> Durasi Film</p>
                        <p><strong>Direktur :</strong> Marcquez</p>
                        <p><strong>Casts :</strong> Marcquez, Rossi</p>
                    </div>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1"></label>
                    </div>
                    <center> <a href="#" class="btn btn-dark col-md-8">Kirim</a></center>
                </div>
            </div>
        </div>
    </div>
    <script>
        const ratingInputs = document.querySelectorAll('input[name="rating"]');
        const ratingValue = document.getElementById('ratingValue');
        ratingInputs.forEach(input => {
            input.addEventListener('change', () => {
                ratingValue.textContent = input.value;
            });
        });
    </script>
</body>

</html>




