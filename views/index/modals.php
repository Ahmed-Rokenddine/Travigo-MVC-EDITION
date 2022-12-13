
<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEW TRAVEL</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
		    <input id="name" type="text" class="form-control" name="name" placeholder="Destination" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		    <input id="email" type="text" class="form-control" name="email" placeholder="Location" required autocomplete="off">
			
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
			<input type="text" id="last_name" class="form-control" name="last_name" placeholder="Prix" required="true" maxlength="10" pattern="[0-9]+">
		  </div>
		 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">ADD</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modify </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
		    <input id="name" type="text" class="form-control" name="name" placeholder="Destination" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		    <input id="email" type="email" class="form-control" name="email" placeholder="Image" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
		    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Price" required autocomplete="off">
		  </div>
		  	  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Finalize</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		</form>
      </div>
    </div>
  </div>
</div>