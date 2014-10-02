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
<form>
<div class="container-fluid">
    <fieldset>
    <div class="control-group wrapper">
        <label class="control-label" for="billing_label">Billing plan label</label>
        <div class="controls col-md-3">
            <input type="text" class="form-control" id="billing_label" placeholder="label">
        </div>
    </div>
        <div class="legend">Base resources</div>
    <table class="table" id="table-create-bp">
        <thead>
        <tr>
            <th scope="col" colspan="2" style="width: 70%">Resource name</th>
            <th style="width: 15%">expenses (EUR)</th>
            <th style="width: 15%">Client price (EUR)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">CPUs (1 unit)</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        <tr>
            <td colspan="2">Memory (1 Mb)</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        <tr>
            <td class="row" rowspan="3">Data Store Zone (1Gb)</td>

        </tr>
        <tr>
            <td>Data Store Zone Tier 2</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        <tr>
            <td>Data Store Zone Tier 2</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        <tr>
            <td colspan="2">Backup disk size (1 Gb)</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        <tr>
            <td colspan="2">Template disk size (1 Gb)</td>
            <td style="font-weight: bold;">0.0055</td>
            <td><input  size="1" class="input-xs-amount form-control" type="text" value="0.005"></td>
        </tr>
        </tbody>
    </table>
    </fieldset>
    <button class="btn">Create</button>
</div>
</form>
<?php include('templates/footer.php'); ?>
