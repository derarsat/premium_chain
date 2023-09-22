@extends('layouts.admin')
@section('content')
    <div class="mb-4 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-light text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="carriers-tab" data-tabs-target="#carriers"
                        type="button" role="tab" aria-controls="carriers" aria-selected="false">Careers
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                    id="investment-tab" data-tabs-target="#investment" type="button" role="tab"
                    aria-controls="investment" aria-selected="false">Investment
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                    id="marketing-tab" data-tabs-target="#marketing" type="button" role="tab" aria-controls="marketing"
                    aria-selected="false">Marketing
                </button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg bg-gray-50 " id="carriers" role="tabpanel" aria-labelledby="carriers-tab">
            <div class="relative overflow-x-auto">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">
                            Email Address
                        </th>
                        <th scope="col">
                            Full name
                        </th>
                        <th scope="col">
                            Position interested in
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carriers as $carrier)
                        <tr>
                            <td>{{$carrier['email']}}</td>
                            <td>{{$carrier['name']}}</td>
                            <td>{{isset($carrier['position']) ? $carrier['position'] : 'N/A'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 " id="investment" role="tabpanel" aria-labelledby="investment-tab">
            <table>
                <thead>
                <tr>
                    <th scope="col">
                        Email Address
                    </th>
                    <th scope="col">
                        Full name
                    </th>
                    <th scope="col">
                        Phone Number
                    </th>
                    <th scope="col">
                        Company Name
                    </th>
                    <th scope="col">
                        Company Website
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($investments as $investment)
                    <tr>
                        <td>{{$investment['email']}}</td>
                        <td>{{$investment['name']}}</td>
                        <td>{{isset($investment['phone']) ? $investment['phone'] : 'N/A'}}</td>
                        <td>{{isset($investment['company_name']) ? $investment['company_name'] : 'N/A'}}</td>
                        <td>{{isset($investment['company_website']) ? $investment['company_website'] : 'N/A'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 " id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
            <table>
                <thead>
                <tr>
                    <th scope="col">
                        Email Address
                    </th>
                    <th scope="col">
                        Message
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($marketings as $marketing)
                    <tr>
                        <td>{{$marketing['email']}}</td>
                        <td>{{$marketing['message'] ?? $marketing['message']  }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
