  <!-- Sign in / Register Modal -->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="icon-close"></i></span>
                  </button>
                  <div class="form-box">
                      <div class="form-tab">
                          <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                                      aria-controls="signin" aria-selected="true">Sign In</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                      aria-controls="register" aria-selected="false">Register</a>
                              </li>
                          </ul>
                          <div class="tab-content" id="tab-content-5">
                              <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                  aria-labelledby="signin-tab">
                                  <form method="POST" action="{{ route('login') }}">
                                      @csrf
                                      <div class="form-group">
                                          <label for="email" value="{{ __('Email') }}">Email address *</label>
                                          <input type="text" class="form-control" id="email" type="email" name="email"
                                              :value="old('email')" required autofocus>
                                      </div><!-- End .form-group -->

                                      <div class="form-group">
                                          <label for="password" value="{{ __('Password') }}">Password *</label>
                                          <input type="password" id="password" class="form-control" name="password"
                                              required autocomplete="current-password">
                                      </div><!-- End .form-group -->
                                      <div class="form-footer">

                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="signin-remember"
                                                  name="remember">
                                              <label class="custom-control-label"
                                                  for="signin-remember">{{ __('Remember me') }}</label>
                                          </div><!-- End .custom-checkbox -->

                                          @if (Route::has('password.request'))
                                          <a class=" forgot-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot your password?') }}
                                          </a>
                                          @endif
                                          <button type="submit" class="btn btn-outline-primary-2">
                                              <span> {{ __('Log in') }}</span>
                                              <i class="icon-long-arrow-right"></i>
                                          </button>
                                      </div><!-- End .form-footer -->
                                  </form>
                              </div><!-- .End .tab-pane -->
                              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                  <form method="POST" action="{{ route('register') }}">
                                      @csrf
                                      {{-- FOR NAME --}}
                                      <div class="form-group">
                                          <label for="register-name" value="{{ __('Name') }}">Your Name *</label>
                                          <input type="text" class="form-control" id="ragister-name" name="name"
                                              :value="old('name')" required autofocus autocomplete="name">
                                      </div><!-- End .form-group -->
                                      {{-- FOR Email --}}
                                      <div class="form-group">
                                          <label for="email" value="{{ __('Email') }}">Your Email *</label>
                                          <input type="email" class="form-control" id="ragister-email" name="email"
                                              :value="old('email')" required>
                                      </div><!-- End .form-group -->
                                      {{-- FOR Password --}}
                                      <div class="form-group">
                                          <label for="password" value="{{ __('Password') }}">Password *</label>
                                          <input type="password" class="form-control" id="register-password"
                                              type="password" name="password" required autocomplete="new-password">
                                      </div><!-- End .form-group -->
                                      {{-- FOR  Confirm Password --}}
                                      <div class="form-group">
                                          <label for="password_confirmation"
                                              value="{{ __('Confirm Password') }}">Confirm Password *</label>
                                          <input type="password" id="password_confirmation" class="form-control"
                                              type="password" name="password_confirmation" required
                                              autocomplete="new-password">
                                      </div><!-- End .form-group -->
                                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                      <div class="mt-4">
                                          <x-jet-label for="terms">
                                              <div class="flex items-center">
                                                  <x-jet-checkbox name="terms" id="terms" />
                                                  <div class="ml-2">
                                                      {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                      'terms_of_service' => '<a target="_blank"
                                                          href="'.route('terms.show').'"
                                                          class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                                          of Service').'</a>',
                                                      'privacy_policy' => '<a target="_blank"
                                                          href="'.route('policy.show').'"
                                                          class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                          Policy').'</a>',
                                                      ]) !!}
                                                  </div>
                                              </div>
                                          </x-jet-label>
                                      </div>
                                      @endif
                                      <div class="form-footer">


                                          <a class="" href="{{ route('login') }}">
                                              {{ __('Already registered?') }}
                                          </a>
                                          <button type="submit" class="btn btn-outline-primary-2">
                                              <span> {{ __('Register') }}</span>
                                              <i class="icon-long-arrow-right"></i>
                                          </button>
                                      </div><!-- End .form-footer -->

                              </div>
                              </form>

                          </div><!-- .End .tab-pane -->
                      </div><!-- End .tab-content -->
                  </div><!-- End .form-tab -->
              </div><!-- End .form-box -->
          </div><!-- End .modal-body -->
      </div><!-- End .modal-content -->
  </div><!-- End .modal-dialog -->
  </div><!-- End .modal -->
