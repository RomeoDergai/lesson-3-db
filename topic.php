<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WALL</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Topic : {name}
                </div>
                <div class="panel-body">

                    <div class="row_easy">
                        {message 1}
                    </div>

                    <div class="row_hard">
                        {message 2}
                    </div>

                    <div class="row_easy">
                        {message 3}
                    </div>

                    <div class="row_hard">
                        {message 4}
                    </div>

                    ?>
                    <div class="row_form">
                        <form method="post" class="form-group" action="/">
                            <div class="form-group">
                                <label for="text">Text</label>
                                <input class="form-control" name="text" title="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
