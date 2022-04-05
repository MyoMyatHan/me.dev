<x-layout>
    <div class="container">
        <div class="row">
            <h3 class="text-primary text-center my-2"> Login Form </h3>
            <div class="col-md-5 mx-auto card p-4 my-3 shadow-sm">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input required type="email" name="email" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <x-error name="email"/>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input required  type="password" name="password"  class="form-control" id="exampleInputPassword1">
                    </div>
                    <x-error name="password"/>
                    <button type="submit" class="btn btn-primary">Log in</button>
                  </form>
            </div>
        </div>
    </div>
    </x-layout>
