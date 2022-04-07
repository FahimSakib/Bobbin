<div class="soon">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="soon-content text-center">
                    <div class="soon-content-wrapper">
                        <img src="{{asset('asset/frontend/assets/logo/Bobbin_logo_only_gold.png')}}" alt="Logo" class="soon-logo mx-auto" style="width:120px">
                        <h1 class="soon-title">Coming Soon</h1><!-- End .soon-title -->
                        <div class="coming-countdown countdown-separator"></div><!-- End .coming-countdown -->
                        <hr class="mt-2 mb-3 mt-md-3">
                        <p>We are currently working on an awesome new site. Stay tuned for more information.
                            Subscribe to our newsletter to stay updated on our progress.</p>
                    </div><!-- End .soon-content-wrapper -->
                </div><!-- End .soon-content -->
            </div><!-- End .col-md-9 col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .soon -->
@push('scripts')
<script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(2022, 7, 20), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>
@endpush