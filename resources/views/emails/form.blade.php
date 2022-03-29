<x-guest-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form action="{{route('student-csv-upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center pt-3">
            <div class="col-3">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" type="file" id="formFile" name="file">
            </div>
        </div>
        <div class=" d-flex justify-content-center pt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-guest-layout>
