<x-layouts.auth>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Sign in</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{route('register.store')}}" method="POST">
                            @csrf

                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span>
                                    <input type="text" name="name" placeholder="Name" required> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span>
                                    <input type="text" name="email" placeholder="email" required> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" placeholder="Password" required>

                                    <button class="btn bg-white text-muted">
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                                    <button class="btn bg-white text-muted">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-block mt-3">Enter</button >
                            <div class="text-center pt-4 text-muted"> <a href="{{route('login')}}">Login</a> </div>
                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.auth>

