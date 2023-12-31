@extends('layouts.admin')

@section('content')
    @include('admin.notification.header')

    <div class="grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 ">
        <div class="md:col-span-2 xs:col-span-1 lg:col-span-2">
            <div class="card">
                <form action="{{ route('admin.settings.mail.update') }}" method="POST">
                    @csrf
                    <div class="card-body space-y-3">
                        <div>
                            <label for="email_from"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email Sent From') }}</label>
                            <input type="text"id="email_from" name="email_from" aria-describedby="email_from"
                                value="{{ $notification->email_from }}" required placeholder="{{ __('Email address') }}"
                                class="form-control">
                        </div>
                        <div>
                            <label for="email_template"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email Body') }}</label>
                            <textarea id="email_template" name="email_template" rows="10" aria-describedby="email_template"
                                class="form-control" placeholder="{{ __('Your email template') }}">{{ $notification->email_template }}</textarea>
                        </div>
                        <div>
                            <label for="sms_from"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('SMS Sent From') }}</label>
                            <input type="text" id="sms_from" name="sms_from"
                                aria-describedby="sms_from"value="{{ $notification->sms_from }}" required
                                placeholder="{{ __('SMS Sent From') }}" class="form-control">
                        </div>
                        <div>
                            <label for="sms_body"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('SMS Body') }}</label>
                            <textarea id="sms_body" name="sms_body" rows="4" aria-describedby="sms_body" class="form-control"
                                placeholder="{{ __('SMS Body') }}">{{ $notification->sms_body }}</textarea>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="lg:col-span-1 md:col-span-1 xs:col-span-1">
            <div class="card overflow-hidden">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-l-lg">
                                    {{ __('Short Code') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Description') }}
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="short-codes px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @{{ fullname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ __('Full Name of User') }}
                                    </th>
                                </td>

                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="short-codes px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @{{ username }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ __('Username of User') }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="short-codes px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @{{ message }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ __('Message') }}
                                </td>

                            </tr>
                        </tbody>

                    </table>
                </div>

            </div>
            <br>
            <h6 class="my-2 text-center">@lang('Global Short Codes')</h6>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-l-lg">
                                {{ __('Short Code') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Description') }}
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notification->global_shortcodes as $shortCode => $codeDetails)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="short-codes">@{{ @php echo $shortCode @endphp }}</span>
                                </th>
                                <td class="px-6 py-4">
                                    {{ __($codeDetails) }}
                                    </th>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
