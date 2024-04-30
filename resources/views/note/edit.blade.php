<x-layout>
    <h1>edit</h1>
    <form action="">
        <div class="form-group">
            <label for="">id</label>
            <input type="text" class="form-control" value="{{ $note->id }}">
        </div>
        <div class="form-group">
            <label for="">note</label>
            <input type="text" class="form-control" value="{{ $note->note }}">
        </div>
        <div class="form-group">
            <label for="">user id</label>
            <input type="text" class="form-control" value="{{ $note->user_id }}">
        </div>
    </form>
</x-layout>
