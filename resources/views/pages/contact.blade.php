@extends('main')
@section('title','| Contacts page')
@section('content')
    <h1>CONTACTS page</h1>
    <hr>
    <form>
        <div class="form-group">
            <label name="email">Email</label>
            <input id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label name="email">Subject</label>
            <input id="subject" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label name="email">Message</label>
            <textarea id="massage" name="email" class="form-control">Tyle your massage here ...</textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Send Message">
    </form>
@endsection