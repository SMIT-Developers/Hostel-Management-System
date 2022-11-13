

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  
  <div class="container h-100">
    
    <div class="row h-100 justify-content-center align-items-center">
        
     
  <form>
    <h1 className="addStudentTitle">Student profile settings</h1>
    <br><br>
      <div class="form-group row">
        <label for="inputcpassword" class="col-sm-2 col-form-label">Current password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="cpassword" placeholder="ABC99">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputnewpassword" class="col-sm-2 col-form-label">New password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="npassword" placeholder="XYZ33">
        </div>
      </div>


      <div class="form-group row">
        <label for="inputnewpassword" class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="confirmpassword" placeholder="XYZ33">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputindexno" class="col-sm-2 col-form-label">Current phone number</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="cphonenumber" placeholder="##########">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputindexno" class="col-sm-2 col-form-label">New phone number</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nphonenumber" placeholder="##########">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Save changes</button> 
      
  </form>
  
    </div>
  </div>
  