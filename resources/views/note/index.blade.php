<x-layout>
    <div class="note-container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
            <div class="d-sm-flex align-items-center justify-content-left mb-4">
                <a href="{{ Route('note.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                        class="fas fa-plus text-white-50"></i> New</a>
            </div>
        </div>
        <div class="notes row">
            @foreach ($notes as $note)
                <div class="col-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="note-action">
                                <a class="btn btn-dark" href="{{ Route('note.edit', $note) }}">Edit</a>
                                <a class="btn btn-warning" href="{{ Route('note.show', $note) }}">Show</a>
                                <button class="btn btn-info">Delete</button>
                            </div>
                        </div>
                        <div class="card-body text-justify">
                            {{ $note->note }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
