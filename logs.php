<?php include('templates/header.php');?>
<?php include('templates/alerts.php');?>
<!-- Main top navbar -->
<div class="navbar hidden-xs " role="navigation" id="elion-common-nav">
  <div class="container-fluid">
      <div class="navbar-collapse collapse" id="top-menu">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Eraklient</a></li>
          <li><a href="#about">Äriklient</a></li>
          <li><a href="https://pood.elion.ee/">E-pood</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">OneSpot<span class="ts-icon-arrow-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav pull-right">
          <li><a href="#"><span class="ts-icon ts-icon-myaccount"></span>Usernameright</a></li>
          <li><a href="#about">My account</a></li>
          <li><a href="#contact">Log Out</a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </div>
</div>

<!--TOP NAV-->
<div class="navbar" role="navigation" id="elion-top-nav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a href="index.php"><span class="brand-top visible-xs"></span></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a href="index.php"><span class="navbar-brand"></span></a>
      </div>
      <div class="navbar-collapse collapse" id="top-main-menu">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Dashboard</a></li>
          <li><a href="vm.php">Virtual machines</a></li>
          <li class="active"><a href="logs.php">Logs</a></li>
          <li><a href="templates.php">Templates</a></li>
          <li><a href="users.php">Users</a></li>
          <li><a href="billing_plans.php">Billing Plans</a></li>
          <li><a href="reports.php">Reports</a></li>
            <li><a class="visible-xs" href="#">Help</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li><a class="help" href="#"><span class="ts-icon ts-icon-help"></span></a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </div>
</div>

<!--breadcrumbs-->
<div class="block" style="padding-bottom: 0">
    <div class="container-fluid">
        <div class="breadcrumbs">
            <a href="index.php">Dashboard&nbsp;</a><span class="ts-icon-breadcrumb-arrow"></span>Logs
        </div>
    </div>
</div>
  <div class="legend"><h2>Latest activity logs</h2></div>
<div class="block">
  <div class="container-fluid">
      <div class="control-group">
        <form class="form-inline" method="get">
          <label class="control-label">Filter logs</label>
          <select class="selectpicker">
            <option>All users</option>
            <option>Client</option>
            <option>pvmadmin</option>
            <option>Tester</option>
          </select>
          <select class="selectpicker">
            <option>All actions</option>
            <option>Build disk</option>
            <option>Configure operation system</option>
          </select>
          <button type="button" class="btn btn-sm">Filter</button>
        </form>
      </div>
  </div>
</div>
<div class="container-fluid wrapper">
    <table class="table">
      <thead>
      <tr>
        <th>REF</th>
        <th>Date</th>
        <th>User</th>
        <th>Target</th>
        <th>Action</th>
        <th>Status</th>
      </tr>
      </thead>
        <tbody>
        <tr>
            <td><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Reboot virtual machine</td>
            <td><span class="ts-icon-thick hidden-md hidden-sm hidden-xs"></span>Complete</td>
        </tr>
        <tr>
            <td><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Strartup virtual machine</td>
            <td><span class="ts-icon-time hidden-md hidden-sm hidden-xs"></span>Pending</td>
        </tr>
        <tr>
            <td><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Stop virtual machine</td>
            <td> <img class="running hidden-md hidden-sm hidden-xs" src="img/running.gif" alt="" width="17" height="17">Running</td>
        </tr>
        <tr>
            <td><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Reboot virtual machine</td>
            <td><span class="ts-icon-delete hidden-md hidden-sm hidden-xs"></span>Canceled</td>
        </tr>
        <tr>
            <td class="failed"><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Reboot virtual machine</td>
            <td><span class="ts-icon-alert hidden-md hidden-sm hidden-xs"></span>Failed</td>
        </tr>
        <tr>
            <td class="failed"><a href="#">4244</a></td>
            <td>08 Sep,2014, 12:55;15</td>
            <td>pvmadmin</td>
            <td><a href="details.php">admin_machine_test</a></td>
            <td>Reboot virtual machine</td>
            <td><span class="ts-icon-alert hidden-md hidden-sm hidden-xs"></span>Failed</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="wrapper">
    <a href="#"><span class="view-all">View all logs (139)</span></a>
</div>
<?php include('templates/footer.php'); ?>
