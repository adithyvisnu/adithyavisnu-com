@include('template')

@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col">
            <h3>Login</h3>
            <br>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" placeholder="email@email.com" name="email" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" placeholder="Your strong password" name="password">
                </div>
                <input class="form-control btn btn-success" type="submit" value="Login">
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>