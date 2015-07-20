@extends('layout.base')

@section('sections')



    <aside id="sidebar">
        <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </aside>

    <section id="main">
        @include('layout.partials.errors')

        @yield('main')
    </section>

@stop