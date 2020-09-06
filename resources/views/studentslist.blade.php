<div class="card mb-3">
  <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find all the inforamation about students in the system</p>
    
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student) 
    <tr> 
      <td>{{ $student->one}}</td>
      <td>{{ $student->firstName}}</td>
      <td>{{ $student->secondName}}</td>
      <td>{{ $student->age}}</td>
      <td>{{ $student->speciality}}</td>

      <td>
        <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="#" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>


