@foreach ($data as $id => $student)
    <h1>
        Hi, My name is {{$student->name}}.
    </h1>
@endforeach
