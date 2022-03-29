<x-guest-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Full Name:</strong>
                            {{ $student->fullname }}
                        </div>
                        <div class="form-group">
                            <strong>Roll No:</strong>
                            {{ $student->rollno }}
                        </div>
                        <div class="form-group">
                            <strong>Program:</strong>
                            {{ $student->program }}
                        </div>
                        <div class="form-group">
                            <strong>Semester:</strong>
                            {{ $student->semester }}
                        </div>
                        <div class="form-group">
                            <strong>Phone No:</strong>
                            {{ $student->phone_no }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $student->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
