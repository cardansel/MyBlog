<div class="form-group">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del Post']) !!}

                    @error('name')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del Post','readonly']) !!}

                @error('slug')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
                
            </div>

           <div class="form-group">
                {!! Form::label('category_id','Seleccione la Categoria') !!}
                {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}
            
                @error('category_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

            </div>

             <div class="form-group">
                <p class="font-weight-bold">Etiquetas</p>

                @foreach ($tags as $tag)
                    
                    <label class="mr-2">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>

                @endforeach
                
                @error('tags')
                <br>
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

            </div>

          <div class="card">
              <div class="card-body">
                <div class="form-group">
                    <p class="font-weight-bold">Seleccione el Estado de la Publicacion</p>
    
                        <label class="mr-2">
                            {!! Form::radio('status', 1, true) !!}
                            Borrador
                        </label>
    
                        <label class="mr-2">
                            {!! Form::radio('status', 2) !!}
                            Publicado
                        </label>
                    
                    @error('status')
                    <br>
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
              </div>
          </div>

          <div class="row mb-3">
              <div class="col">
                  <div class="image-wrapper">
                         @isset ($post->image)
                            <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
                        @else
                            <img id="picture" src="https://cdn.pixabay.com/photo/2015/08/13/01/00/keyboard-886462__340.jpg" alt="">
                        @endisset
                  </div>
              </div>
              <div class="col">
                  <div class="form-group">
                      {!! Form::label('file','Imagen que se mostrara en el post') !!}
                      {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
                  </div>

                    @error('file')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa explicabo totam 
                        deserunt accusantium ratione optio, assumenda nulla velit doloremque doloribus 
                        omnis, quia expedita. Earum corporis sit quam explicabo obcaecati consequuntur.
                    </p>
              </div>
          </div>

            <div class="form-group">
                {!! Form::label('extract','Extracto') !!}
                {!! Form::textarea('extract',null, ['class'=>'form-control']) !!}

                @error('extract')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('body','Campo del Post') !!}
                {!! Form::textarea('body',null, ['class'=>'form-control']) !!}

                @error('body')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>