@extends('main')
@section('title' , '-Contact')

@section('stylesheets')
@section('content')
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Me</h2>
                    <hr>
                    <form data-parsley-validate>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required maxlength="190">

                            <label for="sub">Subject</label>
                            <input type="sub" class="form-control" id="sub" required>

                            <label for="body">Message</label>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="10" required placeholder="Type here your message..."></textarea>
                        </div>

                        <input type="submit" value="Send Message" class="btn btn-success"> 
                    </form>
                </div>
            </div>
@endsection

@section('scripts')