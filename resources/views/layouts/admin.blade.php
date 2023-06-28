<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($profile as $p)
            <form action="{{ route('home.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama Admin</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                value="{{ $p->name }}" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                value="{{ $p->email }}" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">
                                Password
                            </label>
                            <input type="password" class="form-control" id="formGroupExampleInput"
                                value="{{ $p->password }}" name="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                @endforeach
        </div>
    </div>
</div>
