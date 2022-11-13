

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <h1 className="addStudentTitle">Add student</h1>
<form>
    <div class="form-row" >
      <div class="form-group col-md-6" >
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>

    <div class="form-row" >
      <div class="form-group col-md-6" >
        <label for="inputIndexno">Index number</label>
        <input type="text" class="form-control" id="inputindexno" placeholder="Index no">
      </div>
      <div class="form-group col-md-6">
        <label for="inputname">student name</label>
        <input type="text" class="form-control" id="inputname" placeholder="name">
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



      <br><br>
      <div class="form-row" >
        <div class="form-group col-md-6" >
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
        <div class="form-group col-md-6">
          <label for="inputname">phone number</label>
          <input type="text" class="form-control" id="inputphoneNumber" placeholder="phone nuber">
        </div>
      </div>

      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div> 


      <div class="form-row" >
        <div class="form-group col-md-4" >
          <label for="inputIndexno">Hostel name</label>
          <input type="text" class="form-control" id="inputiHostelName" placeholder="Hostel name">
        </div>
        <div class="form-group col-md-4">
          <label for="inputname">Room Number</label>
          <input type="text" class="form-control" id="inputroomNo" placeholder="Room Number">
        </div>
        <div class="form-group col-md-4">
          <label for="inputname">Bed Number</label>
          <input type="text" class="form-control" id="inputBedNo" placeholder="Bed Number">
        </div>

        <div class="input-group mb-2">
          <div class="form-group col-md-6">
            <h6>View CSV file</h6>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
          </div>
        </div>

      </div>

      </div>
      <button type="submit" class="btn btn-primary">Add student</button> 
</form>




  </div>
</div>
