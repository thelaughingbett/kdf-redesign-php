@extends('partials.main')
@section('styles')
 <link rel="stylesheet" href="{{ asset('css/styles/ranks.css') }}" />
@endsection
   
   @section('body')
   @include('partials.navbar')
    <main>
        <div class="banner">KDF RANKS</div>
        <div class="filler">
            <p>
                Kenya Defence Forces (KDF) has introduced a segment in its Strategic Communications to help Kenyans understand KDF better. The weekly segment will discuss different facets of the military. The first segment covers the military rank structure.
            </p>
            <p>
                The KDF rank system is a hierarchical relationship that provides a system of leadership that indicates a soldier’s level of expertise, responsibility and authority. Each level of leadership has a significant role in the total KDF mission.
            </p>
            <p>
                KDF ranks have adopted a distinct two-tier system of Officers and Service Members. Officers are at the top of the hierarchy and are granted commission by the Commander-in-Chief, thus referred to as commissioned officers.
            </p>
            <p>
                In this first segment, we look at the KDF’s Commissioned Officers. The lowest rank among officers is that of a Second Lieutenant (2Lt) attained upon commissioning from the Kenya Military Academy while the highest rank is that of a General, (four-star). At any one given time, KDF has only one four-star General who is Chief of the Defence Forces.
                The officers’ ranks are displayed on the shoulder.
            </p>
            <p>
                The KDF has a meritocracy system where one has to pass promotional examinations, be disciplined and have integrity to be considered for the next rank. Below is the insignia of the Commissioned Officers.
            </p>
        </div>
        <section class="commisioned">
            <div class="services">
                <span data-active>Kenya Army</span>
            <span>Kenya Airforce</span>
            <span>Kenya Navy</span>
            </div>
            <figure>
                <img src="{{asset('images/kenya-army ranks.jpg')}}" alt="">
            </figure>
        </section>

        <section class="non-commisioned">
            <div class="services">
                <span data-active>Kenya Army</span>
            <span>Kenya Airforce</span>
            <span>Kenya Navy</span>
            </div>
            <figure>
                <img src="{{ asset('images/non-commisioned.jpg') }}" alt="">
            </figure>
        </section>
      </main>
   @endsection

     