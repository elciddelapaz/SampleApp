@extends('layouts.app')
<div>
    <h1>Edit Book</h1>
    <form class="grid w-1/2 p-2" method="POST" action="{{ route('book.update', $book->id) }}" >
        @method('PUT')
        @csrf
        Title<input type="text" class="border-2" name="title" value="{{$book->title}}" required>
        Author<input type="text" class="border-2" name="author" value="{{$book->author}}" required>
        <input type="submit" value="Update">
    </form>
</div>
