<script src="{{ asset('js/plugins.js') }}"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>
@yield('script')
