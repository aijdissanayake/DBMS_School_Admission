    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        </head>
        <body>
            <div class="container">
                <h1 align="center">Ministry of Education</h1>
                <div class="row">
                    <div class="col-md-4">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Login</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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