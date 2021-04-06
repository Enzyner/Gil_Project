@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}><i class="fa fa-power -off"></i>Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Citizens</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>CNIC</th>
                                            <th>Contact Number</th>
                                            <th>Address</th>
                                            <th>Account Balance</th>
                                            
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            
                                            <td>{{$user->cnic}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->account_balance}}</td>
                                           
                                         
                                        </tr>
                                        @empty
                                     
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
</div>



<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Facility Centers</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                           
                                            <th>Account Balance</th>
                                            
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @forelse ($facilitys as $facility)
                                        <tr>
                                            <td>{{$facility->name}}</td>
                                            
                                            <td>{{$facility->email}}</td>
                                          
                                            <td>{{$facility->account_balance}}</td>
                                           
                                        
                                        </tr>
                                        @empty
                                     
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
</div>
@endsection
