
<x-guest-layout>


<div class="  mt-5 d-flex justify-content-center">
    <div class=" col-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fullname" value="{{ $student->fullname }}">
    </div>

</div>
<div class=" d-flex justify-content-center">
    <div class="col-3">
        <label for="rollno" class="form-label">Roll No</label>
        <input type="text" class="form-control" name="rollno" value="{{ $student->rollno }}">
    </div>
</div>
<div class=" d-flex justify-content-center">
    <div class="col-3">
        <label for="program" class="form-label">Program</label>
        <input type="text" class="form-control" name="program" value="{{ $student->program }}">
    </div>
</div>
<div class=" d-flex justify-content-center">
    <div class="col-3">
        <label for="semester" class="form-label">Semester</label>
        <input type="text" class="form-control" name="semester" value="{{ $student->semester }}">
    </div>
</div>



<div class=" d-flex justify-content-center">
    <div class="col-3">
        <label for="phone_no" class="form-label">Phone No</label>
        <input type="number" class="form-control" name="phone_no" value="{{$student->phone_no }}">
    </div>
</div>


<div class=" d-flex justify-content-center">
    <div class="col-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $student->address }}">
    </div>
</div>
    <div class=" d-flex justify-content-center">
        <div class="col-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $student->email }}">
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

</x-guest-layout>
