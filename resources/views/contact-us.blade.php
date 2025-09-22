@extends("partials.main")
@section("styles")
 <link rel="stylesheet" href="{{ asset("css/styles/contact-us.css") }}" />
@endsection
@section("body")
 <header>
      <img src="{{ asset("images/contactusheader.jpg") }}" alt="" />
      <div>
        <h2>Contact us</h2>
        <p><a href="{{ route("main.index") }}">home</a> | contact-us</p>
      </div>
  </header>
    <main>
      <section>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d127641.76888995063!2d36.803053!3d-1.291172!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTcnMjguMiJTIDM2wrA0OCcxMS4wIkU!5e0!3m2!1sen!2sus!4v1745654174700!5m2!1sen!2sus"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
      <fieldset>
        <form action="">
          <h2>Send us a message</h2>
          <label for="name">Name</label>
          <span id="name">
            <input type="text" placeholder="first" name="firstname" />
            <input type="text" placeholder="last" name="lastname" />
          </span>
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="doe@example.com"
          />
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" />
          <label for="message">message or comments</label>
          <textarea name="message" id="message"></textarea>
          <input type="submit" value="submit" />
        </form>
      </fieldset>
    </main>
   
@endsection
   