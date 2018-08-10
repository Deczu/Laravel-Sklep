@if (Request::path() == 'register')

@elseif(!session()->get('name'))
    <br>
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="form-group" >
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Hasło">
        </div>
        <button type="submit" class="btn btn-dark">Zaloguj!</button>
    </form>
    <br><a style="font-family: " href="/register">Nie masz konta ? Zarejestruj się!</a>
@else

            <br><a href="/logout"><button class="btn btn-dark">Wyloguj</button></a>
@endif

