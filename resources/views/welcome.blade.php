<x-layout>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 vh-100 wh-100 d-flex justify-content-center align-items-center">
                <div class="sliderWrapper">
                    BOOK/
                    <div class="slider">
                        <div class="slider-text1">SHARE</div>
                        <div class="slider-text2">SHELF</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>