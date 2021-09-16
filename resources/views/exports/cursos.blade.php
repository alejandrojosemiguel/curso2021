<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Descripción</th>
        <th>Categoria</th>
        <th>Fecha de creación</th>
        <th>Fecha de actuaización</th>
    </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->name }}</td>
                <td>{{ $curso->slug }}</td>
                <td>{{ $curso->description }}</td>
                <td>{{ $curso->categoria }}</td>
                <td>{{ $curso->created_at }}</td>
                <td>{{ $curso->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>