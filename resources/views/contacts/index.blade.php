<x-admin-layout header='お問い合わせ一覧'>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            #
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            日時
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            名前
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            アドレス
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            種別
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            内容
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            対応済
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->id }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->created_at }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->name }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->email }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->type }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $contact->detail }}</td>
                            <td class="py-4 px-6 border-b border-grey-light flex justify-center">
                                <form action="{{url('contacts/'.$contact->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="py-1 px-3 rounded text-xs @if($contact->checked) text-green-400 hover:text-gray-400 @else text-gray-400 hover:text-green-400 @endif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-check-circle-fill fill-current" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>


</x-admin-layout>
