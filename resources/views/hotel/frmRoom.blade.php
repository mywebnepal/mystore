<div class="row">
	<div class="col-xs-12 col-sm-4">
        <p>
        	{!! Form::text('roomName', null, ['class'=>'form-control no-border', 'placeholder'=>'room name', 'required', 'title'=>'add your room name']) !!}
        </p>
    </div>

    <div class="col-xs-12 col-sm-4">
        <p>
        	<select class="form-control no-border" name="bedName">
        	     <option value="">Select bed type</option>
        	       <option value="single_bed"><i class="fa fa-user">single bed</i></option>
        	       <option value="double_bed"><i class="fa fa-user">double beds</i></option>
        	       <option value="large_bed"><i class="fa fa-user">large bed</i></option>
        	</select>
        </p>
    </div>

    <div class="col-xs-12 col-sm-4">
        <p>
        	<select class="form-control no-border" name="fitPerson">
        	     <option value="">Select fit users in this room</option>
        	       <option value="1"><i class="fa fa-user">1 person</i></option>
        	       <option value="2"><i class="fa fa-user">2 person</i></option>
        	       <option value="3"><i class="fa fa-user">3 person</i></option>
        	       <option value="4"><i class="fa fa-user">4 person</i></option>
        	       <option value="5"><i class="fa fa-user">5 person</i></option>
        	</select>
        </p>
    </div>

    <div class="col-xs-12 col-sm-5">
       <div class="row">
       	    <div class="col-sm-6">
       	    	{!! Form::text('roomPrice', null, ['class'=>'form-control no-border', 'placeholder'=>'room price', 'required']) !!}
       	    </div>
       	    <div class="col-sm-6">
       	    	<input type="checkbox" name="fooding[]" value="breakfast">BreakFast<br>
       	    	<input type="checkbox" name="fooding[]" value="lunch">Lunch<br>
       	    	<input type="checkbox" name="fooding[]" value="dinner">Dinner<br>
       	    </div>
       </div>  
    </div>

    <div class="col-xs-12 col-sm-7">
        <p>
        	{!! Form::textarea('roomDesc', null, ['class'=>'form-control no-border', 'placeholder'=>'room description', 'required']) !!}
        </p>
    </div>

      <div class="col-xs-12 col-sm-4 col-md-4">
         <p>
             <label>Room images</label>
             <img src="" width="180" height="180" class="img img-thumbnail" id="roomImg1">
             <input name="roomImg1" type='file' onchange="readEventFeaturedImage(this, 'roomImg1');" title="select event featured image" />
         </p>
     </div>

     <div class="col-xs-12 col-sm-4 col-md-4">
         <p>
             
             <label>Room Image 2</label>
             <img src="" width="180" height="180" class="img img-thumbnail" id="roomImg2">
             <input name="roomImg2" type='file' onchange="readEventFeaturedImage(this, 'roomImg2');" title="select event featured image" />
         </p>
     </div>

     <div class="col-xs-6 col-sm-4 col-md-4">
         <p>
             <label>Room Image 3</label>
             <img src="" width="180" height="180" class="img img-thumbnail" id="roomImg3">
             <input name="roomImg3" type='file' onchange="readEventFeaturedImage(this, 'roomImg3');" title="select event featured image" />
         </p>
     </div>
</div>