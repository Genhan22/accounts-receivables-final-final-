@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Create Receipt
                    <a href="{{ url('admin/receipts') }}" class="text-white btn btn-danger btn-sm float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/receipts') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Student Type</label>
                        <select id="studentType" name="studentType" class="form-control">
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                        </select>
                    </div>
                    <div id="scholarshipSection" class="mb-3">
                        <label>Scholarship Details</label>
                        <input type="text" name="scholarship" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Receipt ID</label>
                        <input type="text" name="ReceiptID" class="form-control"/>
                    </div>
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
                        <label>Issue Date</label>
                        <input type="date" name="DueDate" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Date Paid</label>
                        <input type="date" name="DatePaid" class="form-control"/>
                    </div>
                    <div class="mb-3 col-md-12">
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const studentTypeSelect = document.getElementById('studentType');
        const scholarshipSection = document.getElementById('scholarshipSection');

        function toggleScholarshipSection() {
            if (studentTypeSelect.value === 'graduate') {
                scholarshipSection.style.display = 'none';
            } else {
                scholarshipSection.style.display = 'block';
            }
        }

        studentTypeSelect.addEventListener('change', toggleScholarshipSection);
        toggleScholarshipSection();
    });
</script>

@endsection
