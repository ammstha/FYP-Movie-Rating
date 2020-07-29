@extends('front.layout.app')
@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        <h1 class="mt-5">Contact Me</h1>
        <hr>
        <form action="{{ url('contact') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <label name="message">Message:</label>
                <textarea rows="6"  id="message" name="message" class="form-control">Type your message here...</textarea>
            </div>

            <input type="submit" value="Send Message" class=" btn-outline-dark btn-sm">
        </form>
    </div>
</div>
    </div>
    @endsection



