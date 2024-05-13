@extends('layouts.app')
<div class="p-2">
    <a href="{{ route('book.create') }}"><button>Create</button></a>
    <table class="table-auto border-separate border-spacing-1 border border-slate-500">
        <thead>
            <tr>
                <th class="border border-slate-600">Title</th>
                <th class="border border-slate-600">Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td class="flex gap-2">
                        <a href="{{ route('book.edit', $book->id) }}"><button class="bg-blue-500 text-white p-2 rounded">Edit</button></a>
                        <form method="POST" action="{{ route('book.destroy', $book->id) }}">
                            @method('DELETE')
                            @csrf
                            <button class="p-2 rounded bg-red-500 text-white">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
