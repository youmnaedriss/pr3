<style>

.w-5{
display:none;
}

</style>




<h4>Students Info.
                        <a href="{{ url('add-student') }}" >Add Student</a>
                    </h4>
               

                    <table border="1" width="70%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->section }}</td>
                                <td><a href="{{ url('edit-student/'.$item->id) }}" >Edit</a>
                                </td>
                                <td>
                                <a href="{{ url('delete-student/'.$item->id) }}" >Delete</a>
</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <span> {{$student->links()}}</span>