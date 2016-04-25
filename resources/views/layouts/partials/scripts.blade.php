<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- Pusher 3.0 -->
<script src="https://js.pusher.com/3.0/pusher.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

@yield('custom_scripts', '')

<script>
    var notifyUser = function (data) {
        var shoutout = data.shoutout;

        if (! ('Notification' in window)) {
            alert('Web Notification is not supported');

            return;
        }

        Notification.requestPermission(function(permission){
            var notification = new Notification('@'+ data.handle +' said:', {
                body: data.content,
                icon: document.getElementById('site_image').content
            });
        });

        var loadPusher = function (){
            Pusher.log = function(message) {
                if (window.console && window.console.log) {
                    window.console.log(message);
                }
            };

            var pusher = new Pusher(document.getElementById('pusher_key').content);
            var channel = pusher.subscribe('shoutout-added');

            channel.bind('App\\Events\\ShoutoutAdded', notifyUser);


        };
    }
</script>