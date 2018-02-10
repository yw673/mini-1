@extends('layouts.default')
@section('content')

    <div class="card col-8 mt-2" >
        <div class="card-title mt-2"><h2>Contact Form</h2></div>
        <div class="card-body">
            <form action="/contact" method="post">
                {{csrf_field()}}
                <div class="form-group ">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email"
                           placeholder="name@example.com">
                <div class="form-group mt-2">
                        <label for="subject">Subject</label>
                        <textarea name="subject" class="form-control" id="subject" ></textarea>
                    </div>
                <div class="form-group mt-2">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@stop