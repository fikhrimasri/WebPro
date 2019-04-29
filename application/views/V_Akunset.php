<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body onload="openNav()">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-light fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button type="button" onclick="openNav()" id="sidebarCollapse" class="btn btn-light" style="margin-right:30px">
                        <i class="fas fa-align-left"></i>
                        <span><img src="<?php echo base_url();?>assets/image/menu.png" style="width:15px"></span>
                    </button>
                </li>
                <li class="nav-item">
                    <a href="#" class = "navbar-brand"> <img src="<?php echo base_url();?>assets/image/Kalibrr.png" width="100" style="margin-top:-12px"> </a>
                </li>
                <li class="nav-item">
                    <div class="input-group">
                        <input style="width: 250px" class="form-control mr-sm-2" type="text" placeholder="Search for Jobs">
                        <div class="input-group-prepend" style="margin-left:-10px">
                            <a href="#"><span class="input-group-text bg-primary" style="padding-left:7px; padding-right:7px;"><img style="width: 24px" src="<?php echo base_url();?>assets/image/search.png"></span></a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item">
                    <a href="#"><div><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/mail.png" width="20"> </div></a>
                    
                </li>
                <li class="nav-item">
                    <a href="#"><div><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/notif.png" width="20"> </div></a>
                    
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button style="margin-top:-6px; background-color:white; color:black" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            User
                        </button>
                        <div class="dropdown-menu" style="margin-left: -120px">
                            <a class="dropdown-item" href="#"><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/user.png" width="15">Profile</a>
                            <a class="dropdown-item" href="#"><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/setting.png" width="15">Account Setting</a>
                            <a class="dropdown-item" href="#"><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/help.png" width="15">Help</a>
                            <hr>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/C_Auth/Signin"><img style="margin-right:20px" src="<?php echo base_url();?>assets/image/logout.png" width="15">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>         
        </nav>
        <div id="mySidenav" class="sidenav">
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/search.png" width="15"></span><span style=" margin-left: 15px">Job Board</span></a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/user.png" width="15"></span><span style=" margin-left: 15px"> Profile</span> </a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/berkas.png" width="15"></span><span style=" margin-left: 15px">Application</span></a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/chat.png" width="15"></span><span style=" margin-left: 15px">Messages</span></a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/love.png" width="15"></span><span style=" margin-left: 15px">Saved Jobs</span></a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/koper.png" width="15"></span><span style=" margin-left: 15px">Recommended Jobs</span></a>
            <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url();?>assets/image/piala.png" width="15"></span><span style=" margin-left: 15px">Skill Tests</span></a>
        </div>

        <div align="center" style="margin-top:75px">
            <style>
                .card-header{
                    height: 50px;
                }
                .card{
                    width:670px; 
                    margin-top: 20px ; 
                    height: 380px;
                }
                .card.card1{
                    height: 210px;
                }
                .card.card2{
                    height: 250px;
                }
                .card.card3{
                    height: 210px;
                }
                .checkbox.c1{
                    margin-bottom:13px;
                }
            </style>
            <div class="card">
                <div class="card-header">
                    <div class="row" style="margin-top:-6px">
                        <div class="col-md-6" align="left">
                            <p style="margin-top:5px; font-size: 18px" class="text-secondary">Email</p>
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" class="btn btn-primary initombol">SAVE</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" align="left">
                    <p style="margin-bottom: 2px" class="text-secondary">Current Email Address</p>
                    <p>iniemail@email.com</p>
                    <p>To change your email, please complete the following fields.</p>
                    <form action="#">
                        <div class="form-group" style="margin-top:20px">
                          <label for="password" class="text-secondary" style="font-size:14px">Current Password</label>
                          <input type="password" class="form-control" id="email">
                        </div>
                        <div class="form-group" style="margin-top:20px">
                            <label for="email" class="text-secondary" style="font-size:14px">New Email Address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card2">
                <div class="card-header">
                    <div class="row" style="margin-top:-6px">
                        <div class="col-md-6" align="left">
                            <p style="margin-top:5px; font-size: 18px" class="text-secondary">Mobile number</p>
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" class="btn btn-primary initombol">SAVE</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" align="left">
                    <form action="#">
                        <div class="form-group" style="margin-top:20px">
                            <label for="number" style="font-size:15px">Enter mobile number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height:38px ; background-color:white" class="input-group-text dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <span><img style="margin-top:5px; height:30px;" src="<?php echo base_url();?>assets/image/indonesia.png" alt=""></span><span>(+62)</span>
                                    </span>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><span><img src="<?php echo base_url();?>assets/image/indonesia.png" alt=""></span><span>(+62)</span></a>
                                        <a class="dropdown-item" href="#"><span><img src="<?php echo base_url();?>assets/image/filipina.png" alt=""></span><span>(+63)</span></a>
                                        <a class="dropdown-item" href="#" style="margin-top:10px"><span>VN</span><span>(+84)</span></a>
                                        <a class="dropdown-item" href="#" style="margin-top:10px"><span>BD</span><span>(+880)</span></a>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="number">
                            </div>
                            
                            
                        </div>
                    </form>
                    <p>Your mobile number will be used to send important updates on your applications, and allow recruiters to contact you and invite you to interviews.</p>

                </div>
            </div>
            <form method="POST" action="<?php echo site_url('UserController/changePassword'); ?>">   
                <div class="card">
                    <div class="card-header">
                        <div class="row" style="margin-top:-6px">
                            <div class="col-md-6" align="left">
                                <p style="margin-top:5px; font-size: 18px" class="text-secondary">Password</p>
                            </div>
                            <div class="col-md-6" align="right">
                                <button type="submit" class="btn btn-primary initombol">SAVE</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" align="left">
                        <p>To change your password, please complete the following fields.</p>
                        
                            <div class="form-group" style="margin-top:20px">
                            <label for="current_password" class="text-secondary"  style="font-size:14px">Old Password</label>
                            <input type="password" class="form-control" name="current_password" id="current_password">
                            </div>
                            <div class="form-group" style="margin-top:20px">
                                <label for="newpass" class="text-secondary" style="font-size:14px">New Password</label>
                                <input type="password" class="form-control" name="new_password1" id="new_password1">
                            </div>
                            <div class="form-group" style="margin-top:20px">
                                <label for="passconf" class="text-secondary" style="font-size:14px">Retype New Password</label>
                                <input type="password" class="form-control" name="new_password2" id="new_password2">
                            </div>
                        
                    </div>
                </div>
            </form>

            <div class="card card1">
                <div class="card-header">
                    <div class="row" style="margin-top:-6px">
                        <div class="col-md-6" align="left">
                            <p style="margin-top:5px; font-size: 18px" class="text-secondary">Sourcing Visibility</p>
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" class="btn btn-primary initombol">SAVE</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" align="left">
                    <form action="#">
                        <div class="form-group" style="margin-top:20px">
                            <label for="text" class="text-secondary" style="font-size:14px">Hide me from the following companies:</label>
                            <input type="text" class="form-control" id="text" placeholder="Input companies...">
                        </div>
                    </form>    
                </div>
            </div>
            <div class="card card3">
                <div class="card-header">
                    <div class="row" style="margin-top:-6px">
                        <div class="col-md-6" align="left">
                            <p style="margin-top:5px; font-size: 18px" class="text-secondary">SMS Subscriptions</p>
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" class="btn btn-primary initombol">SAVE</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" align="left">
                    <form>
                        <div class="checkbox c1">
                            <label><input checked type="checkbox" value=""><span style="margin-left:5px;">Subscribe to SMSes about job invitations/messages</span><span><img style="height:15px; margin-left: 5px" src="assets/image/help.png"></span></label>
                        </div>
                        <div class="checkbox c1">
                            <label><input checked type="checkbox" value=""><span style="margin-left:5px;">Subscribe to SMSes from recruiters</span><span><img style="height:15px; margin-left: 5px" src="assets/image/help.png"></span></label>
                        </div>
                        <div class="checkbox c1">
                            <label><input checked type="checkbox" value=""><span style="margin-left:5px;">Subscribe to SMSes about incomplete applications</span><span><img style="height:15px; margin-left: 5px" src="assets/image/help.png"></span></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>      
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("sidebarCollapse").setAttribute("onclick", "closeNav()");
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("sidebarCollapse").setAttribute("onclick", "openNav()");
        

    }
</script>
<style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;  
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #ffffff;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        margin-top: 61px;
        border-right: 1px solid #c2c2c2;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #000000;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #b8b8b8;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
</style>
</html>