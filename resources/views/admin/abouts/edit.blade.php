@extends('layouts.master')


@section('title')
    About Us Edit | Lightman
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About Us Edit<h4>

                    <form action="{{ url('aboutus-update/'.$abouts->id )}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
              
                        <div class="modal-body">
                          
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title :</label>
                                <input type="text" name="title" class="form-control" value="{{ $abouts->title }}">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sub-Title :</label>
                                <input type="text" name="subtitle" class="form-control" value="{{ $abouts->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Description :</label>
                                <textarea name="description" class="form-control" rows="8" cols="5">{{ $abouts->description }}"</textarea>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <a href="{{ url('about') }}" class="btn btn-secondary">Back</a>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>

            </div>
        </div>
    </div>
</div>

@endsection
