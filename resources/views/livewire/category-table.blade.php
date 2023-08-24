<div class="table-responsive border">
    <table class="table text-nowrap text-md-nowrap table-striped mg-b-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="button-list">
                            <button wire:click="edit({{ $category->id }})" data-target="#modaldemo2" data-toggle="modal"
                                href="#" class="btn text-blue-600 font-semibold"><i
                                    class="ti ti-pencil"></i></button>
                            <button wire:click="deleteCategory({{ $category->id }})" data-target="#modaldemo3"
                                data-toggle="modal" href="#" class="btn text-red-600 font-semibold"><i
                                    class="ti ti-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="modaldemo2" tabindex="-1" role="dialog" aria-labelledby="modaldemo2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateCategory">
                    <div class="form-group">
                        <label for="editCategory">Category Name</label>
                        <input wire:model="categoryname" type="text" class="form-control" id="categoryId">
                        @error('categoryname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-red-400" data-dismiss="modal">Close</button>
                        <button type="submit" wire:click="updateCategory"
                            class="btn btn-primary bg-custom_purple_color">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="modaldemo3" tabindex="-1">
    <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
            <div class="modal-body pd-20 pd-sm-40">
                <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title mb-4 text-center">Delete Category</h5>
                <p class="text-center mb-5">Are you sure you want to delete category?</p>
                @error('newCategory')
                    <h4 class="text-red-500">{{ $message }}</h4>
                @enderror
                <button class="btn ripple btn-danger btn-block">Yes</button>
            </div>
        </div>
    </div>
</div>
