<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ad Soyad</th>
            <th>E-posta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
