    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        </head>
        <body>
            <div class="container">
                <h1 align="center">Ministry of Education<br/><small>Grade one Entry Evaluations</small></h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Login</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="/auth">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input name="username" type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </body>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </html>