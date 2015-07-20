@extends('layout.base')

@section('sections')

    <section id="login">

        @include('layout.partials.errors')

        <div class="panel">
            <form action="{{ route('auth.signin') }}" method="POST" novalidate>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label for="email">E-Mail</label>
                <input type="email" name="email" placeholder="john@doe.com" class="u-full-width" value="{{ old('email') }}">

                <label for="password">Passwort</label>
                <input type="password" name="password" class="u-full-width" placeholder="supergeheimes Passwort">

                <label class="u-pull-left">
                    <input type="checkbox" name="remember">
                    <span class="label-body">Login merken</span>
                </label>

                <button type="submit" class="button button-primary u-pull-right">Login</button>

                <div class="u-cf"></div>
            </form>
        </div>

    </section>

@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
@stop