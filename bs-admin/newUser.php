<div class="new_item">
    <h4><i class="ion-edit"></i> Item Information</h4>
    <form action="<?php echo htmlspecialchars('?ref=users'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="userFirstName" class="col-sm-3 col-md-3 col-lg-2 control-label wide">First Name :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="userFirstName" value="" id="userFirstName" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="userLastName" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Last Name :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="userLastName" value="" id="userLastName" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="userEmail" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Email :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="userEmail" value="" id="userEmail" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
        <label for="userNumber" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Phone Number :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
            <input type="text" name="userNumber" value="" id="userNumber" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="userPassword" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Password :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="password" name="userPassword" value="" id="userPassword" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemQuantity" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Select profile picture: </label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        <div class="form-group">
            <label for="itemQuantity" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Select profile picture: </label> 
            <div class="col-sm-6 form-item">
                <div>
                    <label for="quote-budget">User Type<formval><b> *</b></formval></label>                    
                    <select name="userRole" id="userRole">
                        <option value="0">- Select a type -</option>
                        <option value="1">Admin</option>
                        <option value="2">Editor</option>
                        <option value="3">Subscriber</option>
                    </select>
                </div>
            </div>
        </div>
        <input type="submit" name="userSubmit" id="userSubmit" class="btn btn-success pull-right" value="Create New User">
    </form>
</div>