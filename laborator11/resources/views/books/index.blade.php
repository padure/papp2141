@extends('app')
 
@section('title', 'Books Page')
 
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="my-4">Lista cartilor</h4>
        <a href="{{ route('books.create') }}" class="btn btn-sm btn-dark">Add new</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Titlu</th>
            <th>Autor</th>
            <th>Descriere</th>
            <th>Optiuni</th>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td class="d-flex gap-2">
                        <a  href="{{ route('books.edit', ['book'=>$book->id]) }}" 
                            class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <a  href="{{ route('books.show', ['book'=>$book->id]) }}" 
                            class="btn btn-sm btn-info">
                            Show
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nu avem carti in sistem</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection