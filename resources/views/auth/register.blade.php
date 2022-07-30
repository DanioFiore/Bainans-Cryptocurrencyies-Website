<x-layout>
    {{-- title container start --}}
    <div class="container registerPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Register Form</h2>
                <h4>Be a Bainanser</h4>
            </div>
        </div>
    </div>
    {{-- title container end --}}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- register form start --}}
    <div class="container registerPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nameInput" class="form-label text-warning">
                            Name and Surname
                        </label>
                        <input type="text" class="form-control" id="nameInput" name="name">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="pictureProfile" class="form-label text-warning">Picture</label>
                        <img src="{{Storage::url('public/defaultUserPicture.webp')}}" alt="" style="height: 100px" class="d-block mb-3">
                        <input type="file" class="form-control" name="picture">
                    </div> --}}
                    <div class="mb-3">
                      <label for="inputCountryProfile" class="form-label text-warning">Country:</label>
                      <input type="text" class="form-control" id="inputCountryProfile" name="country">
                    </div>
                    <div class="mb-3">
                      <label for="inputCityProfile" class="form-label text-warning">City:</label>
                      <input type="text" class="form-control" id="inputCityProfile" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="inputPhoneProfile" class="form-label text-warning">Phone:</label>
                        <input type="text" class="form-control" id="inputPhoneProfile" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label text-warning">
                            Email address
                        </label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                        <div id="emailHelp" class="form-text text-warning">Your Email is safe with US.</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label text-warning">
                            Password
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRepeatInput" class="form-label text-warning">
                            Repeat password
                        </label>
                        <input type="password" class="form-control" id="passwordRepeatInput" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Register</button>
                </form>
            </div>
        </div>
    </div>
   

    {{-- register form end --}}

</x-layout>