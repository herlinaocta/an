@extends('layouts.web')

@section('content')

@include('web.components.header')

<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">My Account</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>My Account</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="lynessa">
                        <div class="lynessa-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1">
                                <h2>Login</h2>
                                <form class="lynessa-form lynessa-form-login login" method="post">
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="username">Username or email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="lynessa-Input lynessa-Input--text input-text"
                                               name="username" id="username" autocomplete="username" value=""></p>
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="lynessa-Input lynessa-Input--text input-text"
                                               type="password" name="password" id="password"
                                               autocomplete="current-password">
                                    </p>
                                    <p class="form-row">
                                        <input type="hidden" id="lynessa-login-nonce" name="lynessa-login-nonce"
                                               value="832993cb93"><input type="hidden" name="_wp_http_referer"
                                                                         value="/lynessa/my-account/">
                                        <button type="submit" class="lynessa-Button button" name="login"
                                                value="Log in">Log in
                                        </button>
                                        <label class="lynessa-form__label lynessa-form__label-for-checkbox inline">
                                            <input class="lynessa-form__input lynessa-form__input-checkbox"
                                                   name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <p class="lynessa-LostPassword lost_password">
                                        <a href="#">Lost your
                                            password?</a>
                                    </p>
                                    <div class="lynessa-social-login">
                                        <h6>Connect a social network</h6>
                                        <ul>
                                            <li>
                                                <a class="login-facebook" href="#" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-google" href="#" target="_blank">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-twitter" href="#" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="u-column2 col-2">
                                <h2>Register</h2>
                                <form method="post" class="lynessa-form lynessa-form-register register">
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="lynessa-Input lynessa-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p>
                                    <div class="lynessa-privacy-policy-text"><p>Your personal data will be used to
                                        support your experience throughout this website, to manage access to your
                                        account, and for other purposes described in our <a
                                                href="#" class="lynessa-privacy-policy-link"
                                                target="_blank">privacy policy</a>.</p>
                                    </div>
                                    <p class="lynessa-FormRow form-row">
                                        <input type="hidden" id="lynessa-register-nonce"
                                               name="lynessa-register-nonce" value="45fae70a87"><input type="hidden"
                                                                                                           name="_wp_http_referer"
                                                                                                           value="/lynessa/my-account/">
                                        <button type="submit" class="lynessa-Button button" name="register"
                                                value="Register">Register
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('web.components.footer')