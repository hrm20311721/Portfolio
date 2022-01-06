<x-admin-layout header="スキル一覧">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end mb-3">
            <a class="btn btn-info text-white" href="{{ route('skills.create') }}">スキル追加</a>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            カテゴリー
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            名前(英語)
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            名前(日本語)
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            レベル
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                            編集/削除
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $skill->category }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $skill->name_en }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $skill->name_jp }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $skill->levels }}</td>
                        <td class="py-4 px-6 border-b border-grey-light flex justify-center">
                            <button type="button"
                                class="py-1 px-3 rounded text-sm text-gray-400 hover:text-green-400" value="{{ $skill->id }}" data-bs-toggle="modal" data-bs-target="#edit-modal">
                                <i class="far fa-edit"></i>
                            </button>
                            <form action="{{ url('skills/'.$skill->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="py-1 px-3 rounded text-sm text-gray-400 hover:text-green-400">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" id="skills_update">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">スキル編集</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="columns-2">
                            <div class="mb-3">
                                <label for="category" class="form-label">カテゴリー</label>
                                <select class="form-control @error('category') is-invalid @enderror" name="category" id="category">
                                    <option value="front">front</option>
                                    <option value="back">back</option>
                                    <option value="others">others</option>
                                </select>
                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="levels" class="form-label @error('levels') is-invalid @enderror">レベル</label>
                                <select class="form-control" name="levels" id="levels">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('levels')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="columns-2">
                            <div class="mb-3">
                                <label for="name_en" class="form-label @error('name_en') is-invalid @enderror">スキル名(英語)</label>
                                <input type="text" class="form-control" name="name_en" id="name_en">
                                @error('name_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_jp" class="form-label @error('name_jp') is-invalid @enderror">スキル名(日本語)</label>
                                <input type="text" class="form-control" name="name_jp" id="name_jp">
                                @error('name_jp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-gray-600" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>




