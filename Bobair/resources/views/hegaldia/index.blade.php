@foreach($hegaldiak as $hegaldia)
      <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                <a href="">{{ $hegaldia->id }}</a>&nbsp
                    {{ $hegaldia->irt }}&nbsp
                   {{ $hegaldia->hel }} 
                   {{ $hegaldia->ira }} 

                </div>

            </div>
      @endforeach