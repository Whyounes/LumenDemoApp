 <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Markdown parser</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="/parse" method="POST">
                        <h2>Paste your Markdown text below</h2>

                        <textarea name="text" id="" width="100%" rows="10" class="form-control"></textarea>

                        <hr/>
                        <input type="submit" class="btn btn-primary" value="Parse Markdown" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>