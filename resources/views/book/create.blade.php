<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>add your book</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-10">
                <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">title of the book</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">author of the book</label>
                        <input type="text" class="form-control" id="author" name="author" {{old('author')}}>
                        @error('author')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">cover of the book</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        @error('cover')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">price of the book</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" {{old('price')}}>
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">plot of the book</label><br>
                        <textarea name="plot" class="form-control" id="plot">{{old('plot')}}</textarea>
                        @error('plot')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <button type="submit" class="btn">add</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>