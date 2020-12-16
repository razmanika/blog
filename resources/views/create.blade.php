@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h1 class='psc'>Create post</h1>

                <form action="{{ route('save.post') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title <small>(require)</small></label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="form-group">
                        <label for="description">Say what you think <small>(require)</small></label>
                        <textarea rows="5" class="form-control" name="body"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                        <a href="{{ route('posts') }}" class=" btn btn-default">Cancle</a>

                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
