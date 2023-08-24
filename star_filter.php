<form method="POST" action="report-filter.php" target="_blank" >      
 <div class="modal-sm">
   <div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Print Filter ?
    </h4>
  </div>
  <div class="modal-body">
    <div class="control-group">
   <label class="col-sm-2 control-label">Star Date</label>
   <div class="col-sm-6">
   <input type="date" name="from" id="stayf" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="width:515px;height:25px">
   </div>
     </div>
     <div class="control-group">           
   <label class="col-sm-2 control-label">End Date</label>
   <div class="col-sm-8">
   <input type="date" name="end" id="stayf" value="<?php echo date('Y-m-d'); ?>" class="span5" style="width:515px;height:25px">
   </div>
     </div>
  </div>        
  
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel
    </button>
    <button class="btn btn-info" type="submit" name="submit" value="proses" onclick="return valid();">Search
    </button>
  </div>
   </div>
 </div>
</form>