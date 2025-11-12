@extends('layouts.app')
@section('title','Welcome')
@section('content')
<!-- Welcome Modal -->
<div class="modal" id="welcomeModal" data-show="{{ session('status') ? 'true' : 'false' }}">
    <div class="modal-content">
        <h3>{{ session('status') }}</h3>
        <p>You are logged in as {{ auth()->user()->role ?? 'Demo' }}</p>
        <button onclick="closeWelcomeModal()" style="background:#4CAF50; color:white; border:none; padding:8px 16px; border-radius:6px;">Close</button>
    </div>
</div>

<!-- After modal, show homepage -->
@include('home')
@endsection