<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/error.css')}}">
    <script src="welcome.js"></script>
</head>
<body >
@if($errors->has('name')) <style>
       .name .items input{
            border:1px solid red;
         color:red;
        }
        </style>
         @endif
         @if($errors->has('email')) <style>
       .email .items input{
            border:1px solid red;
         
        }
        </style>
         @endif
         @if($errors->has('email')) <style>
       .password .items input{
            border:1px solid red;
         
        }
        </style>@endif
    <section>
        <div class="home" style="background:url('{{asset('Picsart_24-04-02_12-34-27-844.jpg')}}');
background-position:center;
 background-size:cover;
background-repeat: no-repeat;
   ">
<div class="top">
    
    <div class="buttons">
   
    
 
    </div>
</div>   
<div class="logo">
        <p>dribble</p>
    </div>
<div class="header">
    <p>Discover the worlds top Designers & Creatives </p>
</div>
</div>
<div class="singup-login">

 <div class="signup">
<div class="login-msg">
    <p>Already a member <a href="">sign in</a></p>
</div>
@if($errors->has('check'))
                <span style="width:100%; color:red; display:flex;  justify-content:center; align-items:center;" >*{{$errors->first('check')}}</span>
              @endif
<div class="sign-head">
    <h1>Sign up to Dribble</h1>
</div>
<form action="{{route('signup')}}" method="post"   class="signup-cards">
    @csrf
    <div class="names">
<div class="main-name">
    
    <div class="name-inputs">
        <div class="name-inpu">
            <label for="name">Name</label>
    <input type="text" name="name" id="name"></div>
    
    <div class="name-inpu">
    <label for="user">Username</label>
    <input type="text" name="username" id="user"></div>
    </div>
</div>
<div class="error">
    <div class="errors">
        @if($errors->has('name'))
    <div class="error-name">
    *{{$errors->first('name')}}
    </div>@endif
    @if($errors->has('username'))
    <div class="user-error">
    *{{$errors->first('username')}}
    </div>@endif</div>
</div>
<div class="user-email">
    <div class="email-input">
    <label for="email">Email</label>
<input type="email" name="email" id="email">
    </div>
</div>
<div class="error" >
    <div class="errors" style="width:100%; ">
    @if($errors->has('email'))
    <div class="error-name2" >
    *{{$errors->first('email')}}
    </div>
    @endif
    </div>
</div>
<div class="user-email">
    <div class="email-input">
    <label for="email">Password</label>
<input type="password" name="password" id="email">
    </div>
</div>
<div class="error">
    <div class="errors">
    @if($errors->has('password'))
    <div class="error-name" style="width:100% ;">
    *{{$errors->first('password')}}
    </div>
    @endif</div>
</div>
<div class="privacy-check">
    <div class="check-privacy">
        <input type="checkbox" name="check" id="">
        <p>
            Creating an account means you're okey with 
            our  <span>Terms of <br>services, privacy policy,</span>
            and our default <span>default Notification <br> Settings</span>
        </p>
    </div>
</div>
<div class="submit-button">
    <div class="button">
        <button>Create Account</button>
    </div>
</div>
    </div>
    </form>
 </div>
    
 
 
 <div class="login">
<div class="login-msg">
    <p>Don't Have Account?<a>sign up</a></p>

</div>

</div>
    </section>
</body>
</html>
