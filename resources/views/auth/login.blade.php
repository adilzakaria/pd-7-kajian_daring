<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/authcss/style.css" />
    <title>Daftar dan Masuk</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <!-- form login -->
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
          @csrf
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" for="email" :value="__('Email')" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
              <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" for="password" :value="__('Password')" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
              <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>
            <input type="submit" value="Masuk" class="btn solid" />
          </form>
        <!-- end form login -->

        <!-- form register -->
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
          @csrf
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" for="name" :value="__('Name')" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" for="email" :value="__('Email')" id="email" class="block mt-1 w-full" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" for="password" :value="__('Password')" id="password" name="password" required autocomplete="new-password" placeholder="Password" />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" for="password_confirmation" :value="__('Confirm Password')" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <input type="submit" class="btn" value="Daftar" />
          </form>
          <!-- end register form -->

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum memiliki akun ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah punya akun</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/authjs/app.js"></script>
  </body>
</html>
