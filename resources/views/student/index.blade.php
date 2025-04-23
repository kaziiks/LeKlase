<x-layout>
<h1>Student Grades</h1>
<table border="1">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->grade }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-layout>