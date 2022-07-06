 <!-- Modal New User Account -->
 <div class="modal fade" id="add-users" style="display: none;" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Add New Account</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <form action="php/add.php" enctype="multipart/form-data" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="avatar">Avatar</label>
                         <div class="input-group">
                             <div class="custom-file">
                                 <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                 <label class="custom-file-label" for="avatar">Choose file</label>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="fname">First Name</label>
                         <input type="text" class="form-control" name="fname" required />
                     </div>
                     <div class="form-group">
                         <label for="lname">Last Name</label>
                         <input type="text" class="form-control" name="lname" required />
                     </div>
                     <div class="form-group">
                         <label for="email">Email Address</label>
                         <input type="email" class="form-control" name="email" required />
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="password">Password</label>
                                 <input type="password" class="form-control" name="password" required />
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="cpassword">Confirm Password</label>
                                 <input type="password" class="form-control" name="cpassword" required />
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button class="btn btn-danger" data-dismiss="modal">Close</button>
                     <button name="new-account" class="btn btn-primary" type="submit">Save</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

 <div class="modal fade" id="edit-users" style="display: none;" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Edit Account</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <form action="php/edit.php" enctype="multipart/form-data" method="post">
                 <div class="modal-body">
                     <input type="text" name="user_id" class="user_id" hidden>
                     <div class="form-group">
                         <label for="avatar">Avatar</label>
                         <div class="input-group">
                             <div class="custom-file">
                                 <input type="file" name="avatar" class="custom-file-input">
                                 <label class="custom-file-label" for="avatar">Choose file</label>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="fname">First Name</label>
                         <input type="text" class="fname form-control" name="fname" required />
                     </div>
                     <div class="form-group">
                         <label for="lname">Last Name</label>
                         <input type="text" class="lname form-control" name="lname" required />
                     </div>
                     <div class="form-group">
                         <label for="email">Email Address</label>
                         <input type="email" class="email form-control" name="email" required />
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="password">Password</label>
                                 <input type="password" class="form-control" name="password" />
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="cpassword">Confirm Password</label>
                                 <input type="password" class="form-control" name="cpassword" />
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button class="btn btn-danger" data-dismiss="modal">Close</button>
                     <button name="update-account" class="btn btn-primary" type="submit">Save Changes</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

 <!-- Modal New Add Record -->
 <div class="modal fade" id="add-records" style="display: none;" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Add New Record</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <form action="php/add.php" enctype="multipart/form-data" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="fname">Name</label>
                         <input type="text" class="form-control" name="name" required />
                     </div>
                     <div class="form-group">
                         <label>Date of Birth</label>
                         <div class="input-group date" id="birthday" data-target-input="nearest">
                             <div class="input-group-prepend" data-target="#birthday" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                             </div>
                             <input type="text" name="birthday" class="form-control datetimepicker-input" data-target="#birthday">
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Date of Death</label>
                         <div class="input-group date" id="death" data-target-input="nearest">
                             <div class="input-group-prepend" data-target="#death" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                             </div>
                             <input type="text" name="deathday" class="form-control datetimepicker-input" data-target="#death">
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="fname">Description</label>
                         <input type="text" class="form-control" name="description" required />
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button class="btn btn-danger" data-dismiss="modal">Close</button>
                     <button name="new-record" class="btn btn-primary" type="submit">Save</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

 <div class="modal fade" id="edit-records" style="display: none;" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Edit Record</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <form action="php/edit.php" enctype="multipart/form-data" method="post">
                 <input type="text" name="record_id" class="record_id" hidden>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control name" name="name" required />
                     </div>
                     <div class="form-group">
                         <label>Date of Birth</label>
                         <div class="input-group date" id="editbirthday" data-target-input="nearest">
                             <div class="input-group-prepend" data-target="#editbirthday" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                             </div>
                             <input type="text" name="birthday" class="form-control datetimepicker-input" data-target="#editbirthday" />
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Date of Death</label>
                         <div class="input-group date" id="editdeath" data-target-input="nearest">
                             <div class="input-group-prepend" data-target="#editdeath" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                             </div>
                             <input type="text" name="deathday" class="form-control datetimepicker-input" data-target="#editdeath" />
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="description">Description</label>
                         <input type="text" class="form-control description" name="description" required />
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button class="btn btn-danger" data-dismiss="modal">Close</button>
                     <button name="update-record" class="btn btn-primary" type="submit">Save Changes</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>