<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>login</h1>
            </div>
        </div>
    </div>
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                    <button type="submit" class="btn">login</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>