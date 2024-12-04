@extends('app')
 
@section('title', 'Books Page')

@section('content')
    <div class="col-md-6 m-auto">
        <h4>Adauga o carte</h4>
        <form action="{{route('books.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-dark">Save</button>
        </form>
    </div>
@endsection