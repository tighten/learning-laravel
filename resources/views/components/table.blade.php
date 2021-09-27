@props(['headers', 'fields', 'rows', 'name', 'param'])

<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th>#</th>
            @foreach ($headers as $header)
                <th align="left">{{ $header }}</th>
            @endforeach
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @if (count($rows) > 0)
            @foreach ($rows as $row)
                <tr>
                    <td align="center">{{ $row->id }}</td>
                    @foreach ($fields as $field)
                        <td>{{ $row->$field }}</td>
                    @endforeach
                    <td>
                        <div class="flex justify-center">
                            <div>
                                <a href="{{ route("{$name}.show", [$param => $row->id]) }}" class="button button-icon bg-info">
                                    <i class="icon-user"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route("{$name}.edit", [$param => $row->id]) }}" class="button button-icon bg-warning mx-1">
                                    <i class="icon-pencil"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route("{$name}.destroy", [$param => $row->id]) }}" class="button button-icon bg-danger">
                                    <i class="icon-bin2"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="{{ count($headers)+2 }}" class="text-center">No data found.</td>
            </tr>
        @endif
        </tbody>
    </table>

    <div class="py-6">
        {{ $rows->links() }}
    </div>
</div>
