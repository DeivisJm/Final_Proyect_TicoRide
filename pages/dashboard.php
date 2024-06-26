<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticos-Ride</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-start flex-row">
                <div class="d-flex flex-column">
                    <div class="p-2">
                        <img class="image-size" src="../img/Logo.png" alt="Car Travel Image">
                    </div>
                    <div class="p-2">

                        <div class="relative" style="display: flex;">
                            <div class="menu-item" id="dashboard">Dashboard</div>
                            <div class="menu-item" id="rides">Rides</div>
                            <div class="menu-item" id="settings"> Settings</div>

                        </div>
                    </div>
                    <div class="p-2">
                        <h4 id="currentSection"></h4>
                    </div>
                </div>


            </div>
            <div class="col d-flex justify-content-end mt-auto p-2">
                Welcome &nbsp;
                <p id="username"></p>
                <img class="image-user" src="../img/user.jpg" alt="Car Travel Image">
            </div>
        </div>



        <div id="panel-view" class="table-container">
            <a href="#">Dashboard</a>
            <span class="arrow">></span>
            <h6>My Rides</h6>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <p class="title">Your current list of Rides</p>
                        </div>
                        <div class="p-2">
                            <input type="submit" href="dashboard.php" value="+" name="submit_ride" onclick="ride(this)">
                        </div>


                    </div>
                    <form action="../actions/readRide.php" method="post">
                        <table id="ViajesRegistrados" class="table table-bordered table-striped mt-4">
                            <input type="submit" value ="59">

                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                        </table>
                    </form>
                </div>
            </div>
        </div>



        <div id="rides-view">
            <a href="#">Dashboard</a>
            <span class="arrow">></span>
            <a href="#">Rides</a>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="info-rides">
                        <form action="../actions/createRide.php" method="post">
                            
                            <div class="labelsRides">
                                <div class="labelName">

                                    <label for="ridename" class="form-label">Ride Name</label>
                                    <input type="text" class="form-control rideName" id="rideName" placeholder="">

                                </div>

                                <div class="d-flex">
                                    <div class="mr-auto p-2">
                                        <label for="startfrom" class="form-label">Start From</label>
                                        <input type="text" class="form-control startFromlabel" id="startFrom" placeholder="">
                                    </div>
                                    <div class="p-2">
                                        <label for="end" class="form-label">End</label>
                                        <input type="text" class="form-control endRides" id="end" placeholder="">

                                    </div>

                                </div>
                            </div>
                            <div class="labelsDescription">
                                <label for="description" class="form-label description">Description</label>
                                <textarea name="description" id="description" cols="50" rows="2">This is my everyday ride, from Barrio Los Angles to my job´s office in Second Floor of Cooperservidores Building</textarea>
                            </div>
                            <hr>
                            <h3>When</h3>
                            <div class="labelsTime">
                                <div class="d-flex">
                                    <div class="row align-items-start ml-3">
                                        <label for="departure" class="form-label">Departure</label>
                                        <input type="time" class="form-control  departure" id="departure" value="06:45">
                                        <label for="arrival" class="form-label ">Estimated Arrival</label>
                                        <input type="time" class="form-control arrival" id="arrival" value="07:05">
                                    </div>
                                    <div class="p-4">
                                        <label for="SelectDays" class="form-label  days">Select Days</label>
                                        <div id="days">
                                            <input type="checkbox" id="monday" name="day" value="Monday">
                                            <label for="monday">Monday</label><br>
                                            <input type="checkbox" id="tuesday" name="day" value="Tuesday">
                                            <label for="tuesday">Tuesday</label><br>
                                            <input type="checkbox" id="wednesday" name="day" value="Wednesday">
                                            <label for="wednesday">Wednesday</label><br>
                                            <input type="checkbox" id="thursday" name="day" value="Thursday">
                                            <label for="thursday">Thursday</label><br>
                                            <input type="checkbox" id="friday" name="day" value="Friday">
                                            <label for="friday">Friday</label><br>
                                            <input type="checkbox" id="saturday" name="day" value="Saturday">
                                            <label for="saturday">Saturday</label><br>
                                            <input type="checkbox" id="sunday" name="day" value="Sunday">
                                            <label for="sunday">Sunday</label><br>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mr-auto p-2">
                                        <a class="cancel" href="dashboard.php">Cancel</a>
                                    </div>
                                    <div class="p-2">
                                        <button class="Save">Save</button>
                                    </div>



                                </div>


                            </div>



                        </form>


                    </div>


                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



        <div id="settings-view">
            <a href="#">Dashboard</a>
            <span class="arrow">> Settings</span>
            <div class="settings">
                <label for="fullname" class="form-label ">Full Name</label>
                <div class="fullname">
                    <textarea id="fullname" placeholder=" "></textarea>
                </div>
                <label for="speedAverage" class="form-label">Speed Average</label>
                <div class="speedAverage">
                    <textarea id="edit" placeholder=60km/h></textarea>
                </div>
                <label for="aboutMe" class="form-label">About Me</label>
                <div class="aboutMe">
                    <textarea id="edit" placeholder="Something about me goes here"></textarea>
                </div>
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <a href="dashboard.php">Cancel</a>
                    </div>
                    <div class="p-2">
                        <button class="Save">Save</button>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="../js/dashboard.js"></script>

</body>

</html>