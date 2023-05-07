<div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">

                    <div class="modal-body">
                        <h6>Are you sure ypu want to delete this data?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes. Delete</button>
                    </div>

                </form>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">


            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>

            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Category
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Add Category</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                            <tr>
                                <td class="text-xs font-weight-bold mb-0">{{ $category->id }}</td>
                                <td class="text-xs font-weight-bold mb-0">{{ $category->name }}</td>


                                <td class="text-xs font-weight-bold mb-0">
                                    {{ $category->status== '1' ? 'Hidden' : 'Visible' }}</td>
                                <td class="text-xs font-weight-bold mb-0">
                                    <a href="{{ url('admin/category/'.$category->id.'/edit') }}"
                                    class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                    <div> {{ $categories->links()}}</div>

                </div>
            </div>
        </div>
    </div>

</div>

@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    })
</script>

@endpush
