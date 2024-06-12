@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Invoices
                    <a href="{{ url('admin/invoices') }}" class="text-white btn btn-danger btn-sm float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                </div>
                @endif
                <form action="{{ url('admin/invoices') }}" method="POST">
                @csrf
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <!--<li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    Home
                </button>
            </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"></div>
                <!--<div class="mb-3">
                    <label>Invoices</label>
                </div> -->
                <!--<div class="mb-3">
                    <label>Invoice ID</label>
                    <input type="text" name="InvoiceID" class="form-control"/>
                </div> -->
                <div class="mb-3">
                    <label>Student Number</label>
                    <input type="text" name="StudentNumber" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Student Name</label>
                    <input type="text" name="StudentName" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>College</label>
                    <input type="text" name="College" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Scholarship</label>
                    <input type="text" name="Scholarship" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Issue Date</label>
                    <input type="date" name="DueDate" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Due Date</label>
                    <input type="date" name="DatePaid" class="form-control"/>
                </div>

                <div class="mb-3 col-md-12">
                    <button type="submit" class="btn btn-primary float-end">Save</button>
                </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
            </div>
            </div>
        </div>
    </div>
    
@endsection