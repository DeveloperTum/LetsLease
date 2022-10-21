@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">Property Management Portal</h1>
            <div class="text-left">
                <a href="/list" class="btn btn-outline-primary">Property List</a>
            </div>

            <form id="edit-frm" method="post" action="{{url('edit-form')}}" class=" border p-3 mt-2">

                <div class="control-group col-6 text-left">
                    <label for="name">Property Name</label>
                    <div>
                        <input type="text" id="name" class="form-control mb-4" name="name"
                            placeholder="Enter Property Name" value="{!! $property->name !!}"
                            required />
                    </div>
                </div>

                <div class="control-group col-6 text-left">
                    <label for="type">Product Type</label>
                    <div>
                        <input type="text" id="type" class="form-control mb-4" name="type"
                            placeholder="Enter Property Type" value="{!! $property->type !!}"
                            required />
                    </div>
                </div>

                <div class="control-group col-6 mt-2 text-left">
                    <label for="body">Description</label>
                    <div>
                        <textarea id="description" class="form-control mb-4" name="description"
                            placeholder="Enter Short Description" rows="" required>
                            {!! $property->description !!}
                        </textarea>
                    </div>
                </div>

                @csrf
				@method('PUT')
                <div class="control-group col-6 text-left mt-2">
                    <button class="btn btn-primary">Save Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
