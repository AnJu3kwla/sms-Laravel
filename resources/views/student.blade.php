<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
    <!-- <h1>Student Management System</h1> -->

    @include("navbar")

    <div class="row header-container justify-content-center">
      <div class="header">
        <h1>Student Management System</h1>
      </div>
    </div>

    @if($layout == 'index')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5"></section>
        </div>
      </div>

    @elseif($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">

            <div class="card mb-3">
              <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Enter the information of new students</h5>
                <form action="{{url('/store')}}" method="get">
                  @csrf
                  <div class="form-group">
                    <label>CNE</label>
                    <input type="text" name="cne" class="form-control" placeholder="Enter CNE">
                  </div>
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstName" class="form-control" placeholder="Enter First name">
                  </div>
                  <div class="form-group">
                    <label>Second Name</label>
                    <input type="text" name="secondName" class="form-control" placeholder="Enter Second name">
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Enter the age">
                  </div>
                  <div class="form-group">
                    <label>Speciality</label>
                    <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                  </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>

    @elseif($layout == 'show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentslist")
          </section>
          <section class="col"></section>
        </div>
      </div>

    @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">
          <div class="card mb-3">
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Update Information of Students</h5>
              <form action="{{url('/update/'.$student->id)}}" method="post">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input value="{{$student->one}}" type="text" name="cne" class="form-control" placeholder="Enter CNE">
              </div>
              <div class="form-group">
                <label>First Name</label>
                <input value="{{$student->firstName}}" type="text" name="firstName" class="form-control" placeholder="Enter First name">
              </div>
              <div class="form-group">
                <label>Second Name</label>
                <input value="{{$student->secondName}}" type="text" name="secondName" class="form-control" placeholder="Enter Second name">
              </div>
              <div class="form-group">
                <label>Age</label>
                <input value="{{$student->age}}" type="text" name="age" class="form-control" placeholder="Enter the age">
              </div>
              <div class="form-group">
                <label>Speciality</label>
                <input value="{{$student->speciality}}" type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
              </div>
              <input type="submit" class="btn btn-info" value="Update">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>
            </div>
          </div>
          
          </section>
        </div>
      </div>
    @endif

    <footer>
      
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>