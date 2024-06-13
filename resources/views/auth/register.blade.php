 @extends('layouts.base')
 @section('title', 'Register')
 @section('css')
     <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
     <link rel="stylesheet" href="{{ asset('css/global.css') }}">
     <link rel="stylesheet" href="{{ asset('css/nav/welcomeNav.css') }}">
 @endsection
 {{-- @section('navBar')
     @include('layouts.welcome.welcomeNav')
 @endsection --}}
 @section('content')
     <div class="container h-100 d-flex align-items-center">
         <div class="header-login">
            <div class="container-fluid custom-container">
                <div class="image-container">
                    <a href="/"><img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></a>
                    <h2 class="display-5" >San Pedro College</h2>
                </div>
            </div>
             <div class="login-form">
                 <h2>Sign Up</h2>
                 <p>Already have an account? <a href="{{ route('auth.login') }}">Click here!</a></p>
                 <form id="createUserForm" action="/storeUser" method="POST">
                     @csrf
                     <div class="form-group">
                         <label for="">Name </label>
                         <input type="text" class="form-control" id="name" name="name"
                             placeholder="Enter your fullname here" />
                         <div id="nameError"></div>
                     </div>
                     <div class="form-group">
                         <label for="">Email </label>
                         <input type="email" class="form-control" id="email" name="email"
                             placeholder="Enter your valid email here" />
                         <div id="emailError"></div>
                     </div>
                     <div class="form-group">
                         <label for="">Password </label>
                         <input type="password" class="form-control " id="password" name="password"
                             placeholder="Type your password here" />
                         <div id="passwordError"></div>
                         <i class="las la-eye" id="togglePassword"></i>
                     </div>
                     <div class="form-group">
                         <label for="" class="confPass">Confirm Password </label>
                         <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                             placeholder="Confirm your password here" />
                         <div id="password_confirmationError"></div>
                     </div>
                     <div class="form-group">
                         <button type="submit">Sign up</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <script>
         let formCreate = document.querySelector('#createUserForm');
         formCreate.addEventListener('submit', function(event) {
             event.preventDefault();
             const formData = new FormData(this);
             axios.post('/storeUser', formData)
                 .then(response => {
                     if (response.data.status === 'success') {
                         // User creation successful, redirect to login
                         Swal.fire({
                             position: "center",
                             icon: "success",
                             title: "Registration Success",
                             text: "Verification will be sent directly to your registered email. Just wait for it.",
                             showConfirmButton: true
                         }).then(() => {
                             window.location.href = response.data.redirect;
                         });
                     } else {
                         // User creation failed, handle error
                         console.log(response.data);
                         let data = Object.entries(response.data)
                         data.forEach(function(value, index) {
                             errorMessage(value[0], response.data);
                         })
                         console.log(response.data.message);
                     }
                 })
                 .catch(error => console.error('Error:', error));
         });
     </script>

     <script>
         let inputs = document.querySelectorAll('input');
         let passwordValue = document.querySelector('#password');

         let value
         let inputType
         inputs.forEach(function(input) {
             input.addEventListener('input', function(event) {

                 targetValue = event.target.value
                 inputType = event.target.getAttribute('name')
                 var data = {}
                 data[inputType] = targetValue;

                 (inputType == 'password_confirmation') ? (data['password'] = passwordValue.value) : '';
                 if ((inputType == 'password_confirmation')) {
                     if (passwordValue.value != targetValue) {
                         console.log();
                         let erroDiv = document.querySelector("#password_confirmationError");
                         erroDiv.innerHTML = "Password does not match.";
                         return
                     }
                 }
                 axios.post('/storeUserValidate', data)
                     .then(function(response) {
                         console.log(response.data);
                         errorMessage(inputType, response.data)
                     })
                     .catch(function(error) {
                         console.log(error.message);
                     });
             })
         })

         function errorMessage(inputType, data) {
             let erroDiv = document.querySelector("#" + inputType + "Error");
             (data[inputType] != undefined) ? erroDiv.innerHTML = data[inputType][0]: erroDiv.innerHTML = "";
         }
     </script>


     {{-- For password toggle --}}
     <script>
         const togglePassword = document.querySelector('#togglePassword');
         const password = document.querySelector('#password');

         togglePassword.addEventListener('click', function(e) {
             const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
             password.setAttribute('type', type);
             this.classList.toggle('la-eye-slash');
         });
     </script>

 @endsection
