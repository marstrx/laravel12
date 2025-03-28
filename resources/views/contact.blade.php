@extends("layouts.app");

@section("content")
    <form>
        <div class="col-12 col-md-6 offse">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="message">Message</label>
                <textarea rows="4" class="form-control" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send message</button>
        </div>
    </form>
@endsection