<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Student;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Mail\WelcomeMAil;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

/**
 * Class StudentController
 *
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate();

        return view('student.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * $students->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        return view('student.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Student::$rules);
        $student = Student::create($request->all());


        SendMailJob::dispatch($student);

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    public function storeCsv(Request $request)
    {
        request()->validate([
            'file' => 'required|file|mimes:csv'
        ]);

        $path = $request->file('file')->store('csv');

        $rows = array_map('str_getcsv', file(storage_path('app/' . $path)));

        $header = array_shift($rows);
        $csv = [];
        foreach ($rows as $row) {
            $csv[] = array_combine($header, $row);
        }

        $created = 0;
        foreach ($csv as $value) {
            $data = [
                'fullname' => $value['fullname'],
                'rollno' => $value['rollno'],
                'program' => $value['program'],
                'semester' => $value['semester'],
                'phone_no' => $value['phone_no'],
                'address' => $value['address'],
                'email' => $value['email'],
            ];

            $validator = Validator::make($data, Student::$rules);

            if ($validator->validated()) {
                $student = Student::create($data);

                if ($student) {
                    SendMailJob::dispatch($student);
                    $created++;
                }
            }
        }

        return back()->with('success', $created . ' records are created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
public function indexForm(){
    return view('emails.form');
}

    public function show($id)
    {
        $student = Student::find($id);

        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Student $student
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        request()->validate(Student::$rules);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
