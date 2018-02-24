<script>
    $(function(){
//        var working = false;
//        $('.login').on('submit', function(e) {
//            e.preventDefault();
//            if (working) return;
//            working = true;
//            var $this = $(this),
//                $state = $this.find('button > .state');
//            $this.addClass('loading');
//            $state.html('Authenticating');
//            setTimeout(function() {
//                $this.addClass('ok');
//                $state.html('Welcome back!');
//                setTimeout(function() {
//                    $state.html('Log in');
//                    $this.removeClass('ok loading');
//                    working = false;
//                }, 4000);
//            }, 3000);
//        });
        $('.log_me_in').click(function(){
            $('.log_me_in').html('Stand by...');
            $('.login').submit();
        });
    });
</script>