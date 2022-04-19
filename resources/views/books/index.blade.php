<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
<body>
<h1>Bookstore</h1>
<ul>
    @foreach($books as $book)
        <li>
            <a href="/books/{{$book->id}}">
            {{$book->isbn}} {{$book->title}}</li>
        </a>
    @endforeach
</ul>

</body>
</html>

