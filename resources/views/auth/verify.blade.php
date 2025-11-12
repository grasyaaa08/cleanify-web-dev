@extends('layouts.app')

@section('title', 'Verify Email')

@section('content')
<h2>Verify Your Email Address</h2>

@if (session('resent'))
    <div style="text-align:center; margin-bottom:20px; color:#27ae60; font-weight:500;">
        A fresh verification link has been sent to your email address.
    </div>
@endif

<p style="text-align:center; margin-bottom:20px;">
    Before proceeding, please check your email for a verification link.<br>
    If you did not receive the email:
</p>

<form method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit">Click here to request another</button>
</form>
@endsection