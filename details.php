<?php include('templates/header.php');?>
<!--Primary alert-->
<div class="alert alert-warning alert-dismissible fade in" role="alert" id="test-alert-warning">
  <div class="pull-right">
    <span class="ts-icon-arrow-right"></span>
    <a href="#"><b>Read more</b></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  </div>
  <button type="button" class="close pull-right" data-dismiss="alert">
    <span aria-hidden="true" class="close-alert">&times;</span>
    <span class="sr-only">Close</span>
  </button>
  <span class="ts-icon-info"></span>
     <span style="padding-left: 33px;"> <strong>Primary alert:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>113</b> days
     </span>
</div>

<!-- Main top navbar -->
<div class="navbar hidden-xs " role="navigation" id="elion-common-nav">
  <div class="container-fluid">
      <div class="navbar-collapse collapse" id="top-menu">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Eraklient</a></li>
          <li><a href="#about">Äriklient</a></li>
          <li><a href="https://pood.elion.ee/">E-pood</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">OneSpot</a>
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
        </ul>
        <ul class="nav navbar-nav pull-right">
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
  <div class="legend"><h2><span class="icon-cloud"></span> admin_vm_password</h2></div>
    <div class="container-fluid" style="border-bottom:1px solid #dadada;">
       <div class="row">
           <div class="navbar-collapse collapse" id="vm_submenu">
               <ul class="nav navbar-nav">
                   <li class="active"><a href="#">Information</a></li>
                   <li class="dropdown">
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
<!--                       <ul class="dropdown-menu" role="menu">-->
<!--                           <li><a href="#">Delete</a></li>-->
<!--                           <li class="dropdown-submenu">-->
<!--                               <a tabindex="-1" href="#">Edit<span class="ts-icon-arrow-right"></span></a>-->
<!--                               <ul class="dropdown-menu">-->
<!--                                   <li><a tabindex="-1" href="#">Edit properties</a></li>-->
<!--                                   <li><a tabindex="-1" href="#">Disk</a></li>-->
<!--                               </ul>-->
<!--                           </li>-->
<!--                       </ul>-->
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

<div class="system-data-control col-md-4">
    <img src="img/win_icon.png" alt="" width="148" height="140">
    <span class="vm-label">admin_vm_password</span>
    <span class="vm-os-name">Windows 2012 Standard Edition R2 x64 xen</span>
    <span class="vm-status">The machine is running</span>
    <div class="system-buttons">
        <button type="button" class="btn btn-switch btn-md">ON</button>
        <button type="button" class="btn btn-md">Reboot</button>
        <button type="button" class="btn btn-md">Console</button>
    </div>
</div>

<div class="system-data-info col-md-8">
    <div class="col-md-6">
          <h4>Information</h4>
        <dl class="dl-horizontal">
            <dt>Hostname</dt>
            <dd>localhost</dd>
            <dt>Hypervisor</dt>
            <dd>Host4</dd>
            <dt>Login</dt>
            <dd>root / 0xkC2E?9udjt</dd>
        </dl>
        <h4>Configuration</h4>
        <dl class="dl-horizontal">
            <dt>Memory</dt>
            <dd>1.024 GB</dd>
            <dt>CPUs</dt>
            <dd>1 CPUs</dd>
            <dt>Disk Size</dt>
            <dd>20 GB</dd>
            <dt>Backups</dt>
            <dd>1/9332 MB</dd>
            <dt>Network speed</dt>
            <dd>Unlimited</dd>
            <dt>IP addresses</dt>
            <dd>89.190.57.192</dd>
            <dt id="show-id"><a href="#">show IP addresses(7)</a></dt>
            <dd id="show-id-data">89.190.57.191, 89.190.57.192, 89.190.57.193, 89.190.57.194, 89.190.57.195, 89.190.57.196, 89.190.57.196</dd>
        </dl>

    </div>
        <div class="col-md-6">
            <h4>Price per hour (EUR)</h4>
            <dl class="dl-horizontal">
                <dt>Online</dt>
                <dd><span class="ts-icon-circle on">0.042</span></dd>
                <dt>Offline</dt>
                <dd><span class="ts-icon-circle off">0.042</span></dd>
                <dt>Client price</dt>
                <dd><span class="ts-icon-circle on">0.052</span></dd>
            </dl>
            <h4>Options</h4>
            <dl class="dl-horizontal">
                <dt>Autobackup</dt>
                <dd><a href="#"><span class="onoff">OFF</span></a></dd>
            </dl>
            <span><a href="#">Edit machine</a></span>
            <span><a href="#">Edit disk</a></span>
        </div>
</div>

  <div class="legend">
      <h2>Latest activity logs</h2>

  </div>
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
                  <option>Observer</option>
                </select>
              <select class="selectpicker">
                <option>All actions</option>
                <option>Build disk</option>
                <option>Destroy disk</option>
                  <option>Reboot vm</option>
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
                <td><a href="#">admin_machine_test</a></td>
                <td>Reboot virtual machine</td>
                <td><span class="ts-icon-thick hidden-md hidden-sm hidden-xs"></span>Complete</td>
            </tr>
            <tr>
                <td><a href="#">4244</a></td>
                <td>08 Sep,2014, 12:55;15</td>
                <td>pvmadmin</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>Strartup virtual machine</td>
                <td><span class="ts-icon-time hidden-md hidden-sm hidden-xs"></span>Pending</td>
            </tr>
            <tr>
                <td><a href="#">4244</a></td>
                <td>08 Sep,2014, 12:55;15</td>
                <td>pvmadmin</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>Stop virtual machine</td>
                <td> <img class="running hidden-md hidden-sm hidden-xs" src="img/running.gif" alt="" width="17" height="17">Running</td>
            </tr>
            <tr>
                <td><a href="#">4244</a></td>
                <td>08 Sep,2014, 12:55;15</td>
                <td>pvmadmin</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>Reboot virtual machine</td>
                <td><span class="ts-icon-delete hidden-md hidden-sm hidden-xs"></span>Canceled</td>
            </tr>
            <tr>
                <td class="failed"><a href="#">4244</a></td>
                <td>08 Sep,2014, 12:55;15</td>
                <td>pvmadmin</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>Reboot virtual machine</td>
                <td><span class="ts-icon-alert hidden-md hidden-sm hidden-xs"></span>Failed</td>
            </tr>
            <tr>
                <td class="failed"><a href="#">4244</a></td>
                <td>08 Sep,2014, 12:55;15</td>
                <td>pvmadmin</td>
                <td><a href="#">admin_machine_test</a></td>
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
