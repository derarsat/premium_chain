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
    <div class="bg-no-repeat">
        <div style="background-image: url({{asset('/tr-bg.png')}})" class="px-4 py-24 lg:px-0 max-w-7xl mx-auto">
            <div class=" w-full lg:w-6/12 flex justify-end gap-6 flex-col ml-auto">
                <h1 class="text-4xl lg:text-5xl uppercase  text-center lg:text-left">
                    <span class="font-normal">Taking hospitality</span> <br>
                    <span class="font-bold">to new heights</span>
                </h1>
                <p>
                    the chain offers a variety of culinary experiences specializing in the Lebanese Cuisine and has
                    more
                    than 25 years of experience in the food and beverage industry. The company’s expertise includes
                    catering, event production, concept development, and menu planning, among others. Owning, Operating,
                    and
                    Managing branches in four countries at the moment.
                    <br>
                    <br>
                    As a strategic partner to the General Entertainment Authority and SELA (Sports, Entertainment, and
                    Culture), the chain has contributed to the success of numerous events in Saudi Arabia. The
                    company has played a significant role in the organization of the Riyadh Season and Jeddah Seasons,
                    as
                    well as Formula One events.
                    <br>
                    <br>
                    With a focus on providing the highest quality culinary experiences, the chain prides
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
        <div
            class="px-4 py-12 lg:py-24 lg:px-0 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-24 text-white ">

            <div>
                <img class="mb-4" src="{{asset('/ghassan-attar.webp')}}" alt="ghassan-attar">
                <div class="grid grid-cols-1 gap-4 ">
                    <h1 class="text-3xl font-black"> Ghassan Attar</h1>
                    <h2 class="text-4xl font-light">CHAIRMAN</h2>
                    <p class=" font-normal">
                        Ghassan Attar, most notably known for owning & managing
                        Attar Travel, Attar Ground Handling Co and being a
                        shareholder in Rolex, always believed in the potential of the
                        F&B sector. He started his first HORECA venture by acquiring
                        Three Arby's franchise in London, the third largest QSR chain
                        in the US in terms of revenue. A chance encounter with
                        Mohamad Sour led to the creation of The Chain, a group of
                        restaurants that offer authentic Lebanese food and
                        hospitality.
                    </p>
                </div>
            </div>
            <div>
                <img class="mb-4" src="{{asset('mohammad-srour.webp')}}" alt="Mohammad Srour">
                <div class="grid grid-cols-1 gap-4 ">
                    <h1 class="text-3xl font-bold">Mohammad Srour</h1>
                    <h2 class="text-4xl font-light">CEO</h2>
                    <p class=" font-normal">

                        Mohammad Sour began his culinary experience as a
                        humble waiter to finance his studies and rose through the
                        ranks by honing his skills and developing a taste for quality
                        fine dining. Through his entrepreneurial spirit and business
                        acumen, he started his first venture by creating the Beit
                        Ward brand in 2018 in Riyadh, Saudi Arabia, followed by
                        Beirut Khanum in 2020 in Jeddah. Now, he leads one of the
                        most successful F&B groups in the GCC with over 1,000
                        employees.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!--  -->
    <!--  -->
    <div class=" max-w-7xl text-center mx-auto px-4 lg:px-0 grid grid-cols-1 gap-8 pb-12">
        <h1 class="text-4xl lg:text-5xl uppercase ">
            <span class="font-normal">Hospitality </span>
            <span class="font-black">consultancy</span>
        </h1>
        <p class="">
            the chain has a diverse division that offers a range of services to clients wanting to start their
            own restaurants, including branding, recruitment, marketing, and operational services. The success of
            the chain lies in the company's commitment to providing high-quality hospitality services that
            cater to the needs of their customers.

            the chain also has a consultancy division, which offers turnkey consultancy solutions to clients
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
        <div class="relative w-full with-shadow min-h-[50vh]"
            style="background: url({{asset('hospitality-consultancy.webp')}})">
        </div>
    </div>
    <div class="max-w-7xl text-center mx-auto px-4 lg:px-0 grid grid-cols-1 gap-8 mb-12 ">
        <h1 class="text-4xl lg:text-5xl uppercase">
            <span class="font-normal">GIVING BACK </span>
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
            <div class="relative with-shadow-2 min-h-[50vh]"
                style="background:url({{asset('giving-back-to-the-community.webp')}})">
            </div>
            <p class="text-left">
                the chain has realized the importance of engaging in social responsibility activities as a
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