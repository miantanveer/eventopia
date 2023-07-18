<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/b5d1c54828.js" crossorigin="anonymous"></script>
    <title>Eventopia | List your space</title>
</head>
<style>
    header {
        background-color: #0000a0;
        color: #e5eaed;
        float: right;
        border-radius: 1px solid;
        width: 110vw;

    }

    header .navlink li {
        list-style-type: none;
        float: right;
        padding: 5px;

    }

    header .navlink li a {
        display: inline;
        padding: 10px;
        float: right;
        color: #e5eaed;
        text-decoration: none;
    }

    header nav li .btn {
        border: 1px solid white;
        color: #e5eaed;

    }

    header nav li i {
        padding: 10px;
        font-size: larger;
    }

    .hero-img {
        background:
            url('{{ asset("assets/images/brand/12.jpg") }}');
        background-size: cover;
        position:relative;
        
        height:70vh;
        
    }
    .box{
        border: 1px solid white;
        width:350px;
        position:absolute;
        padding-left: 20px;
        margin: auto;

        
  
    }
</style>

<body>
    <header>
    

        <nav class="navlink">

        <img  style="height:10vh;width:10vw;" src="{{ asset('assets/images/Group 7700.png') }}"  alt="LoGo">
        
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Listing</a></li>
            <li><a class="btn" href="#">CustomerPage</a></li>
            <li><i class="fa-solid fa-globe"></i></li>
            <li><i class="fa-sharp fa-solid fa-bag-shopping"></i></li>

        </nav>
    </header>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    
    <div class="hero-img">

    <div class="box">
        <h1>Be paid to host events on Eventopia.</h1>
        <p>Join the hundreds of hosts who are already renting out their facilities for parties, meetings, and photo and film shoots.</p>
        
            
            <label for="field"><h3>What type of space do you have?</h3></label>
            <input type="text" id="field" name="field" value="Party hall"><br>
            <input type="button" value="Get started">
    
    </div>
            
            

    </div>



</body>

</html>