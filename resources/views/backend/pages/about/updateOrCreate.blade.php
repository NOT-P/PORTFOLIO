@extends('backend.layouts.app')
@section('title','About Section')

@section('content')
    <div class="container-fluid px-4">
                    <h1 class="mt-4">Home Page</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z">
                                </path>
                            </svg>
                            About 
                        </div>

                        <div class="card-body">

                            <form action="{{ route('about.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ $about->title ?? '' }}" class="form-control"
                                        placeholder="Enter Title">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Details</label>
                                    <input type="text" name="details" value="{{ $about->details ?? '' }}" class="form-control"
                                        placeholder="Enter your Details">
                                </div>

                                <button type="submit" class="btn btn-primary px-4">Save</button>

                            </form>

                        </div>
                    </div>
                </div>
@endsection