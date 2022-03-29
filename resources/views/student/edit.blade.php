<x-guest-layout>
    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Student</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('students.update', $student->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('student.form')

            </form>
        </div>
    </div>
</x-guest-layout>

