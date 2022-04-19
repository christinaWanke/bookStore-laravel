<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head></head>
    <body>
    <h1>Book Store</h1>
    <ul>
        @foreach($books as $book)
            <li>
                <a href="books/{{books->id}}">
                {{$book->isbn}} {{$book->title}}
                </a>
            </li>
        @endforeach
    </ul>
    </body>
</html>

