
<a href="{{ route('addprojects.create') }}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
    {{ __('New project') }}
</a>

<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->titel }}</td>
                <td>{{ $project->description }}</td>
                <td>

                    <form action="{{ route('addprojects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="...">
                            Delete
                        </button>
                    </form>                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $projects->links() }}

