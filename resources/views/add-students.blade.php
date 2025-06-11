<div class="center">
    <h3>Add Students </h3>
    <form action="/add" method="post">
        @csrf
        <div>
            <input type="text" name="name" value="" id="" placeholder="Enter Your Name">
        </div>
        <br>
        <div>
            <input type="text" name="email" value="" id="" placeholder="Enter Your Email">
        </div>
        <br>
        <div>
            <input type="text" name="phone" value="" id="" placeholder="Enter Your Phone">
        </div>
        <br>
        <button>Add New Students</button>
</div>