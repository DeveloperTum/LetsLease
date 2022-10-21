@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">Add Property Form</h1>
           
           
            <div class="text-left">
                <a href="/list" class="btn btn-outline-primary">Property List</a>
            </div>

            <form id="add-frm" method="POST" action="{{url('store-form')}}" class="border p-3 mt-2">
                <div class="control-group col-6 text-left">
                    <label for="name">Property Name</label>
                    <div>
                        <input type="text" id="name" class="form-control mb-4" name="name"
                            placeholder="Enter Property Name" required />
                    </div>
                </div>
                <div class="control-group col-6 text-left mt-2">
                    <label for="type">Property Type</label>
                    <div>
                           <select name="type" id="type"  class="form-control mb-4" rows="" required>

                               <option value="commercial">Commercial</option>
                                <option value="residential">Residential</option>
                            
                           </select>
                    </div>
                    <div>
                        <textarea id="description" class="form-control mb-4" name="description"
                            placeholder="Enter Short Description" rows="" required></textarea>
                    </div>

                </div>
                

                @csrf

                <div class="control-group col-6 text-left mt-2">
                    <button class="btn btn-primary">Add New</button>
                </div>
                 
            </form>
        </div>
    </div>
</div>
@endsection
