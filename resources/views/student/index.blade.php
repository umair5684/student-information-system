<x-guest-layout>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-dark ml-3" href="{{ route('students.create') }}"> Create </a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>Roll No</th>
                    <th>Program</th>
                    <th>Semester</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->fullname }}</td>
                        <td>{{ $student->rollno }}</td>
                        <td>{{ $student->program }}</td>
                        <td>{{ $student->semester }}</td>
                        <td>{{ $student->phone_no }}</td>
                        <td>{{ $student->address }}</td>

                        <td>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                <a class="btn btn-primary " href="{{ route('students.show', $student->id) }}">Show</a>
                                <a class="btn btn-success" href="{{ route('students.edit', $student->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm(' Are You Sure You Want To Delete?')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $students->links() }}
</x-guest-layout>
