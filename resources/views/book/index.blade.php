<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>all the books added <br>
                <p class="paragrafo">all the books are clickable for other informations</p></h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($books as $book)
            <div class="col-12 col-md-3 col-sm-10">
                <x-card :book="$book">

                </x-card>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>