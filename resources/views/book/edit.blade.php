<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>edit book</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-10">
                <form action="{{route('book.update', $book)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">book's title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
                        @error('title')
                            <span class="text-danger errore">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">book's author</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}">
                        @error('author')
                        <span class="text-danger errore">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">actual book's cover//</label><br>
                        <img class="coverShow" src="{{Storage::url($book->cover)}}" alt="">
                        @error('cover')
                        <span class="text-danger errore">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">edit book's cover</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        @error('cover')
                        <span class="text-danger errore">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">book's price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$book->price}}">
                        @error('price')
                        <span class="text-danger errore">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">book's plot</label><br>
                        <textarea name="plot" class="form-control" id="plot">{{$book->plot}}</textarea>
                        @error('plot')
                        <span class="text-danger errore">{{$message}}</span>
                    @enderror
                    </div>
                    <button type="submit" class="btn">edit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>