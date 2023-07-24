<?php
htmltage($_SESSION['EGPOSAKATinfo_name']);
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Module</li>
              <li class="breadcrumb-item active">Team member</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">                
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-H_New">
                  New
              </div>
              <!-- /.card-header -->
              <div class="modal fade" id="modal-lg-H_New">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Header item</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method = "post" action="?d=module/team_member" enctype="multipart/form-data">
                    <div class="modal-body">                      
                        <div class="row">
                          <div class="col-sm-6">                          
                            <div class="form-group">
                              <label>Select</label>
                              <select class="form-control" name="txtLang">
                                <?php
                                  if ($result_lang = $mysqli->query($qr_Lang)) {
                                     while ($row_lan = $result_lang->fetch_row()) {           
                                ?>                              
                                <option value="<?=$row_lan[0] ?>"><?=$row_lan[2] ?></option>
                                      <?php } } ?>                                    
                              </select>
                            </div>
                          </div>                         
                        </div>
                        <div class="row">
                          <div class="col-sm-12">                            
                            <!-- text input -->
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="txtTitle" class="form-control" placeholder="Enter ..." required="">
                            </div>                            
                          </div>                   
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="txtDescription" rows="3" placeholder="Enter ..." required=""></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">                            
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Active</label>  
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cbActive" value="1" checked="">
                                <label class="form-check-label">Active</label>
                              </div>                        
                            </div>
                          </div>                          
                        </div>                      
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" name="btnSaveNew_H" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              <div class="card-body">
                <table id="example12" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">Languages</th>                    
                    <th>Title</th>
                    <th>Description</th>                                     
                    <th width="5%" align="center">Active</th>
                    <th width="5%" align="center">Edit</th>
                    <th width="5%" align="center">Del</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                    if ($result = $mysqli->query($qr_Header)) {
                        while ($row = $result->fetch_row()) {
                          $tHeaderID = base64_encode($row[0]."tasoksavhay");
                          $activeVal_H = base64_encode($row[4]."tasoksavhay");
                          $GetLang_H = base64_encode($row[3]."tasoksavhay");

                   ?>
                    <div class="modal fade" id="modal-lg-Edit_H<?=$i?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Header Item</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method = "post" action="?d=module/team_member" enctype="multipart/form-data">
                          <div class="modal-body">                      
                              <div class="row">
                                <div class="col-sm-6">                          
                                  <div class="form-group">
                                    <label>Select</label>
                                    <input type="hidden" name="txtId"  value="<?=$row[0]?>" required="">
                                    <select class="form-control" name="txtLang">
                                      <?php
                                        if ($result_lang = $mysqli->query($qr_Lang)) {
                                          while ($row_lan = $result_lang->fetch_row()) {
                                            $selected = $row_lan[0] == $row[3] ? "selected" : ""; 
                                      ?>
                                      
                                      <option value="<?=$row_lan[0] ?>" <?= $selected ?>><?=$row_lan[2] ?></option>
                                      <?php } } ?>                               
                                    </select>
                                  </div>
                                </div>                        
                              </div>
                              <div class="row">
                                <div class="col-sm-12">                            
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="txtTitle" class="form-control" placeholder="Enter ..." value="<?=$row[1]?>" required="">
                                  </div>                            
                                </div>                   
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="txtDescription" rows="3" placeholder="Enter ..." required=""><?=$row[2]?></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">                                  
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Active</label>  
                                    <div class="form-check">
                                      <?php 
                                        if ($row[4] == "1") {
                                            $activeCheck = "checked";
                                        } else {
                                          $activeCheck = "";
                                        }
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="cbActive" value="1" <?=$activeCheck?>>
                                      <label class="form-check-label">Active</label>
                                    </div>                        
                                  </div>
                                </div>                              
                              </div>                      
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="btSaveEdit_H" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <tr>
                      <td align="center"><?=$row[9]?></td>
                      <td><?=$row[1]?></td>
                      <td><?=$row[2]?></td>                                                    
                      <td align="center">
                        <?php if ($row[4] == "1") {?>
                          <a href ="?d=module/team_member&tHeader=<?=$tHeaderID?>&active=<?=$activeVal_H ?>&lang=<?=$GetLang_H?>" ><i class="far fa-check-square"></i></a>
                        <?php } else { ?>
                          <a href ="?d=module/team_member&tHeader=<?=$tHeaderID?>&active=<?=$activeVal_H ?>&lang=<?=$GetLang_H?>" ><i class="fal fa-square-full"></i></a>
                        <?php } ?>
                      </td>
                      <td align="center"><a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit_H<?=$i?>"></i></a></td>
                      <td align="center">
                        <a href ="?d=module/team_member&tHeader=<?=$tHeaderID?>&del=<?=$activeVal_H ?>&lang=<?=$GetLang_H?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')" ><i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  <?php $i++; } } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>    
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">                
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                  New
              </div>
              <!-- /.card-header -->
              <div class="modal fade" id="modal-lg-New">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Member</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method = "post" action="?d=module/team_member" enctype="multipart/form-data">
                    <div class="modal-body">                      
                        <div class="row">
                          <div class="col-sm-6">                          
                            <div class="form-group">
                              <label>Select</label>
                              <select class="form-control" name="txtLang">
                                <?php
                                  if ($result_lang = $mysqli->query($qr_Lang)) {
                                     while ($row_lan = $result_lang->fetch_row()) {           
                                ?>                              
                                <option value="<?=$row_lan[0] ?>"><?=$row_lan[2] ?></option>
                                      <?php } } ?>                                    
                              </select>
                            </div>
                          </div>                        
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Full name</label>
                              <input type="text" name="txtFullname" class="form-control" placeholder="Full name ..." required="">
                            </div>                            
                          </div>
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Position</label>
                              <input type="text" name="txtPosition" class="form-control" placeholder="Position ..." required="">
                            </div>                            
                          </div>  
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="text" name="txtFacebook" class="form-control" placeholder="Facebook ..." required="">
                            </div>                            
                          </div>
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Whatsapp</label>
                              <input type="text" name="txtWhatsapp" class="form-control" placeholder="Whatsapp ..." required="">
                            </div>                            
                          </div>  
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Mobile</label>
                              <input type="text" name="txtMobile" class="form-control" placeholder="Mobile ..." required="">
                            </div>                            
                          </div>                        
                        </div>
                        <div class="row">          
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="txtDescription" rows="3" placeholder="Enter ..." required=""></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">   
                          <div class="col-sm-12">
                            <div class="form-group">   
                              <label>Image</label>                
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="txtImage">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Active</label>  
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cbActive" value="1" checked="">
                                <label class="form-check-label">Active</label>
                              </div>                        
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Order</label>  
                              <div class="form-check">
                                <input class="form-check-input" type="number" name="txtTopno" min="0">                              
                              </div>                        
                            </div>
                          </div> 
                        </div>                      
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" name="btnSaveNew" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">Languages</th>
                    <th width="5%">Order</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Descript</th>
                    <th>Facebook</th>
                    <th>Whatsapp</th>
                    <th>Mobile</th>
                    <th>Images</th>                                  
                    <th width="5%" align="center">Active</th>
                    <th width="5%" align="center">Edit</th>
                    <th width="5%" align="center">Del</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                    if ($result = $mysqli->query($qr_team_member)) {
                        while ($row = $result->fetch_row()) {
                          $team_memberID = base64_encode($row[0]."tasoksavhay");
                          $activeVal = base64_encode($row[11]."tasoksavhay");
                          $GetLang = base64_encode($row[10]."tasoksavhay");
                          $memberName = base64_encode($row[3]."tasoksavhay");
                   ?>
                    <div class="modal fade" id="modal-lg-Edit<?=$i?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Team member Item</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method = "post" action="?d=module/team_member" enctype="multipart/form-data">
                          <div class="modal-body">                      
                        <div class="row">
                          <div class="col-sm-6">                          
                            <div class="form-group">
                              <label>Select</label>
                              <input type="hidden" name="txtId"  value="<?=$row[0]?>" required="">
                              <select class="form-control" name="txtLang">
                                <?php
                                  if ($result_lang = $mysqli->query($qr_Lang)) {
                                     while ($row_lan = $result_lang->fetch_row()) {           
                                ?>                              
                                <option value="<?=$row_lan[0] ?>"><?=$row_lan[2] ?></option>
                                      <?php } } ?>                                    
                              </select>
                            </div>
                          </div>                        
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Full name</label>
                              <input type="text" name="txtFullname" class="form-control" placeholder="Full name ..." required="" value="<?=$row[3]?>">
                            </div>                            
                          </div>
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Position</label>
                              <input type="text" name="txtPosition" class="form-control" placeholder="Position ..." required="" value="<?=$row[6]?>">
                            </div>                            
                          </div>  
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Facebook</label>
                              <input type="text" name="txtFacebook" class="form-control" placeholder="Facebook ..." required="" value="<?=$row[7]?>">
                            </div>                            
                          </div>
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Whatsapp</label>
                              <input type="text" name="txtWhatsapp" class="form-control" placeholder="Whatsapp ..." required="" value="<?=$row[8]?>">
                            </div>                            
                          </div>  
                        </div>
                        <div class="row">
                          <div class="col-sm-6">                            
                            <div class="form-group">
                              <label>Mobile</label>
                              <input type="text" name="txtMobile" class="form-control" placeholder="Mobile ..." required="" value="<?=$row[9]?>">
                            </div>                            
                          </div>                        
                        </div>
                        <div class="row">          
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="txtDescription" rows="3" placeholder="Enter ..." required=""><?=$row[4]?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">   
                          <div class="col-sm-12">
                            <div class="form-group">   
                              <label>Image</label>                
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="txtImage">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Active</label>  
                              <div class="form-check">
                                <?php 
                                        if ($row[11] == "1") {
                                            $activeCheck = "checked";
                                        } else {
                                          $activeCheck = "";
                                        }
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="cbActive" value="1" <?=$activeCheck?>>
                                      <label class="form-check-label">Active</label>
                              </div>                        
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Order</label>  
                              <div class="form-check">
                                <input class="form-check-input" type="number" name="txtTopno" min="0" value="<?=$row[2]?>">                              
                              </div>                        
                            </div>
                          </div> 
                        </div>                      
                    </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="btSaveEdit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <tr>
                      <td align="center"><?=$row[16]?></td>
                      <td align="center"><?=$row[2]?></td>
                      <td><a href="?d=module/team_member_detail&team_member=<?=$team_memberID?>&member=<?=$memberName?>"><?=$row[3]?></a></td>
                      <td><?=$row[6]?></td>
                      <td><?=$row[4]?></td>
                      <td><?=$row[7]?></td>
                      <td><?=$row[8]?></td>
                      <td><?=$row[9]?></td>
                      <td><?=$row[5]?></td>                                      
                      <td align="center">
                        <?php if ($row[11] == "1") {?>
                          <a href ="?d=module/team_member&team_member=<?=$team_memberID?>&active=<?=$activeVal ?>&lang=<?=$GetLang?>" ><i class="far fa-check-square"></i></a>
                        <?php } else { ?>
                          <a href ="?d=module/team_member&team_member=<?=$team_memberID?>&active=<?=$activeVal ?>&lang=<?=$GetLang?>" ><i class="fal fa-square-full"></i></a>
                        <?php } ?>
                      </td>
                      <td align="center"><a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?=$i?>"></i></a></td>
                      <td align="center">
                        <a href ="?d=module/team_member&team_member=<?=$team_memberID?>&del=<?=$activeVal ?>&lang=<?=$GetLang?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')" ><i class="far fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  <?php $i++; } } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>