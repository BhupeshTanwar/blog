<div>
    <h2>Update Students Data</h2>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div>
            <input type="text" name="name" value="{{$data->name}}" id="" placeholder="Enter Your Name">
        </div>
        <br>
        <div>
            <input type="text" name="email" value="{{$data->email}}" id="" placeholder="Enter Your Email">
        </div>
        <br>
        <div>
            <input type="text" name="phone" value="{{$data->phone}}" id="" placeholder="Enter Your Phone">
        </div>
        <br>
        <button>Update Student</button> <button><a href="/list">Cancel</a></button>
</div>
 