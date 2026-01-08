@extends('backend.layouts.app')
@section('title', 'Resume/download')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Resume Upload</h1>

        <div class="card mt-3">
            <div class="card-header">
                <i class="bi bi-file-earmark-arrow-up"></i> Upload / Update
                Resume
            </div>

            <div class="card-body">
                <form action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Select Resume (PDF)</label>
                        <input type="file" name="resume" class="form-control @error('resume') is-invalid @enderror" />
                        <small class="text-muted">Upload only PDF file (max 5MB)</small>
                        @error('resume')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if ($resume && $resume->downloadLink)
                        <div class="mb-3">
                            <label class="fw-bold">Current Resume:</label><br />
                            <a href="{{ asset('storage/'.$resume->downloadLink) }}" download class="btn btn-success mt-2">
                                <i class="bi bi-download"></i> Download Current Resume
                            </a>
                        </div>
                    @endif

                    <button class="btn btn-primary">
                        <i class="bi bi-save"></i> Save Resume
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
