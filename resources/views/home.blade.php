@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                  @include('includes.stat')
                </div>
            </div>
        </div>
    </div>
@endsection
