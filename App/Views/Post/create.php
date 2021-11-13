<?php
use App\Controllers\PostController;
$post = new PostController($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div id="main">
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
            <label for="title">Title</label>
            <input type= "text" name="title" name = "tite"><br>
            <label for="body">Body</label>
            <input name="body" name = "body">  <br>
            <input type= "hidden" name = "submitted" value = "1">
            <input type="button" value = "submit">
        </form>
    </div>
 </body>
</html>