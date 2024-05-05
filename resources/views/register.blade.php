@extends('layout')
@section('header')
<div class="login">
    <form action="" class="login__form">
        <h1 class="login__title">Register</h1>

        <div class="login__content">
            <div class="login__box">
                <i class="ri-user-3-line login__icon"></i>

                <div class="login__box-input">
                    <input type="email" required class="login__input" placeholder=" ">
                    <label for="" class="login__label">Name</label>
                </div>
            </div>

            <div class="login__box">
                <i class='bx bx-envelope login__icon'></i>

                <div class="login__box-input">
                    <input type="email" required class="login__input" placeholder=" ">
                    <label for="" class="login__label">Email</label>
                </div>
            </div>

            <div class="login__box">
                <i class="ri-lock-2-line login__icon"></i>

                <div class="login__box-input">
                    <input type="password" required class="login__input" id="login-pass" placeholder=" ">
                    <label for="" class="login__label">Password</label>
                    <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                </div>
            </div>
        </div>

        <div class="login__check">
            <div class="login__check-group">
                <input type="checkbox" class="login__check-input">
                <label for="" class="login__check-label">Remember me</label>
            </div>

            <a href="#" class="login__forgot">Forgot password?</a>
        </div>

        <button class="login__button">Register</button>

        <p class="login__register">
            Do you have an account? <a href="/login">login</a>
        </p>
    </form>
</div>
@endsection

