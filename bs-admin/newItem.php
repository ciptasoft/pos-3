
<div class="new_item">
    <h4><i class="ion-edit"></i> Item Information</h4>
    <form action="<?php echo htmlspecialchars('?ref=items'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="itemName" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Item Name :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="itemName" value="" id="itemName" class="form-control form-inps">
            </div>
        </div>
        
        <div class="form-group">
            <label for="itemCategory" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Item Category :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="itemCategory" value="" id="itemCategory" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemSize" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Item Size :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="itemSize" value="" id="itemSize" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemPrice" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Item Price :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="itemPrice" value="" id="itemPrice" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemQuantity" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Item Quantity :</label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" name="itemQuantity" value="" id="itemQuantity" class="form-control form-inps">
            </div>
        </div>
        <div class="form-group">
            <label for="itemQuantity" class="col-sm-3 col-md-3 col-lg-2 control-label wide">Select image to upload: </label> 
            <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        <input type="submit" id="itemSubmit" name="itemSubmit" class="btn btn-success pull-right" value="SUBMIT">
    </form>
</div>