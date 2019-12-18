@foreach( $todos as $todo )
    <form  method="post"action="todo/{{ $todo->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="badge badge-pill todo__item">{{ $todo->title }}</button>
    </form>
@endforeach

<form method="post" action="/todo">
    @csrf
    <div class="form-group">
        <label for="title">タスク名</label>
        <input type="text" class="form-control todo__input" name="title" placeholder="タスク名を入力">
    </div>
    <div class="form-group">
        <label for="content">内容</label>
        <input type="text" class="form-control todo__input" name="content" placeholder="タスク内容を入力">
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
</form>
