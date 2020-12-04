@extends('layout')

@section('content')
    <div class="main-container">
        <div class="border-article-post">
            <h3 class="sub-title">
                さぁ、最新のニュースをシェアしましょう
            </h3>

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <fieldset class="post-container">
                    <div class="form-group">
                        <label for="article-title" class="lavel">
                            タイトル：
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="input-title"
                            value="{{ old('title') }}"
                            type="text"
                            placeholder="入力してください※30字以内"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="article-text" class="lavel">
                        記事：
                        </label>

                        <textarea
                            id="text"
                            name="text"
                            class="textarea-text"
                            rows="4"
                            placeholder="入力してください"
                        >{{ old('text') }}</textarea>
                        @if ($errors->has('text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('text') }}
                            </div>
                        @endif
                    </div>

                    <div class="article-cxl">
                        <a class="btn btn-secondary" href="{{ route('top') }}" class="submitStyle">
                            キャンセル
                        </a>

                        <button type="submit" class="submitStyle">
                            投稿
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="article-container">
        @foreach ($posts as $post)
            <div class="article-card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $post->text }}
                    </p>
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">記事全文・コメントを見る</a>
                </div>
                {{-- <div class="card-footer">
                    <span class="date">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                    </span>

                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                
                </div> --}}
            <hr>
            </div>
            <div class="d-flex justify-content-center mb-5">
                {{ $posts->links() }}
            </div>

        @endforeach
    </div>
@endsection