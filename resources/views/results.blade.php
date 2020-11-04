@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-12 col-sm-8">
                <div class="card card-primary mt-5">
                    <div class="card-body body-text">
                        <div class="card-title">
                            <div class="h4 text-success">Congratulations!</div>
                            <hr>
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores iste vitae ipsum, architecto repudiandae distinctio ab est quas assumenda atque quis et nam rerum excepturi delectus, vel ipsam reprehenderit dolores asperiores labore voluptatum fuga voluptas aperiam! Quibusdam, voluptatum labore. Veritatis molestias numquam sed sunt nulla sapiente temporibus culpa quibusdam corporis vero non, ex tempore illo minima libero quisquam itaque eos dolorum accusamus natus mollitia ea eligendi quis doloremque! Ab pariatur distinctio hic mollitia accusantium assumenda a consequuntur quae, nemo libero molestias. Reiciendis, quas. Iste aperiam aut harum! Sed cupiditate accusamus, ex minima est culpa in ipsum blanditiis necessitatibus mollitia! Itaque?
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-6">
                                    <div class="font-weight-italic">Participant's Details:</div>
                                </div>
                                <div class="col-12 col-sm-6">
                                <div class="font-weight-italic">Date Registered: {{$participant->created_at->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <table class="table my-3">
                                <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Race Category</th>
                                        <th>Race Segment</th>
                                        <th>Race Shirt Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            {{Str::of($participant->first_name . ' ' . $participant->last_name)->trim()}}
                                        </td>
                                        <td>{{$participant->race_category}}</td>
                                        <td>{{$participant->gender}}</td>
                                        <td>{{$participant->shirt_size}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <a href="{{url()->previous()}}">
                                        <button class="btn back-button">
                                            BACK
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('styles')
<style>
    .body-text {
        font-size: 14px !important;
    }
    .back-button{
        font-size: 14px;
        background-color: #39b54a;
        padding: 5px 25px;
        border-radius: 0;
        color: #fff;
    }
</style>
@stop