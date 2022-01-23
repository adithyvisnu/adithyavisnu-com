@include('template')

@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <h3>Register</h3>
            <br>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Adithya Visnu Prasetyo Putra" name="name" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" placeholder="email@email.com" name="email" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" placeholder="Your strong password" name="password" id="">
                    </div>
                </div>
                <input class="form-control btn btn-primary" type="submit" value="Register">
            </form>
        </div>
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