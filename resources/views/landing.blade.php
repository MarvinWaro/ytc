@extends('base')

@section('title')
    Welcome | YTC
@endsection


@section('body')
    <h1>This is Reserve for Landing Page</h1>
    <nav>
        <div class="mt-5">
            <ul>
                <li>
                    <a href="{{ route('signin') }}">Sign In</a>
                </li>
                <li>
                    <a href=" {{ route('signup') }} ">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
