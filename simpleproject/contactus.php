<html>
<header>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">

</header>
<body> 
<?php include 'menu.php'; ?>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">username</label>
                <input type="text" name="user" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" name="email" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">mobile</label>
                <input type="phone" name="mobile" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">commemts</label>
                <textarea name="comments" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">Create by: muhammed mahmood , aland azad </p>
</footer>
    
</body>
</html>