@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="gistlog-author-block">
            <a href="https://github.com/{{ $author->username }}" class="profile-pic">
                <img src="{{ $author->avatarUrl }}">
            </a>
            <h1 class="gistlog__title">{{ $author->name }}</h1>
            <span class="gistlog__author">({{ "@" . $author->username }})</span>
        </section>

        <section>
            <ul class="list-unstyled">
                @foreach ($author->gists as $gist)
                    <li class="gistlog-article">
                         <a href="/{{ $author->username }}/{{ $gist->id }}" class="gistlog-article__title">{{ $gist->title }}</a>
                        <span class="gistlog-article__timestamp">
                            Posted {{ $gist->createdAt->diffForHumans() }}
                        </span>
                        <p class="gistlog-article__summary">
                            {{ $gist->getPreview() }}&hellip;
                        </p>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
    $(function() {
        commentForm.init();

        // $('.js-gistlog-content pre').each(function () {
        //     var numberOfLines = $(this).find('code').html().split(/\n/).length - 1;
        //     var lineNumbers = [];
        //     for (var i = 1; i <= numberOfLines; i++) {
        //         lineNumbers.push(i);
        //     }
        //     $(this).append('<div class="line-numbers">' + lineNumbers.join("\n") + '</div>');
        // });
        // autosize($('textarea'));
    });
    </script>
@endsection
