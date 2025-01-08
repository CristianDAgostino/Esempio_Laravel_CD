<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>register</h1>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">user name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    <button type="submit" class="btn">register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>