@extends('partials.main')

@section('styles')
 <link rel="stylesheet" href="{{ asset('css/styles/index.css') }}" />
@endsection

@section('body')
 @include('partials.navbar')
    <header>
      <figure data-active>
        <img src="{{asset("images/kdf-holding-flag.webp")}}" alt="" />
        <figcaption>
          <h2>OUR MISSION</h2>
          <p>
            To defend and protect the sovereignty and territorial integrity of
            the Republic, assist and cooperate with other authorities in
            situations of emergency or disaster and restore peace in any part of
            Kenya affected by unrest or instability as assigned.
          </p>
        </figcaption>
      </figure>
      <figure>
        <img src="{{  asset("images/kdf-academy.jpeg")}}" alt="" />
        <figcaption>
          <h2>OUR VISION</h2>
          <p>
            A premier, credible and mission capable force deeply rooted in
            professionalism.
          </p>
        </figcaption>
      </figure>
      <figure>
        <img src="{{asset("images/march.webp")}}" alt="" />
        <figcaption>
          <h2>OUR COMMITMENT</h2>
          <p>
            The Ministry of Defence is committed to defending and protecting the
            people of the Republic of Kenya and their property against external
            aggression and also in providing support to the Civil Authority as
            per the Law.
          </p>
        </figcaption>
      </figure>
    </header>

    <main>
      <section class="banner">
        <p>
          <span>KDF MANDATE</span>
          The Executive Order No. 2 of 2023 (Dated 1st November 2023) created
          the Ministry of Defence. The work of the Ministry of Defence is
          informed by the Constitution of the Republic of Kenya. The Ministry is
          obliged to facilitate and support the Kenya Defence Forces (KDF) in
          the discharge of their mandate under Article 241 (3) (a), (b) & (c) of
          the Constitution.
        </p>
        <video autoplay loop muted id="video-banner" data-mute="muted">
          <source src="{{asset("images/homepage.mp4")}}" type="video/mp4" />
          browser does not support this file type
        </video>

        <span id="toggleAudio">
          <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
            <path
              d="M19 6C20.5 7.5 21 10 21 12C21 14 20.5 16.5 19 18M16 8.99998C16.5 9.49998 17 10.5 17 12C17 13.5 16.5 14.5 16 15M3 10.5V13.5C3 14.6046 3.5 15.5 5.5 16C7.5 16.5 9 21 12 21C14 21 14 3 12 3C9 3 7.5 7.5 5.5 8C3.5 8.5 3 9.39543 3 10.5Z"
              stroke="#000000"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </span>
      </section>

      <section class="leadership">
        
        <fieldset>
          <legend>our leadership</legend>
          <article class="defence-leadership">
            <figure>
            @php
              use App\Models\personell;

                $president = personell::where('rank','President')->get()->first();

                $CS = personell::where('rank','CS')->get()->first();

                $PS = personell::where('rank','PS')->get()->first();

                $CDF = personell::where('rank','CDF')->get()->first();
                $VCDF = personell::where('rank','VCDF')->get()->first();

            @endphp
              <img src="{{asset( 'storage/' . $president->image )}}" alt="" />
              <figcaption>
                <h2>H.E. Hon. {{ $president['FirstName'] . " ". $president['LastName'] . " " }}  PhD, CGH                   
                </h2>
                <span>
                  President of the Republic of Kenya and Commander-in-Chief of
                  the Defence Forces
                </span>
              </figcaption>
            </figure>
            <figure>
              <img src="{{asset( 'storage/' . $CS->image )}}" alt="" />
              <figcaption>
                <h2>Hon. {{$CS->FirstName . " " . $CS->LastName}}, {{ $CS->title }}</h2>
                <span>
                  Cabinet Secretary <br />
                  ministry of defence
                </span>
              </figcaption>
            </figure>
            <figure>
              <img src="{{ asset("images/gen-kahariri.png") }}" alt="" />
              <figcaption>
                <h2>Gen {{ $CDF->FirstName . " " . $CDF->LastName }} {{$CDF->title}}</h2>
                <span> Chief of the Defence Force </span>
              </figcaption>
            </figure>
            <figure>
              <img src="{{asset( 'storage/' . $PS->image )}}" alt="" />
              <figcaption>
                <h2>Dr. {{$PS->FirstName . " " . $PS->LastName }}, {{$PS->title}}</h2>
                <span>
                  Principal Secretary <br />
                  ministry of defence</span
                >
              </figcaption>
            </figure>
            <figure>
              <img src="{{asset( 'storage/' . $VCDF->image )}}" alt="" />
              <figcaption>
                <h2>
                  Lt Gen {{$VCDF->FirstName . " " . $VCDF->LastName }} {{ $VCDF->title }}
                </h2>
                <span> Vice Chief of the Defence Forces </span>
              </figcaption>
            </figure>
          </article>
        </fieldset>

        <fieldset>
          <legend>service commanders</legend>

          @php
          $CKA = personell::where('rank','CKA')->get()->first();
        
          $CKAF = personell::where('rank','CKAF')->get()->first();
          $CKA = personell::where('rank','CKA')->get()->first();
        
          $CN = personell::where('rank','CN')->get()->first();
          
          @endphp
          <article class="service-leadership">
            <figure>
              <img src="{{asset( 'storage/' . $CKA->image )}}" alt="" />
              <figcaption>
                <h2>
                  Lt Gen {{$CKA->FirstName . " " . $CKA->LastName }} <br> {{ $CKA->title }}
                </h2>
                Commander Kenya Army
              </figcaption>
            </figure>
            <figure>
              <img src="{{asset( 'storage/' . $CKAF->image )}}" alt="" />
              <figcaption>
                <h2>Maj Gen {{$CKAF->FirstName . " " . $CKAF->LastName }} <br>{{ $CKAF->title }}</h2>
                Commander Kenya Air Force
              </figcaption>
            </figure>
            <figure>
              <img src="{{asset( 'storage/' . $CN->image )}}" alt="" />
              <figcaption>
                <h2>Maj Gen {{$CN->FirstName . " " . $CN->LastName }} <br> {{ $CKAF->title }}</h2>
                Commander Kenya Navy
              </figcaption>
            </figure>
          </article>
        </fieldset>

        <fieldset>
          <legend>OUR SERVICES</legend>
          <article class="services">
            <figure>
              <img src="{{ asset("images/Seal_of_the_Kenya_Army.png") }}" alt="" />
              <figcaption>Kenya Army</figcaption>
            </figure>
            <figure>
              <img src="{{ asset("images/kaf-logo.jpg") }}" alt="" />
              <figcaption>Kenya Airforce</figcaption>
            </figure>
            <figure>
              <img src="{{ asset("images/kn-3.png") }}" alt="" />
              <figcaption>Kenya Navy</figcaption>
            </figure>
          </article>
        </fieldset>
      </section>
      
    </main>
       @include('partials.news')
@endsection

   