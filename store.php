<?php
    $category = $_POST["cat"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mb-3">
        <h1>Fill the form</h1>
    </div>
    <div class="container mb-3">
        <form action="dbfile.php" method="post">
            <input type="hidden" name="cat" value="<?php echo $category ?>"/>
            <label class="form-label" for="">Bookid</label>
            <input class="form-control" type="text" name="bookid"/>
            <label class="form-label" for="">Book Name</label>
            <input class="form-control"  type="text" name="bookname"/>
            <label class="form-label" for="">Price</label>
            <input class="form-control"  type="text" name="price"/>
            <label class="form-label" for="">Rackno</label>
            <input class="form-control"  type="text" name="rackno"/>
            <label class="form-label" for="">Author</label>
            <input class="form-control"  type="text" name="author"/>
            <label class="form-label" for="">isbn</label>
            <input class="form-control"  type="text" name="isbn"/>
            <label class="form-label" for="">Edition</label>
            <input class="form-control"  type="text" name="edition"/><br/>
            <input class="form-control btn-primary" type="submit" value="submit">
        </form>
    </div>
</body>
</html>