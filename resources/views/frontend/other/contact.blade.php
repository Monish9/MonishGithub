

@section('title')
    Contact Us
@endsection


@section('content')
   @include('includes/info-box')
   <div class="body">
   <form action="" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            
        </div>
        <div class="input-group">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email">
            
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
            
        </div>
         <div class="input-group">
            <label for="message">Message</label>
            <input type="text" name="message" id="message">
            
        </div>
        <div class="input-group">
        <button type="button" class="btn" id="submit">Submit Message</button>
        </div>
        <input type="hidden" value="{{ Session::token() }}" name="_token" />
   </form>
   </div>
   
@endsection