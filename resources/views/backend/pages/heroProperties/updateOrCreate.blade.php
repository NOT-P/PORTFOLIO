@extends('backend.layouts.app')
@section('title','Hero property')

@section('content')
    <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Home Page</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Hero Properties</li>
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
                            Hero Properties
                        </div>

                        <div class="card-body">

                            <form action="{{ route('heroProperty.store') }}" method="POST"
                                enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label class="form-label">Key Line</label>
                                    <input type="text" name="keyLine" class="form-control"
                                        value="{{ $heroProperty->keyLine ?? ''}}" placeholder="Enter Key Line">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ $heroProperty->title ?? '' }}"
                                        class="form-control" placeholder="Enter Title">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Short Title</label>
                                    <input type="text" name="short_title" value="{{ $heroProperty->short_title ?? ''}}"
                                        class="form-control" placeholder="Enter Short Title">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image Upload</label>
                                    <input id="photo" type="file" name="img" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <!-- <label class="form-label">Image</label> -->
                                    <img id="showImage" src="{{ asset('backend/images/placeholder-img.jpg') }}"
                                        alt="image" width="100"
                                        style="border:1px solid #ccc;padding:5px; border-radius:5px;">
                                </div>

                                <button type="submit" class="btn btn-primary px-4">Save</button>

                            </form>

                        </div>
                    </div>
                </div>
            </main>
@endsection