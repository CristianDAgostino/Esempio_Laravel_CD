<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{Auth::user()->name}}'s board//</h1>
            </div>
        </div>
    </div>

    <div class="container vh-100">
        <div class="row justify-content-center">
            {{-- @foreach (Auth::user()->books as $book) --}}
            @foreach($books as $book)
            <div class="col-12 col-md-3 col-sm-10">
                <x-card :book="$book">

                </x-card>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>