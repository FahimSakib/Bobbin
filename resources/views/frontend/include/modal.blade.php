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

                                      <div>
                                          <x-jet-label for="email" value="{{ __('Email') }}" />
                                          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                              :value="old('email')" required autofocus />
                                      </div>

                                      <div class="mt-4">
                                          <x-jet-label for="password" value="{{ __('Password') }}" />
                                          <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                              name="password" required autocomplete="current-password" />
                                      </div>

                                      <div class="block mt-4">
                                          <label for="remember_me" class="flex items-center">
                                              <x-jet-checkbox id="remember_me" name="remember" />
                                              <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                          </label>
                                      </div>

                                      <div class="flex items-center justify-end mt-4">
                                          @if (Route::has('password.request'))
                                          <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                              href="{{ route('password.request') }}">
                                              {{ __('Forgot your password?') }}
                                          </a>
                                          @endif

                                          <x-jet-button class="ml-4">
                                              {{ __('Log in') }}
                                          </x-jet-button>
                                      </div>
                                  </form>
                                  <div class="form-choice">
                                      <p class="text-center">or sign in with</p>
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <a href="#" class="btn btn-login btn-g">
                                                  <i class="icon-google"></i>
                                                  Login With Google
                                              </a>
                                          </div><!-- End .col-6 -->
                                          <div class="col-sm-6">
                                              <a href="#" class="btn btn-login btn-f">
                                                  <i class="icon-facebook-f"></i>
                                                  Login With Facebook
                                              </a>
                                          </div><!-- End .col-6 -->
                                      </div><!-- End .row -->
                                  </div><!-- End .form-choice -->
                              </div><!-- .End .tab-pane -->
                              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                  <form method="POST" action="{{ route('register') }}">
                                      @csrf

                                      <div>
                                          <x-jet-label for="name" value="{{ __('Name') }}" />
                                          <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required autofocus autocomplete="name" />
                                      </div>

                                      <div class="mt-4">
                                          <x-jet-label for="email" value="{{ __('Email') }}" />
                                          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                              :value="old('email')" required />
                                      </div>

                                      <div class="mt-4">
                                          <x-jet-label for="password" value="{{ __('Password') }}" />
                                          <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                              name="password" required autocomplete="new-password" />
                                      </div>

                                      <div class="mt-4">
                                          <x-jet-label for="password_confirmation"
                                              value="{{ __('Confirm Password') }}" />
                                          <x-jet-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password" name="password_confirmation" required
                                              autocomplete="new-password" />
                                      </div>

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

                                      <div class="flex items-center justify-end mt-4">
                                          <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                              href="{{ route('login') }}">
                                              {{ __('Already registered?') }}
                                          </a>

                                          <x-jet-button class="ml-4">
                                              {{ __('Register') }}
                                          </x-jet-button>
                                      </div>
                                  </form>
                                  <div class="form-choice">
                                      <p class="text-center">or sign in with</p>
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <a href="#" class="btn btn-login btn-g">
                                                  <i class="icon-google"></i>
                                                  Login With Google
                                              </a>
                                          </div><!-- End .col-6 -->
                                          <div class="col-sm-6">
                                              <a href="#" class="btn btn-login  btn-f">
                                                  <i class="icon-facebook-f"></i>
                                                  Login With Facebook
                                              </a>
                                          </div><!-- End .col-6 -->
                                      </div><!-- End .row -->
                                  </div><!-- End .form-choice -->
                              </div><!-- .End .tab-pane -->
                          </div><!-- End .tab-content -->
                      </div><!-- End .form-tab -->
                  </div><!-- End .form-box -->
              </div><!-- End .modal-body -->
          </div><!-- End .modal-content -->
      </div><!-- End .modal-dialog -->
  </div><!-- End .modal -->
