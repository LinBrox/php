<div class="flex justify-center items-center">
    <video id="videoPlayer" class="w-full max-w-4xl" autoplay muted onclick="togglePlayPause(this)">
        <source src="{{ asset($src) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<script>
    function togglePlayPause(videoElement) {
        if (videoElement.paused) {
            videoElement.play();
        } else {
            videoElement.pause();
        }
    }
</script>
