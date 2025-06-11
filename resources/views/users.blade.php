<div>
    <h2>Users List</h2>
    <form action="/user" method="post">
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        @csrf
        <div>
            <input type="text" name="username" value="{{old('username')}}" id="" placeholder="Enter Your Name">
        </div>
        <br>
        <div>
            <input type="text" name="email" value="{{old('email')}}" id="" placeholder="Enter Your Email">
        </div>
        <br>
        <div>
            <input type="text" name="city" value="{{old('city')}}" id="" placeholder="Enter Your city">
        </div> 
        <br>
        <div>
            <button>Submit</button>
        </div>  
    </form>
   
</div>
