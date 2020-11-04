@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-5">
            <img src="{{asset('images/header.png')}}" alt="header" class="img-fluid" style="background-color: #ffffff">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="text-center header-subtext" style="color: #414042">
                A 3K run alongside the candidates of Miss Philippines Earth 2015 to aid the Calumpang River Rehabilitation
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-12 text-center">
            <div style="color: #414042;font-size: 18px !important">
                APRIL 25, 2015 | Assembly Time: 5:00 AM | SM City Batangas Parking Grounds
            </div>
        </div>
        <div class="col-12 text-center">
            <div style="color: #414042;font-size: 15px !important">
                Registration fee: Php500 inclusive of race kit with shirt
            </div>
        </div>
        <div class="col text-center my-3">
            <button class="register-btn">Register now!</button>
        </div>
    </div>
</div>
<div class="mt-n5">
    <img src="{{asset('images/background.png')}}" alt="background" class="img-fluid background-image">
    <div style="background-color: #0068ac;display: block !important" id="signUp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-white d-block" style="font-weight: 700;font-size: 30px">SIGN UP</div>
                <div class="col-12 text-center">
                    <img src="{{asset('images/section-divider.png')}}" alt="section-divider" class="img-fluid text-center">
                </div>
                <div class="col-12">
                    <div class="text-white text-center mt-2 mb-4 special-padding" style="font-size: 12px !important">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nihil totam numquam reiciendis consequuntur excepturi ea provident ratione obcaecati, alias quidem itaque aperiam? Libero, repudiandae laborum.
                    </div>
                </div>
            </div>
        </div>
        <div class="container special-padding">
        <form action="{{route('participants.store')}}" method="post">
                @csrf
                <div class="row justify-content-center form-group">
                    <div class="col-12 col-sm-6 px-2 mb-3 mb-sm-0">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                        @error('first_name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 px-2">
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                        @error('last_name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center form-group">
                    <div class="col-12 px-2">
                        <input type="text" class="form-control" placeholder="Complete Address" name="address">
                        @error('address')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center form-group">
                    <div class="col-12 px-2">
                        <input type="text" class="form-control" name="address_ext">
                    </div>
                </div>
                <div class="row justify-content-center form-group">
                    <div class="col-12 px-2">
                        <select name="gender" id="gender" class="form-control"
                            style="color: #0168AD !important;font-weight: 600 !important;">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>   
                        </select>
                        <img src="{{asset('images/dropdown.png')}}" alt="dropdown" class="img-fluid img-dropdown">
                        @error('gender')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center form-group">
                    <div class="col-12 col-sm-6 px-2 mb-3 mb-sm-0">
                        <input type="text" class="form-control" placeholder="Birthday" name="birthdate">
                        @error('birthdate')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 px-2">
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number">
                        @error('contact_number')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center form-group">
                    <div class="col-12 col-sm-6 px-2 mb-3 mb-sm-0">
                        <input type="text" class="form-control" placeholder="Email Address" name="email_address">
                        @error('email_address')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 px-2" style="position: relative">
                        <select name="shirt_size" id="sizes" class="form-control"
                            style="color: #0168AD !important;font-weight: 600 !important;">
                            <option value="" disabled selected>Shirt Size</option>
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>    
                            <option value="XL">Extra Large</option>    
                        </select>
                        <img src="{{asset('images/dropdown.png')}}" alt="dropdown" class="img-fluid img-dropdown">
                        @error('shirt_size')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center form-group my-4">
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <button type="button" class="btn" style="background-color: #0E76BD">
                            <i class="fa fa-plus text-white add-participants-icon"></i>
                        </button>
                        <div class="text-white ml-3" style="font-size: 14px !important">Add more participants</div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row d-flex align-items-center align-content-center mt-2 mt-sm-0">
                            <div class="col-2 col-lg-1">
                                <input type="checkbox" id="terms" name="terms" value="1">
                            </div>
                            <div class="col-10 col-lg-11 px-0 pb-1">
                                <a href="#" class="text-white terms-text">I have read and understood the Terms and Conditions</a>
                                @error('terms')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn submit-button mb-4" type="submit">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    @media only screen and (max-width: 600px){
        .header-subtext {
            padding: 0 5vw;
        }
    }
    @media only screen and (min-width: 601px){
        .header-subtext {
            padding: 0 20vw;
        }
    }
    .register-btn {
        color: #0068ac;
        border-style: solid;
        border-color: #39b54a;
        padding: 3px 30px;
        font-weight: 600
    }
    .background-image {
        background-color: #ffffff;
        width: 100vw;
        height: 100%;
        display: block;
    }
    .special-padding {
        padding: 0 10vw;
    }
    .form-control {
        border-radius: 1px !important;
        min-height: 39px !important;
    }
    .form-control::placeholder {
        color: #0068ac !important;
        font-weight: 600 !important;
        font-size: 14px !important;
    }
    select{
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }
    select + .img-dropdown {
        float: right;
        margin-top: -39px;
        pointer-events: none;
    }
    .add-participants-icon {
        transform: scale(1.5, 1.5);
    }
    #terms {
        transform: scale(1.5, 1.5);
    }
    .terms-text {
        font-size: 11px;
        text-decoration: underline;
    }
    .submit-button {
        background-color: #39b54a;
        color: white;
        padding: 5px 30px;
        font-weight: 600;
        font-size: 14px !important;
        border-radius: 0 !important;
    }
</style>
@stop

@section('scripts')
<script>
    $('.register-btn').click(() => {
        document.querySelector('#signUp').scrollIntoView({
            behavior: 'smooth' 
        });
    });
</script>
@stop
