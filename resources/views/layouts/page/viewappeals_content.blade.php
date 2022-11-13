

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

  <div class="container h-100">

    <div class="row h-100 justify-content-center align-items-center">


  <form>
    <h1 className="addStudentTitle">View Appeals</h1>
      <br><br>
      <div class="form-group row">
        <label for="inputindexno" class="col-sm-2 col-form-label">Student index number</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputindexno" placeholder="UWU/IIT/18/010">
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


       <div>
      <div class="form-group row">
        <label for="inputindexno" class="col-sm-2 col-form-label">Academic year</label>
        <div class="col-sm-5">
          <select id="inputState" class="form-control">
            <option selected>3 rd year</option>
            <option>2 nd year</option>
            <option>3 rd year</option>
            <option>4 th year</option>
          </select>
        </div>
      </div>


      <div class="form-group row">
        <label for="inputindexno" class="col-sm-2 col-form-label">Appeal for</label>
        <div class="col-sm-5">
          <select id="inputState" class="form-control">
            <option selected>Change hostel</option>
            <option>Change room</option>
            <option>Change bed</option>
         </select>
        </div>
      </div>
       </div>


      <div class="form-group">
        <div class="col-sm-7">
        <label for="exampleFormControlTextarea1">Reason</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Water Problem"></textarea>
      </div>
      </div>

      <button type="submit" class="btn btn-primary">Approve appeal</button>

      <button type="submit" class="btn btn-info">Decline appeal</button>
  </form>

    </div>
  </div>


