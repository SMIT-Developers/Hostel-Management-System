

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center" >
       
  <form class="row d-flex justify-content-center align-items-center">
    
    <h1 class="text-center pb-2">Add Bed</h1>
      <div class="form-group row justify-content-center align-items-center">
        <label for="inputhostelname" class="col-sm-2 col-form-label">Hostel name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputhostelname" placeholder=" hostel name">
        </div>
      </div>
  
      <div class="form-group row justify-content-center align-items-center">
        <label for="inputexsistbeds" class="col-sm-2 col-form-label">Number of beds exsist</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputexsistbeds" placeholder="No of beds exsist">
        </div>
      </div>

      <div class="form-group row justify-content-center align-items-center">
        <label for="inputnewbeds" class="col-sm-2 col-form-label">Number of  new beds </label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputnewbeds" placeholder="No of new beds">
        </div>
      </div>

      <div class="form-group row justify-content-center align-items-center">
      <h6 class="d-flex justify-content-center align-items-center">Offered for</h6>
        <div class="form-check form-check-inline  justify-content-center align-items-center">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label pr-2" for="inlineRadio1">Male</label>
       
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
      </div>
      <div class="form-group row justify-content-center align-items-center">
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
  
  
      <div class="col-sm-15 d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-warning ">Add </button>
        </div>
      </div>
    
  </form>
  </div>
    </div>
  </div>
  