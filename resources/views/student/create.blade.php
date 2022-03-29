<x-guest-layout>


    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">

                </div>

                <div class="pull-right">
                    <a class="btn btn-dark" href="{{ route('students.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">



            @csrf
            <div class="  mt-5 d-flex justify-content-center">
                <div class=" col-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                </div>

            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="rollno" class="form-label">Roll No</label>
                    <input type="text" class="form-control" name="rollno" value="{{ old('rollno') }}">
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="program" class="form-label">Program</label>
                    <input type="text" class="form-control" name="program" value="{{ old('program') }}">
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control" name="semester" value="{{ old('semester') }}">
                </div>
            </div>



            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="phone_no" class="form-label">Phone No</label>
                    <input type="number" class="form-control" name="phone_no" value="{{ old('phone_no') }}">
                </div>
            </div>


            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <div class="col-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class=" d-flex justify-content-center">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>

        </form>
    </div>
    </slot>
    </div>
    </div>
</x-guest-layout>
