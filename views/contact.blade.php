@extends('layout')

@section('content')

<!-- about-Us -->
<div class="about-us__home">
        <p>THE ULTIMATE LUXURY</p>
        <h1>New Details</h1>
        <div class="about-us__home-about"><h6>Home | <span>Blog</span></h6></div>
    </div>
    <!--body-->
    <div class="contact">
        <div>
            <img src="./Assets/mail-icon.png" alt="">
        </div>
        <div class="contact__addres">
            <p>Hotel Addres</p>
            <p>19/A, Cirikon City hall Tower New York, NYC</p>
        </div>
        <p class="contact__number">01</p>
    </div>

    <div class="contact">
        <div>
            <img src="./Assets/phone-icon.png" alt="">
        </div>
        <div class="contact__addres">
            <p>Phone Number</p>
            <p>+97656867578647</p>
            <p>+87676686757656</p>
        </div>
        <p class="contact__number">02</p>
    </div>
    <div class="contact">
        <div>
            <img src="./Assets/location-icon.png" alt="">
        </div>
        <div class="contact__addres">
            <p>Email</p>
            <p>info@webmail.com</p>
            <p>jobs.webmail@mail.com</p>
        </div>
        <p class="contact__number">03</p>
    </div>
    <div class="contact-img">
        <img src="./Assets/maps.png" alt="">
    </div>

    <form class="contact-form">
        <div class="contact-form__input-container">
            <input type="text" placeholder="Your full name" name="name">
            <img src="./Assets/icon/contact/human.png" alt="">
        </div>
        <div class="contact-form__input-container">
            <input type="text" placeholder="Add phone number" name="phone">
            <img src="./Assets/icon/contact/phone.png" alt="">

        </div>
        <div class="contact-form__input-container">
            <input type="text" placeholder="Enter email addres"  name="email">
            <img src="./Assets/icon/contact/email.png" alt="">

        </div>
        <div class="contact-form__input-container">
            <input type="text" placeholder="Enter subject" name="subject">  
            <img src="./Assets/icon/contact/book.png" alt="">
        </div>
        <div class="contact-form__input-container">
            <textarea  name="comment" rows="10" cols="22"></textarea>
            <img src="./Assets/icon/contact/pencil.png" alt="">

        </div>
        <button class="contact-form__submit">Send</button>
    </form>

    @endsection