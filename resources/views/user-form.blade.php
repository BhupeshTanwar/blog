<div>
    <h2>Add New User</h2>
    <br>
    <!-- <x-message-banner></x-message-banner> -->
    <!-- @if($errors ->any())
    @foreach($errors->all() as $error)
    <div style="color :red;">
        {{$error}}
    </div>
    @endforeach
    @endif -->

    <form action="adduser" method="post">
        @csrf
        <div>
            <input type="text" name="username" value="{{old('username')}}" id="" placeholder="Enter Your Name">
            <span style="color :red;">@error('username'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <input type="text" name="email" value="{{old('email')}}" id="" placeholder="Enter Your Email">
            <span style="color :red;">@error('email'){{$message}}@enderror</span>

        </div>
        <br>
        <div>
            <input type="text" name="city" value="{{old('city')}}" id="" placeholder="Enter Your city">
            <span style="color :red;">@error('city'){{$message}}@enderror</span>
        </div>

        <div>
            <h4>Skills</h4>
            <input type="checkbox" name="skills" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" id="java" value="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skills" id="python" value="python">
            <label for="python">Python</label>
            <span style="color :red;">@error('skills'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <button>Add New User</button>
        </div>

    </form>

</div>