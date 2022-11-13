

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center" >
       
  <form>
    
    <h1 className="addStudentTitle">Add room</h1>
    <br><br>
      <div class="form-group row">
        <label for="inputhostelname" class="col-sm-2 col-form-label">Hostel name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputhostelname" placeholder=" hostel name">
        </div>
      </div>
  
      <div class="form-group row">
        <label for="inputexsistrooms" class="col-sm-2 col-form-label">Number of rooms exsist</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputexsistrooms" placeholder="No of rooms exsist">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputnewrooms" class="col-sm-2 col-form-label">Number of  new rooms </label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputnewrooms" placeholder="No of new rooms">
        </div>
      </div>

  
      <h6>Offered for</h6>
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
  
  
      <div class="col-sm-15">
          <button type="submit" class="btn btn-warning">Add </button>
        </div>
      </div>
    
  </form>
  </div>
    </div>
  </div>
  