
<div class="new_item">
    <h4><i class="ion-edit"></i> Item Information</h4>
    <form action="<?php echo htmlspecialchars('?ref=customers'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="customerName" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Customer name :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="customerName" value="" id="customerName" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="customerEmail" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Email :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="customerEmail" value="" id="customerEmail" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="customerNumber" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Phone Number :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="customerNumber" value="" id="customerNumber" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemQuantity" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Select image to upload: </label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        
        <input type="submit" id="cusSub" name="cusSub" class="btn btn-success pull-right" value="SUBMIT">
    </form>
</div>