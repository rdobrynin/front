<?php include('templates/header.php');?>
<?php include('templates/head.php');?>
  <div class="legend">
              <h2>Resources & Turnover</h2>
      </div>
  <div class="container-fluid tab-container">
    <div class="row">
        <ul class="nav nav-tabs" id="resTab">
            <li class="active first-tab"><a href="#res_info_tab">Information</a></li>
            <li><a href="#res_over_tab">Turnover</a></li>
            <li><a href="#res_charts_tab">Data charts</a></li>
        </ul>
    </div>
  </div>
  <div class="container-fluid wrapper">
     <div class="row">
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
                             <td>
                                 <span style="font-size: 4.5em; letter-spacing: -5px;">4</span>
                                 <span style="font-size: 1.4em;">Cores Used (100%)</span>
                                 <span class="info">4 cores</span>
                                 <button class="btn btn-primary">Upgrade</button>
                             </td>
                             <td>
                                 <span style="font-size: 4.5em; letter-spacing: -5px;">52</span>
                                 <span style="font-size: 1.4em;">GB Used (20%)</span>
                                 <span class="info" >4 cores</span>
                             </td>
                             <td>
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
  </div>
  <div class="legend">
      <h2>Virtual Machines</h2>
  </div>

  <div class="container-fluid tab-container">
      <div class="row">
          <ul class="nav nav-tabs" id="vmTab">
              <li class="active first-tab"><a href="#my_vm_tab">My Virtual Machines(4)</a></li>
              <li><a href="#client_vm_tab">Clients Virtual Machines</a></li>
          </ul>
      </div>
  </div>
  <div class="container-fluid wrapper">
      <div class="row">
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
                          <td><a href="#">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
                      </tr>
                      <tr>
                          <td>#4243</td>
                          <td><a href="#">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
                      </tr>
                      <tr class="disabled">
                          <td>#4243</td>
                          <td><a class="disabled" href="#">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch disabled"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-small btn-disabled">Reboot</button></td>
                      </tr>
                      <tr>
                          <td>#4243</td>
                          <td><a href="#">admin_machine_test</a></td>
                          <td>pvmadmin</td>
                          <td>Windows Standard Edition R2x64 xen</td>
                          <td>20 GB</td>
                          <td>1.234 GB</td>
                          <td>1</td>
                          <td>88.196.221.197</td>
                          <td><span class="switch"><a href="#">ON</a></span></td>
                          <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
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
  </div>
  <div class="legend">
      <h2>Latest activity logs</h2>
  </div>
 <div class="block">
     <div class="container-fluid">
         <div class="row">
             <form name="filter_form" id='filter_form' class="form-inline">
                 <div class="form-group col-xs-12 col-sm-6 col-lg-3">
                     <div class="col-xs-8">
                         <input type="text" class="form-control" id="InputFieldA" placeholder="InputFieldA">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-6 col-lg-3">
                     <div class="col-xs-8">
                         <input type="text" class="form-control" id="InputFieldB" placeholder="InputFieldB">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-6 col-lg-3">
                     <button type="submit" class="btn ">Submit Button</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
<div class="container-fluid wrapper">
    <div class="row">
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
                <td><a href="#">admin_machine_test</a></td>
                <td>pvmadmin</td>
                <td>Windows Standard Edition R2x64 xen</td>
                <td>20 GB</td>
                <td>1.234 GB</td>
                <td>1</td>
                <td>88.196.221.197</td>
                <td><span class="switch"><a href="#">ON</a></span></td>
                <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
            </tr>
            <tr>
                <td>#4243</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>pvmadmin</td>
                <td>Windows Standard Edition R2x64 xen</td>
                <td>20 GB</td>
                <td>1.234 GB</td>
                <td>1</td>
                <td>88.196.221.197</td>
                <td><span class="switch"><a href="#">ON</a></span></td>
                <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
            </tr>
            <tr class="disabled">
                <td>#4243</td>
                <td><a class="disabled" href="#">admin_machine_test</a></td>
                <td>pvmadmin</td>
                <td>Windows Standard Edition R2x64 xen</td>
                <td>20 GB</td>
                <td>1.234 GB</td>
                <td>1</td>
                <td>88.196.221.197</td>
                <td><span class="switch"><a href="#">ON</a></span></td>
                <td style="text-align: center"><button class="btn btn-small btn-disabled">Reboot</button></td>
            </tr>
            <tr>
                <td>#4243</td>
                <td><a href="#">admin_machine_test</a></td>
                <td>pvmadmin</td>
                <td>Windows Standard Edition R2x64 xen</td>
                <td>20 GB</td>
                <td>1.234 GB</td>
                <td>1</td>
                <td>88.196.221.197</td>
                <td><span class="switch"><a href="#">ON</a></span></td>
                <td style="text-align: center"><button class="btn btn-small">Reboot</button></td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
  </body>
</html>
