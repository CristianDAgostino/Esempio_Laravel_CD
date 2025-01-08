<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$book->title}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container vh-100">
        <div class="row">
            <div class="col-6">
                <img class="coverShow" src="{{Storage::url($book->cover)}}" alt="{{$book->title}}">
            </div>
            <div class="col-12 col-md-8">
                <h4>author {{$book->author}}</h4>
                <p>{{$book->plot}}</p>

                <div class="d-flex w-50 justify-content-between">
                <a href="{{route('book.edit', $book)}}" class="btn edit">edit</a>
                <form action="{{route('book.delete', $book)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn delete">delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-layout>