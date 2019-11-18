<!-- view panier -->
<!-- Header -->
@extends ('layouts.layout')

@section('contenu')

    {{Session::put('total', 0)}}
    {{Session::put('increment', 0)}}
    <br>

    <!--
     Allows to know the information of its basket,
     and to have possibilities of removal of object
     or payment of items of the shop or events
     -->

    <div class="container" align="center">

        <h4><p>Panier</p></h4>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col">Quantité</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            @foreach($basket as $basketProduct)
                {{Session::put('increment', Session::get('increment')+1)}}
                <tbody>
                <tr>
                    <th scope="row">{{Session::get('increment')}}</th>
                    <td>{{$basketProduct->produit->Nom}}</td>
                    <td>{{$basketProduct->Quantite}}</td>
                    <td>
                        <form method="POST" action="/deleteBasket">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger" name="idProduct" value={{$basketProduct->id_PRODUIT}} >X</button>
                        </form>
                    </td>
                    <td>{{$basketProduct->Quantite * $basketProduct->produit->Prix}} €</td>
                </tr>
                {{--                </tr>--}}
                </tbody>
                {{Session::put('total', Session::get('total') + ($basketProduct->Quantite * $basketProduct->produit->Prix))}}
            @endforeach
        </table>
        <hr class="hr_panier">

        <div style="display: flex; justify-content: flex-end">
            <div class="inline">
                <p class="text-uppercase"><b>Total:</b> {{Session::get('total')}} €</p>
            </div>


        </div>

        <div class="mb-5">
            <small class="text-muted">
                <button type="button" class="btn btn-outline-primary">Commander</button>
            </small>

        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
