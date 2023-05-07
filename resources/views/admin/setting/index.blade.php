@extends('layouts.admin')

@section('title','Admin Setting')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">

    @if(session('message'))
    <div class="alert alert-success mb-3">{{session('message')}}</div>
    @endif
        <form action="{{ url('/admin/settings')}}" method="POST">
            @csrf

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h6 class="text-white mb-0">Website</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Website Name</label>
                            <input type="text" name="website_name" value="{{ $setting->website_name ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Website Url</label>
                            <input type="text" name="website_url" value="{{ $setting->website_url ?? ''}}" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Page Title</label>
                            <input type="text" name="page_title" value="{{ $setting->page_title ?? ''}}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Keywords</label>
                            <textarea name="meta_keyword" rows="3" class="form-control">{{ $setting->meta_keyword ?? ''}} </textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ $setting->meta_description ?? ''}} </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h6 class="text-white mb-0">Website - Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Address</label>
                            <textarea name="address"  rows="3" class="form-control">{{ $setting->address ?? ''}}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone 1 *</label>
                            <input type="text" name="phone1" class="form-control" value="{{ $setting->phone1 ?? ''}}" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone No. 2 </label>
                            <input type="text" name="phone2" class="form-control" value="{{ $setting->phone2 ?? ''}}" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Id 1 *</label>
                            <input type="text" name="email1" class="form-control" value="{{ $setting->email1 ?? ''}}" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Id 2 *</label>
                            <input type="text" name="email2" class="form-control" value="{{ $setting->email2 ?? ''}}" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h6 class="text-white mb-0">Website - Social Media</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Facebook (Optional)</label>
                            <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook ?? ''}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Twitter (Optional)</label>
                            <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter ?? ''}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Instagram (Optional)</label>
                            <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Youtube (Optional)</label>
                            <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube ?? ''}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary text-white">Save Settings</button>
            </div>


        </form>
    </div>
</div>

@endsection
