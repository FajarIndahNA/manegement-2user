@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Welcome, {{ auth()->user()->name }}!</h1>
                    <p>Your level: {{ auth()->user()->level }}</p>  

                            
                    @if (Auth::user()->level === 'super_admin')
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row"> 
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="card text-white rounded-3 shadow-sm border-0" style="background: linear-gradient(135deg, #007bff, #28a745);">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="card-title">Monitoring</h3>
                                                <p class="card-text">Manage your application users efficiently</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-television fa-3x"></i> <!-- Updated icon for a better representation -->
                                            </div>
                                        </div>
                                        <a href="{{ route('monitoring') }}" class="btn btn-light mt-3">
                                            Lihat <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="card text-white rounded-3 shadow-sm border-0" style="background: linear-gradient(135deg, #007bff, #28a745);">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="card-title">Manage Users</h3>
                                                <p class="card-text">Manage your application users efficiently</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-users fa-3x"></i> <!-- Updated icon for a better representation -->
                                            </div>
                                        </div>
                                        <a href="{{ route('user.index') }}" class="btn btn-light mt-3">
                                            Lihat <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif (Auth::user()->level === 'admin')
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="card text-white rounded-3 shadow-sm border-0" style="background: linear-gradient(135deg, #007bff, #28a745);">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h3 class="card-title">Monitoring</h3>
                                                <p class="card-text">Manage your application users efficiently</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-television fa-3x"></i> <!-- Updated icon for a better representation -->
                                            </div>
                                        </div>
                                        <a href="{{ route('monitoring') }}" class="btn btn-light mt-3">
                                            Lihat <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
