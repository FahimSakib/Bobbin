    <!-- Plugins JS File -->
    <script src="asset/frontend/assets/js/jquery.min.js"></script>
    <script src="asset/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="asset/frontend/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="asset/frontend/assets/js/jquery.waypoints.min.js"></script>
    <script src="asset/frontend/assets/js/superfish.min.js"></script>
    <script src="asset/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="asset/frontend/assets/js/bootstrap-input-spinner.js"></script>
    <script src="asset/frontend/assets/js/jquery.plugin.min.js"></script>
    <script src="asset/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/frontend/assets/js/jquery.countdown.min.js"></script>
    <script src="asset/frontend/assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="asset/frontend/assets/js/main.js"></script>
    <script src="asset/frontend/assets/js/demos/demo-9.js"></script>
    <script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(2025, 12, 20), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>