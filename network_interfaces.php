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
          <li class="active"><a href="vm.php">Virtual machines</a></li>
          <li><a href="logs.php">Logs</a></li>
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
            <a href="index.php">Dashboard&nbsp;</a><span class="ts-icon-breadcrumb-arrow"></span><a href="vm.php">Virtual machines&nbsp;</a><span class="ts-icon-breadcrumb-arrow"></span>admin_machine_test
        </div>
    </div>
</div>
<div class="legend"><h2><span class="icon-cloud"></span>&nbsp;admin_vm_password</h2></div>
<div class="container-fluid" style="border-bottom:1px solid #dadada;">
    <div class="row">
        <div class="navbar-collapse collapse visible-lg" id="vm_submenu">
            <ul class="nav navbar-nav">
                <li><a href="vm.php">Information</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Network</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Firewall Rules</a></li>
                        <li><a href="network_interfaces.php">Network Interface</a></li>
                        <li><a href="#">IP addresses</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Backups</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Backups list</a></li>
                        <li><a href="#">Schedules</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Virtual machine</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Delete</a></li>
                        <li><a href="#">Edit properties</a></li>
                        <li><a href="#">Edit disk</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Power</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Reboot in recovery</a></li>
                        <li><a href="#">Suspend</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Set SSH Keys</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--           end lg menu-->
        <div class="visible-xs" id="vm_submenu_resp">
            <ul>
                <li><a href="vm.php">Information</a></li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Network</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Firewall Rules</a></li>
                        <li><a href="#">Network Interface</a></li>
                        <li><a href="#">IP addresses</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Backups</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Backups list</a></li>
                        <li><a href="#">Schedules</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Virtual machine</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Edit properties</a></li>
                        <li><a href="#">Edit disk</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Power</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Reboot in recovery</a></li>
                        <li><a href="#">Suspend</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Set SSH Keys</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="container-fluid wrapper">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10%;">Interface</th>
            <th style="width: 20%;">Network join</th>
            <th style="width: 20%">Port speed</th>
            <th style="width: 50%;">Primary interface?</th>
            <th style="border-left:0;"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>eth0</td>
            <td>194.126.100.196/26 (host5)</td>
            <td>1Mbps</td>
            <td><span class="icon-corona"></span></td>
            <td style="text-align: right;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>eth0</td>
            <td>194.126.100.196/26 (host5)</td>
            <td>1Mbps</td>
            <td></td>
            <td style="text-align: right;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>eth0</td>
            <td>194.126.100.196/26 (host5)</td>
            <td>1Mbps</td>
            <td></td>
            <td style="text-align: right;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>eth0</td>
            <td>194.126.100.196/26 (host5)</td>
            <td>1Mbps</td>
            <td></td>
            <td style="text-align: right;"> <button class="btn btn-td">Edit</button></td>
        </tr>
    </table>
    <button class="btn">Add new network interface</button>
</div>

<?php include('templates/footer.php'); ?>
