<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="col-lg-3 mt-5">
            <form action="hitung.php" method="get">
            <div class="mb-3">
                <label for="tujuan" class="form-label">Tujuan</label>
                <select class="form-select" id="tujuan" name="tujuan" aria-label="Default select example">
                    <option value="Jakarta">Jakarta</option>
                    <option value="Tasikmalaya">Tasikmalaya</option>
                    <option value="Garut">Garut</option>
                    <option value="Tangerang">Tangerang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumtik" class="form-label">Jumlah Tiket</label>
                <input type="number" class="form-control" id="jumtik" name="jumtik">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

           
        </div>
    </div>
</html>