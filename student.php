<?php
require_once 'db_connect.php';
if(isset($_REQUEST['id'])){

    $query='select * from student where id='.$_REQUEST['id'];
 $result=mysqli_query($conn,$query);
  $user_data=mysqli_fetch_array($result,MYSQLI_BOTH);

}

?>

<html>
<head>
    <link rel="stylesheet" href="studentdesign.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/home/bledar/Desktop/SchoolManagment/javascript/funksione.js"></script>
    <style>
        .edit_input{
            border: none;

        }
    </style>
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

        <div class="card-info"> <span class="card-title"><?php echo $user_data[1].' '.$user_data[2] ?></span>

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
                <div class="hidden-xs">Notat</div>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" onclick="change(2)" class="btn btn-default">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Orari</div>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" onclick="change(3)" class="btn btn-default">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Provimet</div>
            </button>
        </div>
    </div>

    <div class="well">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                            <a href="#" onclick="doeditable()" >Edit Profile</a>
                            <A href="home.html" >Logout</A>
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Bledar Sulmata</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>
                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>Emri</td>
                                                    <td><?php echo $user_data[1]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mbiemri</td>
                                                    <td> <?php echo $user_data[2]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mosha </td>
                                                    <td><?php echo $user_data[3]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gjinia</td>
                                                    <td><?php echo $user_data[4]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><?php echo $user_data[5]?></td>
                                                </tr>
                                                <tr>

                                                    <td>Adresa</td>
                                                    <td><input type="text" class="edit_input" value="<?php echo $user_data[7]?>" readonly="readonly" /></td>
                                                </tr>
                                                <td>Dega</td>
                                                <td><?php echo $user_data[8]?></td>
                                                </tr>
                                                <tr>
                                                    <td>Viti</td>
                                                    <td><?php echo $user_data[9]?></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in" id="tab3">
                <h3>Notat</h3>
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
<script>
    var editinputs=document.getElementsByClassName('edit_input');
    function  doeditable() {
        editinputs[0].style.border='1px solid gray';
        editinputs[0].readOnly = false;
    }

</script>
</body>
</html>
