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
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="top-menu">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">OnApp</a></li>
          <li><a href="#">Eraklient</a></li>
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
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/brand.png" alt="" width="127" height="40"></a>
      </div>
      <div class="navbar-collapse collapse" id="top-main-menu">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Dashboard</a></li>
          <li><a href="vm.php">Virtual machines</a></li>
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
        <div class="breadcrumbs"></div>
    </div>
</div>
  <div class="legend">
              <h2>Resources & Turnover</h2>
      </div>
  <div class="container-fluid tab-container">
        <ul class="nav nav-tabs" id="resTab">
            <li class="active first-tab"><a href="#res_info_tab">Information</a></li>
            <li><a href="#res_over_tab">Turnover</a></li>
            <li><a href="#res_charts_tab">Data charts</a></li>
        </ul>
  </div>
  <div class="container-fluid wrapper">
         <div class="tab-content">
             <div class="tab-pane active" id="res_info_tab">
                     <table class="table table-bordered"  id="table-dashboard-info">
                         <thead>
                         <tr>
                             <th>CPU</th>
                             <th>Storage</th>
                             <th>Memory</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                             <td style="width: 33.3333%">
                                 <span style="font-size: 4.5em; letter-spacing: -5px;">4</span>
                                 <span style="font-size: 1.4em;">Cores Used (100%)</span>
                                 <span class="info">4 cores</span>
                                 <button class="btn btn-primary">Upgrade</button>
                             </td>
                             <td style="width: 33.33%">
                                 <span style="font-size: 4.5em; letter-spacing: -5px;">52</span>
                                 <span style="font-size: 1.4em;">GB Used (20%)</span>
                                 <span class="info" >235 GB</span>
                             </td>
                             <td style="width: 33.33%">
                                 <span style="font-size: 4.5em; letter-spacing: -5px;">2.304</span>
                                 <span style="font-size: 1.4em;">GB Used</span>
                                 <span class="info" >Unlimited</span>
                             </td>
                         </tr>
                         </tbody>
                     </table>
             </div>
             <div class="tab-pane" id="res_over_tab">
                 <h4>Pane B</h4>
                 <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                     ac turpis egestas.</p>
             </div>
             <div class="tab-pane" id="res_charts_tab">
                 <h4>Pane C</h4>
                 <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                     ac turpis egestas.</p>
             </div>
         </div><!-- tab content -->
  </div>
  <div class="legend">
      <h2>Virtual Machines</h2>
  </div>

  <div class="container-fluid tab-container">
          <ul class="nav nav-tabs" id="vmTab">
              <li class="active first-tab"><a href="#my_vm_tab">My Virtual Machines(4)</a></li>
              <li><a href="#client_vm_tab">Clients Virtual Machines</a></li>
          </ul>
  </div>
  <div class="container-fluid wrapper">
          <div class="tab-content">
              <div class="tab-pane active" id="my_vm_tab">
                  <table class="table">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>VM label</th>
                          <th>User</th>
                          <th>OS Label</th>
                          <th>Disk size</th>
                          <th>RAM</th>
                          <th>CPU</th>
                          <th>IP</th>
                          <th>Power</th>
                          <th>Reboot</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>#4243</td>
                          <td><a href="details.php">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-icon"><span class="ts-icon-sync"></span></button></td>
                      </tr>
                      <tr>
                          <td>#4243</td>
                          <td><a href="details.php">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-icon"><span class="ts-icon-sync"></span></button></td>
                      </tr>
                      <tr class="disabled">
                          <td>#4243</td>
                          <td><a class="disabled" href="details.php">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch disabled"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-icon btn-disabled"><span class="ts-icon-sync"></span></button></td>
                      </tr>
                      <tr>
                          <td>#4243</td>
                          <td><a href="details.php">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-icon"><span class="ts-icon-sync"></span></button></td>
                      </tr>
                      </tbody>
                  </table>
                  <button class="btn">Create new machine</button>
              </div>
              <div class="tab-pane" id="client_vm_tab">
                  <h4>Pane B</h4>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                      ac turpis egestas.</p>
              </div>
          </div><!-- tab content -->
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
