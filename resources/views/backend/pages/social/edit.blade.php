@extends('backend.layouts.app')
@section('title','home/edit page')

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
                <form action="{{ route('social.update',['id' => $social->id]) }}" method="POST">
                    
                    @csrf
                    @method('PUT')
                  <div class="mb-3">
                    <label class="form-label fw-bold">Select Icon</label>
                    <select name="icon_name" class="form-select">
                      <option disabled>-- Select Icon --</option>
                      <option selected value="bi-facebook {{ $social->icon_name == 'bi-facebook' ? 'selected' : '' }}">Facebook</option>
                      <option value="bi-twitter {{ $social->icon_name == 'bi-twitter' ? 'selected' : '' }}">Twitter</option>
                      <option value="bi-linkedin{{ $social->icon_name == 'bi-linkedin' ? 'selected' : '' }}">LinkedIn</option>
                      <option value="bi-instagram{{ $social->icon_name == 'bi-instagram' ? 'selected' : '' }}">Instagram</option>
                      <option value="bi-youtube{{ $social->icon_name == 'bi-youtube'? 'selected' : '' }}">YouTube</option>
                      <option value="bi-github{{ $social->icon_name == 'bi-github' ? 'selected' : '' }}">GitHub</option>
                      <option value="bi-whatsapp{{ $social->icon_name == 'bi-whatsapp' ? 'selected' : '' }}">WhatsApp</option>
                      <option value="bi-telegram{{ $social->icon_name == 'bi-telegram' ? 'selected' : '' }}">Telegram</option>
                      <option value="bi-tiktok{{ $social->icon_name == 'bi-tiktok' ? 'selected' : '' }}">TikTok</option>
                      <option value="bi-pinterest{{ $social->icon_name == 'bi-pinterest' ? 'selected' : '' }}">Pinterest</option>
                      <option value="bi-snapchat{{ $social->icon_name == 'bi-snapchat' ? 'selected' : '' }}">Snapchat</option>
                      <option value="bi-reddit{{ $social->icon_name == 'bi-reddit' ? 'selected' : '' }}">Reddit</option>
                      <option value="bi-medium{{ $social->icon_name == 'bi-medium' ? 'selected' : '' }}">Medium</option>
                      <option value="bi-discord{{ $social->icon_name == 'bi-discord' ? 'selected' : '' }}">Discord</option>
                      <option value="bi-dribbble{{ $social->icon_name == 'bi-dribbble' ? 'selected' : '' }}">Dribbble</option>
                      <option value="bi-stack-overflow{{ $social->icon_name == 'bi-stack-overflow' ? 'selected' : '' }}">Stack Overflow</option>
                      <option value="bi-twitch{{ $social->icon_name == 'bi-twitch' ? 'selected' : '' }}">Twitch</option>
                      <option value="bi-vimeo{{ $social->icon_name == 'bi-vimeo' ? 'selected' : '' }}">Vimeo</option>
                      <option value="bi-slack{{ $social->icon_name == 'bi-slack' ? 'selected' : '' }}">Slack</option>
                      <option value="bi-spotify{{ $social->icon_name == 'bi-spotify' ? 'selected' : '' }}">Spotify</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-bold">Social Link</label>
                    <input
                      type="text"
                      name="social_link"
                      class="form-control"
                      placeholder="https://example.com"
                      value="{{ $social->social_link }}"
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