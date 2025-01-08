<a class="cardZ" href="{{route('book.show', $book)}}">
<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$book->title}}</h5>
        <p class="card-text">{{$book->author}}</p>
        <p class="card-text"> <small>{{$book->created_at->format('d/m/Y')}}</small></p>
    </div>
</div>
</a>