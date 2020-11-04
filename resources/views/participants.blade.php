@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="card-text">
                            <div class=" my-3 text-center">
                                <a href="{{route('participants.index')}}">All</a>
                            </div>
                            <hr>
                            <div class=" my-3 text-center">
                                <a href="{{route('participants.index', ['filter' => 'juniors'])}}">Juniors (18 - below)</a>
                            </div>
                            <hr>
                            <div class=" my-3 text-center">
                                <a href="{{route('participants.index', ['filter' => 'seniors'])}}">Seniors (19 - Above)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10">
                <div class="card">
                    <div class="card-header">
                        {{Str::upper($filter)}}
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Date Registered</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($participants as $participant)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{Str::of($participant->first_name . ' ' . $participant->last_name)->trim()}}</td>
                                            <td>{{Illuminate\Support\Carbon::parse($participant->birthdate)->age}}</td>
                                            <td>{{$participant->gender}}</td>
                                            <td>
                                                @if(Str::length($participant->address) > 20)
                                                    {{Str::substr($participant->address, 0, 20) . '...'}}
                                                @else
                                                    {{$participant->address}}
                                                @endif
                                            </td>
                                            <td>{{$participant->email_address}}</td>
                                            <td>{{$participant->contact_number}}</td>
                                            <td>{{$participant->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
<script>
    $('.table').DataTable();
</script>
@stop