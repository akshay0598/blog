@extends('main')
@section('content')
@section('title',' |Contact')
<div class="row">
<div class="col-md-12">
<h1>Contact Me</h1>
 <form>
 <div class="form-group">
 <label name="email">Email:</label>
 <input type="email" name="email" id="email" class="form-control">
 </div>
 <div class="form-group">
 <label name="subject">Subject:</label>
 <input type="text" name="subject" id="subject" class="form-control">
 </div>
 <div class="form-group">
 <label name="message">Message:</label>
 <textarea name="message" id="message" class="form-control" placeholder="Type a message here!!"></textarea>
 </div>
 <input type="submit" value="Send Message" class="btn btn-success">
</form>
</div>
</div>
@endsection
