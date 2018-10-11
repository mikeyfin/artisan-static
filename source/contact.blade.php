@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://jumprock.co/mail/{{ $page->services->jumprock }}" method="post">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input name="subject" style="display: none;" value="Blog Contact Page">

        <input type="hidden" name="after" value="{{ $page->production ? $page->baseUrl : 'http://localhost:3000' }}/contact/sent">

        <input type="text" name="trapit" value="" style="display: none;">

        <input type="hidden" name="replyto" value="%email">

        <input type="submit" value="Send">
    </form>
@endsection
