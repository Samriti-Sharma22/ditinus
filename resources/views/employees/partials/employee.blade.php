<li>{{ $employee->name }}
    @if($employee->subordinates->isNotEmpty())
        <ul>
            @foreach($employee->subordinates as $subordinate)
                @include('employees.partials.employee', ['employee' => $subordinate])
            @endforeach
        </ul>
    @endif
</li>
