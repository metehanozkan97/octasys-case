@extends('panel.layout.app')
@section('title', __('Edit Ad'))

@section('content')
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
                    <a href="{{ LaravelLocalization::localizeUrl( route('dashboard.ads.index') ) }}" class="page-pretitle flex items-center">
                        <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
                        </svg>
                        {{__('Back to Ads')}}
                    </a>
                    <h2 class="page-title mb-2">
                        {{__('Edit Ad')}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('dashboard.ads.update', $ad->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="ad_position">{{__('Ad Position')}}</label>
                                    <select name="ad_position" id="ad_position" class="form-select">
                                        @foreach($positions as $value => $label)
                                            <option value="{{ $value }}" {{ $ad->ad_position == $value ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="ad_code">{{__('Ad Code')}}</label>
                                    <textarea class="form-control" id="ad_code" name="ad_code" rows="4">{{ $ad->ad_code }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="is_active">{{__('Status')}}</label>
                                    <select class="form-select" id="is_active" name="is_active">
                                        <option value="1" {{ $ad->is_active == 1 ? 'selected' : '' }}>{{__('Active')}}</option>
                                        <option value="0" {{ $ad->is_active == 0 ? 'selected' : '' }}>{{__('Passive')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection