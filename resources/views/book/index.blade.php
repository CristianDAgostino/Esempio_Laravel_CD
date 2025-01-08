<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>all the books added</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($books as $book)
            <div class="col-4 col-md-3 m-1">
                <x-card :book="$book">

                </x-card>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>