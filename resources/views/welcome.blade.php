    @extends('layouts.app')
    @section('styles')

@endsection
    @section('content')
        <div class="container-fluid" style="padding-left: 0%; padding-right:0%">
            <div class="data-container container-fluid">

                <div class="data">
                    <img id="img" src="{{asset('assets/img/aulario.png')}}"alt="Aulario">
                </div>
                <div class="data">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_vo3itchj.json"  background="transparent"  speed="1" loop  autoplay></lottie-player>
                </div>
            </div>
        <div class="container-fluid d-flex justify-content-evenly mt-5 mb-5" id="cardindex">
            <div class="card" style="width: 18rem;">
                <div class="container-img">
                    <img src="{{asset('assets/img/pedco.png')}}" class="card-img-top mt-4" alt="...">
                </div>


                <div class="card-body text-center">
                  <h5 class="card-title">PEDCO</h5>
                  <p class="card-text">Gestioná el material teórico de tus materias</p>
                  <a target="_blank" href="https://pedco.uncoma.edu.ar/" class="btn text-light" style="background-color:  #036">Entrar</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <div class="container-img">
                <img src="{{asset('assets/img/logo-faif.png')}}" class="card-img-top mt-2" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">FAI Web</h5>
                  <p class="card-text">Toda la información de la Facultad de Informática en un solo lugar, conocé el nuevo sitio</p>

                    <a  target="_blank" href="https://www.fi.uncoma.edu.ar/" class="btn text-light" style="background-color:  #036">Entrar</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <div class="container-img ">
                <img src="{{asset('assets/img/siubanner.png')}}" class="card-img-top mt-3" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">SIU-Guarani</h5>
                  <p class="card-text">SIU-Guaraní fue desarrollado para registrar las actividades de la gestión académica dentro de nuestra universidad.</p>
                  <a target="_blank" href="https://siufai.uncoma.edu.ar/informatica/"  class="btn text-light" style="background-color:  #036">Entrar</a>
                </div>
              </div>


        </div>





            <div class="container-fluid" id="ubi-facu">
                <h3 class="text-light">Ubicación de nuestra facultad</h3>
            </div>
            <div class="container">

            <iframe loading="lazy" width="100%" height="300px" frameborder="0" allowfullscreen=""
            src="//umap.openstreetmap.fr/en/map/facultad-de-informatica_773315?scaleControl=false&amp;miniMap=false&amp;scrollWheelZoom=false&amp;zoomControl=true&amp;allowEdit=false&amp;moreControl=true&amp;searchControl=null&amp;tilelayersControl=null&amp;embedControl=null&amp;datalayersControl=true&amp;onLoadPanel=undefined&amp;captionBar=false&amp;datalayers=2279883#17/-38.93964/-68.05390"></iframe>
            </div>
        </div>


    @endsection
    @section('scripts')
    <script type="text/javascript">
        window.CSRF_TOKEN = '{{ csrf_token() }}';
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript"
            language="javascript"></script>



@endsection
