<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?=$title?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-inverse bg-inverse">
        <h1 class="navbar-brand mb-0">Generic Phonebook App</h1>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <?=$output?>
                </div>
                <div class="col-5">
                    <table class="table table-hover table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?=$output2?>
                        </tbody>
                    </table>
                </div>
            </div>

    </main>

    <footer class="footer">
        <div class="container">
            <span class="text-muted" style="position: fixed; bottom: 0;">&copy; Zachary Monk 2018</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>
