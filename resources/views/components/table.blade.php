@props(['headers', 'fields', 'rows', 'name', 'param'])

<table class="table-auto">
    <thead>
    <tr>
        <th>#</th>
        @foreach ($headers as $header)
            <th>{{ $header }}</th>
        @endforeach
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @if (!empty($rows))
            @foreach ($rows as $row)
                <td>{{ $row->id }}</td>
                @foreach ($fields as $field)
                    <td>{{ $field }}</td>
                @endforeach
                <td>
                    <a href="{{ route($name.'.show', [$param => $row->id]) }}" class="button button-icon bg-info">
                        <i class="icon-user"></i>
                    </a>
                    <a href="{{ route($name.'.edit', [$param => $row->id]) }}" class="button button-icon bg-warning mx-1">
                        <i class="icon-pencil"></i>
                    </a>
                    <a href="{{ route($name.'.destroy', [$param => $row->id]) }}" class="button button-icon bg-danger">
                        <i class="icon-bin2"></i>
                    </a>
                </td>
            @endforeach
        @else
            <td colspan="{{ count($headers)+2 }}" class="text-center">No data found.</td>
        @endif
    </tr>
    </tbody>
</table>
