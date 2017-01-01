<!DOCTYPE html>
<html>
    <head>
        <title>Moviewatch</title>
        <!-- 3.3.7 -->
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/css/main.css">
    </head>
    <body>

        <div class="row">
                <div class="col-sm-12">
                    <h1 class="banner centered-text">Moviewatch</h1>
                </div>
        </div>

        <div class="container">
            <div class="row">

                <!--TODO: Fix column order with push / pull-->
                <div class="col-xs-6 col-md-2">
                    <button type="button" class="btn btn-success">
                        LOGIN
                    </button>
                </div>

                <div class="col-xs-12 col-md-8 col-lg-7 ">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" placeholder="title" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-2">
                    <button type="button" class="btn btn-danger float-right">
                        SIGN UP
                    </button>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">   
                <div class="contentWrapper">
                    <!--TODO: load the page dynamically-->

                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-table">
                                
                                <div class="panel-heading"></div>

                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                </th>
                                                <th>Name & Genre </th>
                                                <th>Year</th>
                                                <th>Duration</th>
                                                <th>Rating</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center" class="centered-cell">
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <span class="glyphicon glyphicon-remove centered" aria-hidden="true"></span>
                                                        </button>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>TED 2</li>
                                                        <li>Comedy, Family, Drama</li>
                                                    </ul>
                                                </td>
                                                <td class="centered-cell">2015</td>
                                                <td class="centered-cell">118 minutes</td>
                                                <td class="centered-cell">7.9</td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="centered-cell">
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <span class="glyphicon glyphicon-remove centered" aria-hidden="true"></span>
                                                        </button>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>TED 2</li>
                                                        <li>Comedy, Family, Drama</li>
                                                    </ul>
                                                </td>
                                                <td class="centered-cell">2015</td>
                                                <td class="centered-cell">118 minutes</td>
                                                <td class="centered-cell">7.9</td>
                                            </tr>
                                                <tr>
                                                <td align="center" class="centered-cell">
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <span class="glyphicon glyphicon-remove centered" aria-hidden="true"></span>
                                                        </button>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>TED 2</li>
                                                        <li>Comedy, Family, Drama</li>
                                                    </ul>
                                                </td>
                                                <td class="centered-cell">2015</td>
                                                <td class="centered-cell">118 minutes</td>
                                                <td class="centered-cell">7.9</td>
                                            </tr>
                                                <tr>
                                                <td align="center" class="centered-cell">
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <span class="glyphicon glyphicon-remove centered" aria-hidden="true"></span>
                                                        </button>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>TED 2</li>
                                                        <li>Comedy, Family, Drama</li>
                                                    </ul>
                                                </td>
                                                <td class="centered-cell">2015</td>
                                                <td class="centered-cell">118 minutes</td>
                                                <td class="centered-cell">7.9</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>

                                <div class="panel-footer">
                                    <div class="row">

                                        <!--TODO: Modify the pagination to work with dynamic data-->
                                        <div class="col col-xs-8">
                                            <ul class="pagination pagination-sm hidden-xs pull-right">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>

                                            <ul class="pagination pagination-sm visible-xs pull-right">
                                                <li><a href="#">«</a></li>
                                                <li><a href="#">»</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>

        <script src="lib/jquery-3.1.1.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

