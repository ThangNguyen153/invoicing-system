@if (count($errors) >0)
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-danger"> {{ $error }}</li>
        @endforeach
    </ul>
@endif
@if(session('status'))
    <ul>
        <li class="text-danger"> {{ session('status') }}</li>
    </ul>
@endif

<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-feedback">
        <label for="email">Name:
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </label>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="password">Password:
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </label>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
    </div>
</form>
