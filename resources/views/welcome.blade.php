<x-layout>

    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 wh-100 d-flex justify-content-center align-items-center" style="height: 90vh">
                <div class="sliderWrapper">
                    BOOK <span class="slash">/</span>
                    <div class="slider">
                        <div class="slider-text1">SHARE</div>
                        <div class="slider-text2">SHELF</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="indexTitle text-center">last books added<br>
                <p class="paragrafo">all the books are clickable for other informations</p></h1>
            </div>
        </div>
    </div>
    
    <div class="container h-75">
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