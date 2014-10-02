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
                <li><a href="logs.php">Logs</a></li>
                <li><a href="templates.php">Templates</a></li>
                <li><a href="users.php">Users</a></li>
                <li class="active"><a href="billing_plans.php">Billing Plans</a></li>
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
            <a href="index.php">Dashboard&nbsp;</a><span class="ts-icon-breadcrumb-arrow"></span><a href="billing_plans.php">Billing plans&nbsp;</a>
            <span class="ts-icon-breadcrumb-arrow"></span>Create Billing Plan
        </div>
    </div>
</div>
  <div class="legend"><h2><span class="icon-billing"></span>create billing plan</h2></div>
    <div class="container-fluid">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label" for="billing_label">Label</label>
                <div class="controls col-md-3">
                    <input type="text" class="form-control" id="billing_label" placeholder="label">
                </div>
            </div>
        </form>
    </div>
<div class="container-fluid wrapper">
    <table class="table">
        <thead>
        <tr>
            <th>Billing Plan label</th>
            <th># Of Clients</th>
            <th>Note</th>
            <th>Updated</th>
            <th style="border-left:0;"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Sliver Status Client(-15%)</td>
            <td>62</td>
            <td><input type="text" class="input-sm form-control" name="add_note" placeholder="add a note..."></td>
            <td>13 Aug, 2014 08:00:18</td>
            <td style="text-align: center;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>Sliver Status Client(-15%)</td>
            <td>62</td>
            <td><input type="text" class="input-sm form-control" name="add_note" placeholder="add a note..."></td>
            <td>13 Aug, 2014 08:00:18</td>
            <td style="text-align: center;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>Sliver Status Client(-15%)</td>
            <td>62</td>
            <td><input type="text" class="input-sm form-control" name="add_note" placeholder="add a note..."></td>
            <td>13 Aug, 2014 08:00:18</td>
            <td style="text-align: center;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        <tr>
            <td>Sliver Status Client(-15%)</td>
            <td>62</td>
            <td><input type="text" class="input-sm form-control" name="add_note" placeholder="add a note..."></td>
            <td>13 Aug, 2014 08:00:18</td>
            <td style="text-align: center;"> <button class="btn btn-td">Edit</button></td>
        </tr>
        </tbody>
    </table>
    <button onclick="window.location.href='/index.php'" class="btn">Create new billing plan</button>
</div>
<?php include('templates/footer.php'); ?>
