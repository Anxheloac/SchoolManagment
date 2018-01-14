<html>
<head>
    <link rel="stylesheet" href="studentdesign.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/home/bledar/Desktop/SchoolManagment/javascript/funksione.js"></script>
</head>
<body>
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="bledi.jpg">
        </div>
        <div class="useravatar">
            <img alt="" src="bledi.jpg">
        </div>
        <div class="card-info"> <span class="card-title">Bledar Sulmata</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg">
        <div class="btn-group">
            <button type="button" onclick="change(0)" class="btn btn-default">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Profili</div>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" onclick="change(1)" class="btn btn-default">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Orari</div>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" onclick="change(2)" class="btn btn-default">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Provimet</div>
            </button>
        </div>
    </div>

    <div class="well">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab2">
                <table class="table success">
                    <thead>
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Mosha</th>
                        <th>Gjinia</th>
                        <th>E-mail</th>
                        <th>Adresa</th>
                        <th>Dega</th>
                        <th>Viti</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr class="success">

                        <td>Bledar</td>
                        <td>Sulmata</td>
                        <td>20</td>
                        <td>Mashkull</td>
                        <td>bledar.sulmataj@fshnstudent.info</td>
                        <td>------</td>
                        <td>Informatike</td>
                        <td>3</td>
                    </tr>
                    </tbody>

                </table>

                <form action="home.html" method="post">
                    <input type="submit" class="btn btn-primary" value="Dil">
                </form>
            </div>
            <div class="tab-pane fade in" id="tab4">
                <p><a href="http://37.139.119.36:81/orari/" target="iframe_a"><h3>Hap Orarin</h3></a></p>
                <iframe height="500px" width="100%" src="demo_iframe.htm" name="iframe_a"></iframe>
            </div>
            <div class="tab-pane fade in" id="tab5">
                <h3>Provimet</h3>
            </div>
        </div>
    </div>

</div>
</body>
</html>
