<x-admin-layout header="管理画面TOP">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row justify-center mb-3">
            <div class="col-md-4">
                <a href="{{ route('contacts.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-80 flex flex-col justify-center align-items-center cursor-pointer hover:text-green-500">
                    <div class="justify-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-mailbox"
                            viewBox="0 0 16 16">
                            <path
                                d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z" />
                            <path
                                d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z" />
                        </svg>
                    </div>
                    <h4 class="">問い合わせ一覧</h4>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('skills.create') }}"
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-80 flex flex-col justify-center align-items-center cursor-pointer hover:text-green-500">
                    <div class="justify-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-graph-up"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <h4 class="">スキル追加</h4>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#!"
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-80 flex flex-col justify-center align-items-center cursor-pointer hover:text-green-500">
                    <div class="justify-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-journal-plus"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                    </div>
                    <h4 class="">ポートフォリオ追加</h4>
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
