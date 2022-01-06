<x-admin-layout header='スキル追加'>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <form action="{{ route('skills.store') }}" method="post">
            @csrf
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
                    <input type="text" class="form-control" name="name_en">
                    @error('name_en')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name_jp" class="form-label @error('name_jp') is-invalid @enderror">スキル名(日本語)</label>
                    <input type="text" class="form-control" name="name_jp">
                    @error('name_jp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-info text-white bg-cyan-400" type="submit">追加</button>
            </div>
        </form>
    </div>

</x-admin-layout>
