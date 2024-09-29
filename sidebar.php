<style>
  .sidebar {
    width: 250px; /* Adjust as needed */
    height: 100%; /* Full height */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Dark background */
    padding-top: 20px;
  }

  .sidebar a {
    margin-bottom: 40px;
    padding: 8px 8px 8px 8px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 22px;
    color: #3FA2F6;
    transition: 0.3s;
    display: flex;
    align-items: center;
    margin-right: 40px;
    margin-left: 32px;
  }

  .sidebar .side-header {
    margin-left: 30px;
    margin-bottom: 8px;
    color: #3B3131;
  }

  .sidebar a:hover {
    background-color: #3FA2F6;
    color: white;
  }

  .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 2px;
    font-size: 34px;
    margin-left: 50px;
  }

  .sidebar img {
    margin-left: 60px;
    margin-bottom: 15px;
    width: 100px;
  }
  h5{
    color: white;
  }
</style>

<div class="sidebar" id="mySidebar">
  <div class="side-header">
    <h5 style="margin-top:10px">Hello, Admin</h5>
  </div>

  <hr style="border:1px solid; background-color:#3FA2F6; border-color:#3B3131;">
  <img src="img/logo.png" alt="Logo">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="./admindash.php"><i class="fa fa-home"></i> Dashboard</a>
  <a href="./view.php"><i class="fa fa-camera"></i> Manage Images</a>
  <a href="view_enquiries.php"><i class="fa fa-envelope"></i> View Enquiries</a>
  <a href="viewMessages.php"><i class="fa fa-envelope"></i> View Messages</a>
</div>
