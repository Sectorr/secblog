<?php if(! empty(config('blog')['twitter'])): ?>
    <a href="https://twitter.com/<?= config('blog')['twitter'] ?>" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
    </a>
<?php endif; ?>
<?php if(! empty(config('blog')['facebook'])): ?>
    <a href="https://facebook.com/<?= config('blog')['facebook'] ?>" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
    </a>
<?php endif; ?>
<?php if(! empty(config('blog')['googleplus'])): ?>
    <a href="https://plus.google.com/<?= config('blog')['facebook'] ?>" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
        </span>
    </a>
<?php endif; ?>
<?php if(! empty(config('blog')['youtube'])): ?>
    <a href="https://www.youtube.com/channel/<?= config('blog')['youtube'] ?>" target="_blank">
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
        </span>
    </a>
<?php endif; ?>
