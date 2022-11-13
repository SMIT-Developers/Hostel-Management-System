

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <h1 className="addStudentTitle">Change hostel</h1>
   
<form>




    
    <div class="form-group row">
      <label for="inputindexno" class="col-sm-2 col-form-label">Student index number</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputindexno" placeholder="Index number">
      </div>
    </div>


    <h6>Gender</h6>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>

    <div class="form-group row">
      <label for="inputindexno" class="col-sm-2 col-form-label">Academic year</label>
      <div class="col-sm-5">
        <select id="inputState" class="form-control">
          <option selected>1 st year</option>
          <option>2 nd year</option>
          <option>3 rd year</option>
          <option>4 th year</option>
        </select>
      </div>
    </div>

  
    <div class="form-group row">
      <label for="inputCurrentHostel" class="col-sm-2 col-form-label">Current Hostel</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCurrentHostel" placeholder="Hostel name">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputCurrentRoom" class="col-sm-2 col-form-label">Current room</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCurrentRoom" placeholder="Room number">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputCurrentBed" class="col-sm-2 col-form-label">Current bed</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCurrentBed" placeholder="Bed number">
      </div>
    </div>



    <div class="form-group row">
      <label for="inputnewHostel" class="col-sm-2 col-form-label">New Hostel</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputnewHostel" placeholder=" New hostel name">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputNewRoom" class="col-sm-2 col-form-label">New room</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputNewRoom" placeholder=" New room number">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputNewtBed" class="col-sm-2 col-form-label">New bed</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputNewtBed" placeholder=" New bed number">
      </div>
    </div>

    <div class="col-sm-15">
        <button type="submit" class="btn btn-primary">Change student's hostel</button>
      </div>
    </div>
  
   

    
   
      {{-- <div><button type="submit" class="btn btn-danger">Add student</button></div> --}}

</form>

  </div>
</div>
