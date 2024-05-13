@extends('layouts.app')

<div>
    <h1>Create Book</h1>
    <form class="grid w-1/2 p-2" method="POST" action="{{ route('book.store') }}" >
        @csrf
        Title<input type="text" class="border-2" name="title" required>
        Author<input type="text" class="border-2" name="author" required>
        <input type="submit" value="Create">
    </form>
</div>
