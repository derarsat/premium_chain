@extends("layouts.front")
@section("title")
    About
@endsection
@section("content")
   <div class="grid grid-cols-1 gap-12 lg:gap-24">
       <div class="relative">
           <img class="w-screen min-h-[70vh]" src="{{asset('/about.webp')}}" alt="">
           <div
               class="absolute bg-gradient-to-t from-[rgba(250,250,250,1)] to-transparent via-[rgba(0,0,0,0.4)] inset-0 text-white text-center flex items-center justify-center flex-col z-10">
               <div class="max-w-4xl px-4 lg:px-0 flex flex-col gap-8">
                   <h1 class="text-4xl lg:text-5xl font-bold">“TRUE HOSPITALITY CONSISTS
                       OF GIVING THE BEST OF
                       YOURSELF TO YOUR GUESTS.” </h1>
                   <h4 class="font-medium">– ELEANOR ROOSEVELT</h4>
               </div>
           </div>
       </div>
       <div  class="bg-no-repeat">
           <div style="background-image: url({{asset('/tr-bg.png')}})" class="px-4 py-24 lg:px-0 max-w-7xl mx-auto">
               <div class=" w-full lg:w-6/12 flex justify-end gap-6 flex-col ml-auto">
                   <h1 class="text-4xl lg:text-5xl uppercase  text-center lg:text-left">
                       <span class="font-normal">Taking hospitality</span> <br>
                       <span class="font-bold">to new heights</span>
                   </h1>
                   <p>
                       Premium Chain offers a variety of culinary experiences specializing in the Lebanese Cuisine and has
                       more
                       than 25 years of experience in the food and beverage industry. The company’s expertise includes
                       catering, event production, concept development, and menu planning, among others. Owning, Operating,
                       and
                       Managing branches in four countries at the moment.
                       <br>
                       <br>
                       As a strategic partner to the General Entertainment Authority and SELA (Sports, Entertainment, and
                       Culture), Premium Hospitality has contributed to the success of numerous events in Saudi Arabia. The
                       company has played a significant role in the organization of the Riyadh Season and Jeddah Seasons,
                       as
                       well as Formula One events.
                       <br>
                       <br>
                       With a focus on providing the highest quality culinary experiences, Premium Hospitality prides
                       itself on
                       excellent service and attention to detail.
                       The company is dedicated to providing customized solutions to meet the unique needs and preferences
                       of
                       each client.
                   </p>
               </div>
           </div>
       </div>
       <!--  -->
       <!--  -->
       <div class="bg-slate-500">
           <div class="px-4 py-12 lg:py-24 lg:px-0 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-24 text-white ">
               <div >
                   <img class="mb-4" src="{{asset('mohammad-srour.webp')}}" alt="ghassan-attar">
                   <div class="grid grid-cols-1 gap-4 ">
                       <h1 class="text-3xl font-bold">Mohammad Srour</h1>
                       <h2 class="text-4xl font-light">CEO</h2>
                       <p class=" font-normal">
                           In today's fast-paced world, the hospitality industry is one of the most dynamic and challenging
                           industries. Across the globe, the industry generates high revenue and is constantly trying to
                           improve customer experiences. The industry is driven by passion, creativity, and dedication.
                           A young ambitious man, Mohamad Srour, entered the hospitality industry, and with his persistence
                           and devotion, he climbed the ladder of success to become a pioneer in Lebanese hospitality.

                       </p>
                   </div>
               </div>
               <div >
                   <img class="mb-4" src="{{asset('/ghassan-attar.webp')}}" alt="ghassan-attar">
                   <div class="grid grid-cols-1 gap-4 ">
                       <h1 class="text-3xl font-black"> Ghassan Attar</h1>
                       <h2 class="text-4xl font-light">CHAIRMAN</h2>
                       <p class=" font-normal">
                           Our Chairman Ghassan Attar in also a Board Member at Rolex. Attar Travel, and currently an agent
                           for several international airlines.
                       </p>
                   </div>
               </div>
           </div>
       </div>
       <!--  -->
       <!--  -->
       <div class=" max-w-7xl text-center mx-auto px-4 lg:px-0 grid grid-cols-1 gap-8 pb-12">
           <h1 class="text-4xl lg:text-5xl lg:text-5xl uppercase ">
               <span class="font-normal">Hospitality </span>
               <span class="font-black">consultancy</span>
           </h1>
           <p class="">
               Premium Hospitality has a diverse division that offers a range of services to clients wanting to start their
               own restaurants, including branding, recruitment, marketing, and operational services. The success of
               Premium Hospitality lies in the company's commitment to providing high-quality hospitality services that
               cater to the needs of their customers.

               Premium Hospitality also has a consultancy division, which offers turnkey consultancy solutions to clients
               wanting to start their own restaurants. The consultancy team provides a range of services, including
               branding, recruitment, marketing, and operational services. The team comprises experienced professionals
               from the hospitality industry, including chefs, managers, and marketers, who work closely with clients to
               create tailor-made solutions that address their specific needs.
           </p>
           <style>
               .with-shadow::after {
                   width: 60%;
                   content: "";
                   z-index: -10;
                   height: 100%;
                   right: -75px;
                   top: 75px;
                   position: absolute;
               }
           </style>
           <div class="relative w-full with-shadow min-h-[50vh]" style="background: url({{asset('hospitality-consultancy.webp')}})">
           </div>
       </div>
       <div class="max-w-7xl text-center mx-auto px-4 lg:px-0 grid grid-cols-1 gap-8 mb-12 ">
           <h1 class="text-4xl lg:text-5xl uppercase">
               <span class="font-normal">GIVING BACK  </span>
               <span class="font-black">TO THE COMMUNITY</span>
           </h1>
           <style>
               .with-shadow-2::after {
                   width: 70%;
                   content: "";
                   z-index: -10;
                   height: calc(100% + 100px);
                   right: -50px;
                   top: -50px;
                   position: absolute;
               }
           </style>
           <div class="grid grid-cols-1 lg:grid-cols-2 gap-24  py-24 ">
               <div class="relative with-shadow-2 min-h-[50vh]" style="background:url({{asset('giving-back-to-the-community.webp')}})">
               </div>
               <p class="text-left">
                   Premium hospitality has realized the importance of engaging in social responsibility activities as a
                   means of not only giving back to create a culture of support to all employees. Being one of the leading
                   restaurant operators in Riyadh, Saudi Arabia, with a portfolio of over 10 brands. The company has a
                   strong reputation for providing high-quality food and service to customers, and it has long been
                   involved in various corporate social responsibility initiatives. However, the company took this to
                   another level by launching its Premium Cares program in 2017.
                   The Premium Cares program is a social responsibility initiative that focuses on giving back to the
                   community. The program is designed to support various social causes through different activities. These
                   activities are centered on giving food to the needy, feeding orphans during Islamic holidays, inviting
                   elderly from home centers, helping war victims abroad, and planting trees around the world. Supporting
                   the vision of Green Riyadh 2030.
               </p>
           </div>
       </div>
   </div>
@endsection
