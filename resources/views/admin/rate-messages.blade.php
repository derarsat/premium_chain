@extends('layouts.admin')
@section('content')
    <table>
        <thead>
        <tr>
            <th scope="col">
                Full name
            </th>
            <th scope="col">
                Email Address
            </th>
            <th scope="col">
                Birthdate
            </th>
            <th scope="col">
                Atmosphere & cleanliness
            </th>
            <th scope="col">
                Food quality & taste
            </th>
            <th scope="col">
                Quality of service
            </th>
            <th scope="col">
                Message
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->birth}}</td>
                <td>
                    <span class="flex items-center gap-0">
                        @for ($i = 0; $i < $message->r1; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                        </svg>
                        @endfor
                    </span>
                </td>
                <td>
                    <span class="flex items-center gap-0">
                        @for ($i = 0; $i < $message->r2; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                        </svg>
                        @endfor
                    </span>
                </td>
                <td>
                    <span class="flex items-center gap-0">
                        @for ($i = 0; $i < $message->r3; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                        </svg>
                        @endfor
                    </span>
                </td>
                <td id="accordion-collapse" data-accordion="collapse" class="width-auto">
                    <h2 id="accordion-collapse-heading-{{$message->id}}">
                        <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left "
                                data-accordion-target="#accordion-collapse-body-{{$message->id}}" aria-expanded="false"
                                aria-controls="accordion-collapse-body-{{$message->id}}">
                            <span>Expand </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>

                    </h2>
                    <div id="accordion-collapse-body-{{$message->id}}" class="hidden" style="word-break: break-all"
                         aria-labelledby="accordion-collapse-heading-{{$message->id}}">
                        {{$message->message}}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
