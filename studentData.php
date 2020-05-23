<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="thusara">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Econ Department Student Managemnt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        #second,
        #third,
        #fourth,
        #result {
            display: none;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light p-4 rounded mt-4">
                <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Econ Dept Student Data Form</h5>
                <div class="progress mb-3" style="height:40px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width:40%;" id="progressBar">
                        <b class="lead" id="progressText">Step-1</b>
                    </div>
                </div>
                <form id="form-data">
                    <div id="first">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Personal Information</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Academic Year</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="acdYear" class="form-control">
                                    <option value="2014/2015">2014/2015</option>
                                    <option value="2015/2016">2015/2016</option>
                                    <option value="2015/2016">2016/2017</option>
                                    <option value="2015/2016">2017/2018</option>
                                    <option value="2015/2016">2018/2019</option>
                                    <option value="2015/2016">2019/2020</option>
                                    <option value="2015/2016">2020/2021</option>
                                    <option value="2015/2016">2021/2022</option>
                                    <option value="2015/2016">2022/2023</option>
                                    <option value="2015/2016">2023/2024</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="regNumber" name="regNumber" class="form-control" placeholder="Registration Number">
                            <b class="form-text text-danger" id="regNumberError"></b>
                        </div>
                        <div class="form-group">
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name">
                            <b class="form-text text-danger" id="firstNameError"></b>
                        </div>
                        <div class="form-group">
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name">
                            <b class="form-text text-danger" id="lastNameError"></b>
                        </div>
                        <div class="form-group">
                            <input type="text" id="dob" name="dob" class="form-control" placeholder="Date of Birth(YYYY-MM-DD)">
                            <b class="form-text text-danger" id="dobError"></b>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Gender</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">District</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="district" class="form-control">
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="permAddress" name="permAddress" placeholder="Permenant Address" class="form-control"></textarea>
                            <b class="form-text text-danger" id="permAddressError"></b>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            <b class="form-text text-danger" id="emailError"></b>
                        </div>
                        <div class="form-group">
                            <input type="text" id="stdTeleNumber" name="stdTeleNumber" class="form-control" placeholder="Telephone Number">
                            <b class="form-text text-danger" id="stdTeleNumberError"></b>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="next-1">Next</a>
                            <input type="button" value="Submit" id="submit1" class="btn btn-success">
                        </div>
                    </div>
                    <div id="second">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Family Information</h4>
                        <h5 class="text-center bg-info rounded text-light">Mother's Details</h5>
                        <div class="form-group">
                            <input type="text" name="motherName" class="form-control" placeholder="Name">
                            <b class="form-text text-danger" id="stdTeleNumberError"></b>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Education Level</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="motherEduLevel" class="form-control">
                                    <option value="OL">O/L</option>
                                    <option value="AL">A/L</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="motherOccupation" class="form-control" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="motherTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Father's Details</h5>
                        <div class="form-group">
                            <input type="text" name="fatherName" class="form-control" placeholder="Name">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Education Level</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="fatherEduLevel" class="form-control">
                                    <option value="OL">O/L</option>
                                    <option value="AL">A/L</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="fatherOccupation" class="form-control" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fatherTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Contacted Person's Details</h5>
                        <div class="form-group">
                            <input type="text" name="contactPersonName" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="contactPersonAddress" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contactPersonTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Other Family Details</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" id="numBrother" name="numBrother" class="form-control" placeholder="Number of Brothers">
                                <b class="form-text text-danger" id="numBrotherError"></b>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="numSister" name="numSister" class="form-control" placeholder="Number of Sisters">
                                <b class="form-text text-danger" id="numSisterError"></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Employed Siblings</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="empSib" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="famIncome" class="form-control" placeholder="Family Income">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-2">Previous</a>
                            <a href="#" class="btn btn-danger" id="next-2">Next</a>
                        </div>
                    </div>
                    <div id="third">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Education Information</h4>
                        <h5 class="text-center bg-info rounded text-light">Advance Level Result</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Stream</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="alStream" class="form-control">
                                    <option value="Arts">Arts</option>
                                    <option value="Biological">Biological Science</option>
                                    <option value="Commerce">Commerce stream</option>
                                    <option value="Common">Common</option>
                                    <option value="Physical">Physical Science</option>
                                    <option value="Technology">Technology</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="zScore" class="form-control" placeholder="Z-Score">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub1" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade1" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub2" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade2" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub3" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade3" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">General English</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade1" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Language Literacy</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Sinhala</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="sinhala" class="form-control">
                                    <option value="A">Poor</option>
                                    <option value="B">Average</option>
                                    <option value="C">Extremely Proficient</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">English</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="english" class="form-control">
                                    <option value="A">Poor</option>
                                    <option value="B">Average</option>
                                    <option value="C">Extremely Proficient</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Tamil</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="tamil" class="form-control">
                                    <option value="A">Poor</option>
                                    <option value="B">Average</option>
                                    <option value="C">Extremely Proficient</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Computer Literacy</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Word</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="word" class="form-control">
                                    <option value="Aware">Aware</option>
                                    <option value="Able to Work">Able to Work</option>
                                    <option value="Excellent">Excellent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Excell</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="excell" class="form-control">
                                    <option value="Aware">Aware</option>
                                    <option value="Able to Work">Able to Work</option>
                                    <option value="Excellent">Excellent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Power Point</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="ppt" class="form-control">
                                    <option value="Aware">Aware</option>
                                    <option value="Able to Work">Able to Work</option>
                                    <option value="Excellent">Excellent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Access</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="access" class="form-control">
                                    <option value="Aware">Aware</option>
                                    <option value="Able to Work">Able to Work</option>
                                    <option value="Excellent">Excellent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="otherCom" name="otherCom" placeholder="Other Computer Qualifications" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-3">Previous</a>
                            <a href="#" class="btn btn-danger" id="next-3">Next</a>
                        </div>
                    </div>
                    <div id="fourth">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Future Goals</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Prospected Job Category</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="prosJobCat" class="form-control">
                                    <option value="Government">Government</option>
                                    <option value="Private">Private</option>
                                    <option value="Self Employee">Self Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="prosJobField" class="form-control" placeholder="Prospected Job Field">
                        </div>
                        <div class="form-group">
                            <input type="text" name="prosJob" class="form-control" placeholder="Prospected Job">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-4">Previous</a>
                            <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js" integrity="sha256-ugED92WALymbx9ylw12aADWaCrsQysE29DyvnAv5i3w=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#next-1").click(function() {
                $("#second").show();
                $("#first").hide();
                $("#progressBar").css("width", "60%");
                $("#progressText").html("step-2");
            })

            $("#next-2").click(function() {
                $("#second").hide();
                $("#third").show();
                $("#progressBar").css("width", "80%");
                $("#progressText").html("step-3");
            })

            $("#next-3").click(function() {
                $("#third").hide();
                $("#fourth").show();
                $("#progressBar").css("width", "100%");
                $("#progressText").html("step-4");
            })

            $("#prev-2").click(function() {
                $("#second").hide();
                $("#first").show();
                $("#progressBar").css("width", "40%");
                $("#progressText").html("step-1");
            })

            $("#prev-3").click(function() {
                $("#second").show();
                $("#third").hide();
                $("#progressBar").css("width", "60%");
                $("#progressText").html("step-2");
            })

            $("#prev-4").click(function() {
                $("#fourth").hide();
                $("#third").show();
                $("#progressBar").css("width", "80%");
                $("#progressText").html("step-3");
            })

            $("#submit1").click(function() {
                $.ajax({
                    url: "insert.php",
                    type: "post",
                    data: $("#form-data").serialize(),
                    success: function(d) {
                        alert(d);
                    }
                })
            })
        })
    </script>
</body>

</html>