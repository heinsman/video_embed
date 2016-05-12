<?php
function hc_video_embed($video_url) {
	$uniqid = mt_rand(0, 9999);
	$is_youtube = substr_count($video_url, "youtu");
    if ($is_youtube > 0) {
        $videoid = substr(strstr($video_url, "="), 1);
        echo "
        <div id='youtube-video-". $videoid ."' class='video-wrap' ><iframe id=\"youtube-iframe\" frameborder=\"0\" allowfullscreen=\"1\" title=\"YouTube video player\" width=\"100%\" height=\"380\" src=\"https://www.youtube.com/embed/" . $videoid . "?autoplay=0&amp;controls=1&amp;enablejsapi=1&amp;origin=http%3A%2F%2Favant.dev\"></iframe></div>
    ";
    };
    $is_vimeo = substr_count($video_url, "vimeo");
    if ($is_vimeo > 0) {
        $videoid = substr(strstr($video_url, "m/"), 2);
        echo "
        <div id='vimeo-video-". $videoid ."' class='video-wrap'><iframe id=\"vimeo-iframe\" src=\"http://player.vimeo.com/video/" . $videoid . "?api=1\" width=\"100%\" height=\"380\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
    ";
    };
}