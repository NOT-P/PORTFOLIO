@extends('backend.layouts.app')
@section('title','home/create page')

@section('content')
    <div class="container-fluid px-4">
            <div
              class="d-flex justify-content-between align-items-center mt-4 mb-3"
            >
              <h1 class="m-0">Create Social</h1>

              <a href="{{ route('socials.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
              </a>
            </div>

            <div class="card mb-4">
              <div class="card-header">
                <i class="bi bi-plus-circle me-2"></i>
                Add New Social Link
              </div>

              <div class="card-body">
                <form action="{{ route('socials.store') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label fw-bold">Select Icon</label>
                    <select name="icon_name" class="form-select">
                      <option disabled selected>-- Select Icon --</option>
                      <option value="bi-facebook">Facebook</option>
                      <option value="bi-twitter">Twitter</option>
                      <option value="bi-linkedin">LinkedIn</option>
                      <option value="bi-instagram">Instagram</option>
                      <option value="bi-youtube">YouTube</option>
                      <option value="bi-github">GitHub</option>
                      <option value="bi-whatsapp">WhatsApp</option>
                      <option value="bi-telegram">Telegram</option>
                      <option value="bi-tiktok">TikTok</option>
                      <option value="bi-pinterest">Pinterest</option>
                      <option value="bi-snapchat">Snapchat</option>
                      <option value="bi-reddit">Reddit</option>
                      <option value="bi-medium">Medium</option>
                      <option value="bi-discord">Discord</option>
                      <option value="bi-dribbble">Dribbble</option>
                      <option value="bi-stack-overflow">Stack Overflow</option>
                      <option value="bi-twitch">Twitch</option>
                      <option value="bi-vimeo">Vimeo</option>
                      <option value="bi-slack">Slack</option>
                      <option value="bi-spotify">Spotify</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-bold">Social Link</label>
                    <input
                      type="text"
                      name="social_link"
                      class="form-control"
                      placeholder="https://example.com"
                      value=""
                    />
                  </div>

                  <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Save Social
                  </button>
                </form>
              </div>
            </div>
          </div>
@endsection