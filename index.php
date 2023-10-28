<?php
include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 sidebar">
            <?php include 'sidebar.htm' ?>
        </div>
        <div class="col-10 ">

            <?php include 'topbar.html' ?>

            <h1> chjcsjcsbjcb Student Homepage</h1><br>
            <div class="card">



                <div class="col-sm-2 card1">

                    <h3> 20 <br>total attendance</h3>
                    <img src="calendra.jpg" width="50px" height="50px" style="margin-top: 27px; opacity: 0.2;">
                </div>
                <div class="col-sm-2 card2">
                    <h3>
                        17 Present
                    </h3>
                </div>
                <div class="col-sm-2 card3">
                    <h3>
                        3 Absent
                    </h3>
                </div>
                <div class="col-sm-2 card4">
                    <h3>

                        6 Subject
                    </h3>
                </div>

            </div>
            <div class="container-fluild graph">
                <div class="row">



                    <div class="col-sm-4 studentattendance">
                        <div class="heading">
                            <h3>Student Attendance </h3>

                        </div>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                    </div>

                    <div class="col-sm-4 studentsubject">
                        <div class="heading">
                            <h3>Subject </h3>

                        </div>
                        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</div>
</div>



<?php
include 'footer.php';
?>