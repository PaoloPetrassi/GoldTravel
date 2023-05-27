<div>
            <form class="shadow p-5 bg-custom color-steelBlue formLavora" wire:submit.prevent="store">
            @csrf
        <div class="div-custom rounded">
        </div>

        <div class="insert-article-custom">
            
            <img class="img-form-custom" src="/media/AnnuncioDefinitivo.png" alt="">
        </div>

        
        <div class="">
            <label for="category" class="form-label">Seleziona la tua regione</label>
        <select id="category" class="form-select  @error('category') is-invalid @enderror" wire:model.defer="category"  aria-label="Default select example">
            <option value="">Scegli la regione</option>
            @foreach ($categories as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>
                
            @endforeach
            
        </select>
            @error('category') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="name" class="pb-1">Città:</label>
            <input type="text" type="hidden" id="name" wire:model="query" autocomplete="off" class="form-control @error('name') is-invalid @enderror" @focus="suggestionsOpen = true" @blur="suggestionsOpen = false ">
            @if (!empty($suggestions))
                <ul class="ulCittaCustom">
                @foreach ($suggestions as $suggestion)
                <li class="cittaCustom bold" wire:click="selectCity('{{ $suggestion }}')">{{ $suggestion }}</li>
                @endforeach
                </ul>
            @endif
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo per notte</label>
            <input type="float" wire:model.lazy="price" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.lazy="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" wire:model.lazy="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        

        {{-- @if ($image)
            <p class="text-white">Antrepima immagine:</p>
            <div class="mt-3">
                <img src="{{ $image->temporaryUrl() }}">
            </div>
        @endif--}}


            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                           <label for="bEb" class="form-label text-white">B&B</label>
                           <input type="checkbox" id="bEb">
                           @error('bEb') <span class="error">{{ $message }}</span> @enderror
                       </div>
               
                       <div class="mb-3">
                           <label for="pranzo" class="form-label text-white">Mezza pensione</label>
                           <input type="checkbox" id="pranzo">
                           @error('pranzo') <span class="error">{{ $message }}</span> @enderror
                       </div>
               
               
                       <div class="mb-3">
                           <label for="parcheggio" class="form-label text-white">parcheggio</label>
                           <input type="checkbox" id="parcheggio">
                           @error('parcheggio') <span class="error">{{ $message }}</span> @enderror
                       </div>
               
                       <div class="mb-3">
                           <label for="wifi" class="form-label text-white">wi-fi</label>
                           <input type="checkbox" id="wifi">
                           @error('wifi') <span class="error">{{ $message }}</span> @enderror
                       </div>

                    </div>           
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="smoking" class="form-label text-white">Area fumatori</label>
                            <input type="checkbox" id="smoking">
                            @error('smoking') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pulizia" class="form-label text-white">Pulizia della stanza</label>
                            <input type="checkbox" id="pulizia">
                            @error('pulizia') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="animali" class="form-label text-white">Animali ammessi</label>
                            <input type="checkbox" id="animali">
                            @error('animali') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="cancellazione" class="form-label text-white">Cancellazione Gratuita</label>
                            <input type="checkbox" id="cancellazione">
                            @error('cancellazione') <span class="error">{{ $message }}</span> @enderror
                        </div>       
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="pagamento" class="form-label text-white">Pagamento Anticipato</label>
                            <input type="checkbox" id="pagamento">
                            @error('pagamento') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="servizio" class="form-label text-white">Servizio in camera</label>
                            <input type="checkbox" id="servizio">
                            @error('servizio') <span class="error">{{ $message }}</span> @enderror
                        </div> 

                    </div>
                </div>
            </div>

        
        
        
      
        <button class="btn btn-dark">Pubblica Annuncio</button>


        
        @if (session()->has('articleCreated'))
            <div class="alert snippet alert-success my-4 p-2">
                {{ session('articleCreated') }}
            </div>
        @endif
      </form>
    </div>

