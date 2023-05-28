<x-layout header="Registrati">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <form method="POST" action="{{route('register')}}" class="shadow p-5">

                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    {{-- <li>Dati inseriti non validi</li> --}}
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                      <label for="email" class="form-label">Indirizzo email <span class="text-danger text-small">*</span></label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente <span class="text-danger text-small">*</span></label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password <span class="text-danger text-small">*</span></label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password <span class="text-danger text-small">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="remember" name="remember">
                      <label class="form-check-label" for="remember">Ricordami</label>
                    </div>

                    <button type="submit" class="btn btn-secondary">Registrati</button><br>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('login')}}">Sei già registrato?</a>
                    </div>


                  </form>
            </div>
        </div>
    </div>

</x-layout>