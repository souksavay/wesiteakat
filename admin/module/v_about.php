<?php
htmltage($_SESSION['EGPOSAKATinfo_name']);
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Module</li>
              <li class="breadcrumb-item active">About</li>
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
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                  New
              </div>
              <!-- /.card-header -->
              <div class="modal fade" id="modal-lg-New">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Service Item</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method = "post" action="?d=module/about" enctype="multipart/form-data">
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Images</th>                                  
                    <th width="5%" align="center">Active</th>
                    <th width="5%" align="center">Edit</th>
                    <th width="5%" align="center">Del</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                    if ($result = $mysqli->query($qr_about)) {
                        while ($row = $result->fetch_row()) {
                          $aboutID = base64_encode($row[0]."tasoksavhay");                         
                          $activeVal = base64_encode($row[6]."tasoksavhay");
                          $GetLang = base64_encode($row[7]."tasoksavhay");

                   ?>
                    <div class="modal fade" id="modal-lg-Edit<?=$i?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">About Item</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method = "post" action="?d=module/about" enctype="multipart/form-data">
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
                                            $selected = $row_lan[0] == $row[7] ? "selected" : ""; 
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
                                        if ($row[6] == "1") {
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
                                      <input class="form-check-input" type="number" name="txtTopno" min="0" value="<?=$row[3]?>">                              
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
                      <td align="center"><?=$row[10]?></td>
                      <td align="center"><?=$row[3]?></td>
                      <td><?=$row[1]?></td>
                      <td><?=$row[2]?></td>
                      <td><?=$row[4]?></td>
                      <td align="center">
                        <?php if ($row[6] == "1") {?>
                          <a href ="?d=module/about&about=<?=$aboutID?>&active=<?=$activeVal ?>&lang=<?=$GetLang?>" ><i class="far fa-check-square"></i></a>
                        <?php } else { ?>
                          <a href ="?d=module/about&about=<?=$aboutID?>&active=<?=$activeVal ?>&lang=<?=$GetLang?>" ><i class="fal fa-square-full"></i></a>
                        <?php } ?>
                      </td>
                      <td align="center"><a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?=$i?>"></i></a></td>
                      <td align="center">
                        <a href ="?d=module/about&about=<?=$aboutID?>&del=<?=$activeVal ?>&lang=<?=$GetLang?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')" ><i class="far fa-trash-alt"></i></a>
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