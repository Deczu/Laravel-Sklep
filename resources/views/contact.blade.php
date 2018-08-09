@extends('ukladStrony.master')

@section('products')


    <form class="col-lg-9" method="POST" action="/contact">
        @if(session('message'))
            <div class='alert alert-success'>
                {{ session('message') }}
            </div>
        @endif
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Twoje imie" required>
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="example@example.com" required>
        </div>
        <div class="form-group">
            <label for="message">Message: </label>
            <textarea type="text" name="message" class="form-control" id="message" placeholder="Twoja wiadomość" required>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
    </form>
@endsection