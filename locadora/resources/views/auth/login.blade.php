@extends('layouts.app')

@section('content')
    @csrf
    
    <login-login token_csrf="{{ @csrf_token()}}"></login-login>
@endsection
