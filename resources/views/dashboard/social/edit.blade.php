@extends('layouts.dashboard.app')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Social Link</div>

                <div class="card-body">
                    <form action="{{ route('socials.update', $social->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="site_name">Site Name:</label>
                            <select name="site_name" class="form-control" required>
                                @foreach($siteNames as $siteName)
                                    <option value="{{ $siteName }}" @if($social->site_name == $siteName) selected @endif>{{ $siteName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="link">Link:</label>
                            <input type="text" name="link" class="form-control" value="{{ $social->link }}" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
