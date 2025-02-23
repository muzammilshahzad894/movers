@extends('layouts.admin.app')

@section('css')
<style>
    input:-webkit-autofill {
        background-color: #f9f9f9 !important;
        -webkit-box-shadow: 0 0 0px 1000px #f9f9f9 inset !important;
        box-shadow: 0 0 0px 1000px #f9f9f9 inset !important;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('partials.messages')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Your Profile</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.profile.update') }}" method="POST" onsubmit="document.getElementById('submit-btn').disabled = true; document.getElementById('submit-btn').innerHTML = 'Updating...';">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 form-group">
                                    <label class="form-label">
                                        <strong>Full Name <span class="text-danger">*</span></strong>
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe" value="{{ old('name') ? old('name') : $user->name }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-group">
                                    <label class="form-label">
                                        <strong>
                                            Email <span class="text-danger">*</span>
                                        </strong>    
                                    </label>
                                    <input type="email" name="email" class="form-control" placeholder="someone@somewhere.com" value="{{ old('email') ? old('email') : $user->email }}" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-group">
                                    <label class="form-label">
                                        <strong>Password</strong>
                                    </label>
                                    <input type="password" name="password" class="form-control" placeholder="">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-group">
                                    <label class="form-label">
                                        <strong>Confirm Password</strong>
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit-btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection