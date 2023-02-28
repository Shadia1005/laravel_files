<div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" style="max-width:35% !important;">
          <div class="modal-content">
              <div class="modal-header bbw">
                  <h5 class="modal-title blue"><i class="fas fa-user-secret"></i> Add Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
  
              <div class="modal-body">

                  <u id="saveform_errList"></u>

                  <div class="row">
                      <div class="col-12">
                          <form action="#" method="POST" id="adddataform">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label>Address</label>
                                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label>Phone No</label>
                                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone No">
                                      </div>
                                  </div>
  
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
  
              <div class="modal-footer bg-whitesmoke">
                  <button type="button" class="btn btn-primary add_data" data-bs-target="#addModal"><i class="fa fa-save"></i>Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
              </div>
          </div>
      </div>
</div>