@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <div class="container mt-4">
              @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
              @endif
            <h1 class="display-one m-5">our Properties</h1>
            <div class="text-left">
                <a href="/add" class="btn btn-outline-primary">
                    Add new property</a>
            </div>

            <table class="table mt-3  text-left">
                <thead>
                    <tr>
                        <th scope="col">Property Name</th>
                        <th scope="col">Property Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($properties as $property)

                    <tr>
                        <td>{!! $property->name !!}</td>
                        <td>{!! $property->type !!}</td>
                        <td>{!! $property->description !!}</td>
                        <td>

                             <a href="edit"
                                class="btn btn-outline-primary">
                                Edit
                            </a>


                            <button type="button" class="btn btn-outline-danger ml-1"
                                onclick='showModel({!! $property->id !!})'>
                                Delete
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No properties found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">Are you sure to delete this property?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="dismissModel()">Cancel</button>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action ='list'//'property/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
@endsection
