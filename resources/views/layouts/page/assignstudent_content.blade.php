

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <h1 className="addStudentTitle">Assign student</h1>
<form>
   

    <div class="form-row" >
      <div class="form-group col-md-6" >
        <label for="inputIndexno">Index number</label>
        <input type="text" class="form-control" id="inputindexno" placeholder="Index no">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Academic year</label>
            <select id="inputState" class="form-control">
              <option selected>1 st year</option>
              <option>2 nd year</option>
              <option>3 rd year</option>
              <option>4 th year</option>
            </select>
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

      <div class="form-row" >
        <div class="form-group col-md-6" >
          <label for="inputIndexno">Assign hostel</label>
          <input type="text" class="form-control" id="inputAssignHostel" placeholder="Hostel name">
          <a href=""  class="btn btn-primary" role="button">Assign hostel</a>
        </div>
      </div>

        <div class="form-row" >
          <div class="form-group col-md-6" >
            <label for="inputIndexno">Assign room</label>
            <input type="text" class="form-control" id="inputAssignRoom" placeholder="Room no">
            <a href=""  class="btn btn-primary" role="button">Assign room</a>
          </div>
        </div>
         
        <div class="form-row" >
          <div class="form-group col-md-6" >
            <label for="inputIndexno">Assign bed</label>
            <input type="text" class="form-control" id="inputAssignBed" placeholder="Bed no">
            <a href=""  class="btn btn-primary" role="button">Assign bed</a>
          </div>
        </div>
  
      <div><button type="submit" class="btn btn-danger">Add student</button></div>

</form>

  </div>
</div>
