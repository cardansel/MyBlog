<x-app-layout>
    <!--Creo una seccion para poner la imagen como background-->
    <section class="bg-cover" style="background-image: url(https://images.pexels.com/photos/574069/pexels-photo-574069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)">
        <div class="container py-36">
            <!--creo un div para encerrar y mostrar los textos de la cabecera para distintos device-->
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">CARDANSEL </h1>
                <p class="text-white text-lg text-2 mb-4">En cardansel encontrarás proyectos, diseños, y estaremos contentos de poder ayudarte en tu emprendimiento que te ayudarán a convertirte en un profesional de la mu&uacuote;ca</p>

               
            </div>
            <!--cfin del div para encerrar y mostrar los textos de la cabecera para distintos device-->
        </div>

        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
            <h3 class="text-white font-bold text-4xl">Para contacternos puede realizarlo llenando el fomulario de Contacto</h3>
        </div>           

    </section>
    <!--fin de la seccion para poner la imagen como background-->

    <div class="grid grid-cols-2 gap-4">
        <div class="flex items-center">
            <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
                <div class="card">
                    <div class="card-body">
                       <fieldset>
                            <legend><i class="fas fa-address-book"></i> Contactarnos</legend>
                            <p class="h3"><i class="fad fa-street-view"></i> Donde estamos?</p>
                            <p class="text-xl text-gray-400 font-bold">
                                Ushuaia Tierra del Fuego
                                C.P.(9410) - Argentina
                            </p>

                            <p class="h3"><i class="fas fa-user-headset"></i> Telefonicamente?</p>
                            <p class="text-xl text-gray-400 font-bold">
                              <i class=""></i>  +5492901489861 <br/>
                                Horario de 09:00 am a 18:00 pm
                            </p>
                       </fieldset>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">

                <div class="card">
                    <div class="card-body ">
                        {!! Form::open(['route'=>'emails.store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre',['class' => 'text-gray-400 font-bold']) !!} <br>
                            {!! Form::text('name', null, ['class'=>'form-input','size'=>'50']) !!}
                            <br />
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('correo', 'Correo Electronico',['class' => 'text-gray-400 font-bold']) !!} <br>
                            {!! Form::text('correo', null, ['class'=>'form-input','size'=>'50']) !!}
                            <br />
                            @error('correo')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                            <br />
                            <div class="form-group">
                                {!! Form::hidden('fecha', \Carbon\Carbon::now()) !!}
                            @error('fecha')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            </div>
                            <br />
                            <div class="form-group">
                        
                                {!! Form::label('seccion', 'Seleccione una opcion',['class' => 'text-gray-400 font-bold']) !!} <br>
                                {!! Form::select('seccion',
                                [   'Sobre el Sistema'=>['Dise&ntilde;o del Sitio'=>'Area Programacion'],
                                    'Sobre el Blog'=>['Noticias del Blog'=>'Area de Informacion']
                                ],['class'=>'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) !!}
                            </div>
                            
                        <br />
                        <div class="form-group">
                            {!! Form::label('mensaje', 'Ingrese el Mensaje',['class' => 'text-gray-400 font-bold']) !!} <br>
                            {!! Form::textarea('mensaje', null, ['class'=>'form-input','cols'=>'50','rows'=>'5']) !!}
                            <br />
                            @error('mensaje')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <br />
                        <div class="form-group">
                        <label class ="text-gray-400 font-bold" for="captcha">Captcha</label>
                            {!! htmlFormSnippet([
                                                "theme" => "light",
                                                "size" => "normal",
                                                "tabindex" => "3",
                                                "callback" => "callbackFunction",
                                                "expired-callback" => "expiredCallbackFunction",
                                                "error-callback" => "errorCallbackFunction",
                                            ]) !!}
                                            <br />
                            @error('g-recaptcha-response')
                            <div class="text-red-500 mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <br />
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                {!! Form::submit('Enviar', ['class'=>'mr-5 bg-gray-200 hover:bg-blue-700 hover:text-white border border-gray-400 text-blue-700 font-bold py-2 px-6 rounded-lg']) !!} 
                            </div>
                    </div>

                    
                    {!! Form::close() !!}
            </div>
        </div>
</div>
        </div>
    
    </div>
@if(session('info'))
    <script>
        alert("{{ session('info') }}");
    </script>
@endif


</x-app-layout>