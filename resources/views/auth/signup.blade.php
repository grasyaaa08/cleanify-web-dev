@extends('layouts.app')
@section('title','Sign Up')
@section('content')
<main>
    <h2 style="text-align:left; color:#4CAF50;">CLEANIFY</h2>
    <form method="POST" action="{{ route('signup.post') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" required>
        <label>Role</label>
        <select name="role" required>
            <option value="client">Client</option>
            <option value="provider">Provider</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" class="green">SIGN UP</button>
        <a href="{{ route('login') }}" style="display:block;margin-top:8px;">Log In</a>
    </form>
</main>
@endsection