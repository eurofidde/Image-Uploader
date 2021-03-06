@extends('layouts.app')

@section('title')
    Upload
@endsection

@section('content')
    <main class="upload">
        <div class="upload__inner">
            <i class="fas fa-upload"></i>
            <h1>Upload Image</h1>
        </div>
    </main>

    @include('includes.file-drop')
@endsection

@section('footer-classes')
    footer-fixed
@endsection