<div>
    <h2>Students List</h2>
    <form action="/search" method="get">
        <input type="text" name="search" placeholder="Search with name" value="{{@$searchName}}">

        <button style="background-color: blueviolet;">Press Me</button>

    </form>
    <form action="/delete-multi" method="post">
        @csrf
        <button>Delete</button>
        <table border="4">
            <tr>
                <td>Section</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Created</td>
                <td>Opertaion</td>
            </tr>
            @foreach($data as $student)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->created_at}}</td>
                <td><button><a href="{{'delete/'.$student->id}}">Delete</a></button>
                    <button><a href="{{'edit/'.$student->id}}">Edit</a></button>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
    <br>
    {{$data->links()}}
</div>
<div></div>

<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>