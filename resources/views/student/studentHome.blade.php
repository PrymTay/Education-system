@extends('Layouts.base')
@section('content')
<p>Student</p>
{{-- <div class="overflow:auto;">
    <form class="row needs-validation" novalidate action="#" method="POST">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" required id="inputEmail4">
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
            Please provide a valid email.
          </div>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" required id="inputPassword4">
        <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
              Please provide a valid Password.
            </div> 
    </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
              Please provide a valid Address.
            </div>  
    </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div> --}}
  <div class="card">
    <div class="card-body text-center">
      <p class="card-text">A warning message, with a function attached to the "Confirm" Button...</p>
      <button class="btn bg-gradient-primary mb-0 mx-auto" onclick="material.showSwal('warning-message-and-confirmation')">Try me!</button>
    </div>
  </div>

  <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>
@endsection