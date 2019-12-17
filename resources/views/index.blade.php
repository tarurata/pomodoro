@extends('layouts.app')

@section('content')

    <div class="section">
        <div class="columns is-centered">

            <div class="column is-half">
                <h1 id="timer" class="is-size-1">12:20</h1>
            </div>

            <div class="column is-half">
                @foreach( $todos as $todo )
                    <form  method="post"action="todo/{{ $todo->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-rounded todo__item">{{ $todo->title }}</button>
                    </form>
                @endforeach

            </div>
        </div>
    </div>

    <div class="section">
        <form  class="field" method="post" action="/todo">
            @csrf

            <label class="label">タスク名</label>
            <div class="control">
                <input class="input" name="title" type="text" placeholder="タスク名を入力">
            </div>

            <div class="field">
                <label class="label">内容</label>
                <div class="control">
                    <input class="input" name="content" type="text" placeholder="タスク内容を入力">
                </div>
            </div>
            <button type="submit" class="">submit</button>
        </form>
    </div>

@endsection







