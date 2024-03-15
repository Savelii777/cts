@extends('layouts.main_layout')
@section('content')
    @include('partials.header')
    <section id="person" style="display:flex; justify-content:center; align-items:center; flex-diraction: row; width: 100%;padding:0; padding-top:50px; padding-bottom:50px; background-color: #fff !important;">

    <div class="content" style="display:flex; justify-content:center; align-items:center;width:100%; overflow: hidden;">

<!-- Default box -->
<div class="card" style="width:83%">
<form style="max-width:100%; height:40px; margin: 20px; border:1px solid #6b7fe3; border-radius:5px" action="{{ str_replace('http', 'https', request()->fullUrl()) }}" method="GET">
    <input  type="text" name="keyword" placeholder="Введите ключевые слова" style="width:100%; font-size:23px">
    <button style="position:absolute;top:20px;right:20px;height:39px;border:1px solid #6b7fe3;border-radius:5px" type="submit">Поиск</button>
</form>
<p style="margin-left: 25px; margin-top: 10px; margin-bottom: 10px">По запросу "{{$keyword}}" найдено элементов {{$itemCount}}.</p>

    <div class="card-body p-0">

    <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">№</div>
      <div class="col col-2">Название</div>
      <div class="col col-1">Описание</div>
      <div class="col col-1">Цена</div>
      <div class="col col-1">Наличие</div>
      <div class="col col-1"></div>
    </li>
    @foreach ($items as $item)
                <li>
                    <div class="col col-1">
                        {{ $loop->iteration }}
                    </div>
                    <div class="col col-2">
                        {{ $item->name }}
                    </div>
                    <div class="col col-1">
                    <details>
    <summary style="display:flex; flex-direction:row">
      <div class="button-popup">
      </div>
      <div class="details-modal-overlay"></div>
      <summary style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->description }}</summary>
    </summary>
    <div class="details-modal">
      <div class="details-modal-content">
        <p>
        {{ $item->description }}
        </p>
      </div>
    </div>
  </details>
                    </div>

                    <div class="col col-1">
                    @if ($isDealer)
                        {{ $item->dealer }}
                    @else
                        {{ $item->retail_price }}
                    @endif
                    </div>

                    <div style=" color: {{ $item->availability == 'Нет' ? 'red' : ($item->availability == 'Есть' ? 'green' : '#b0c42f') }};" class="col col-1">
                    {{ $item->availability }}
                </div>

                    @if(Auth::check() && Auth::user()->hasRole('dealer'))
                        <div class="col col-1">
                            <form style="max-height: 30px; min-width: 100px; display:flex; flex-direction: row">
            <span class="input-number">
                <input id="amount{{$loop->iteration}}" ENGINE="text" name="count" value="1" class="form-control form-number">
                
            </span>
                                <a rel="nofollow" onClick="updateJsonData('amount{{$loop->iteration}}',{{ $item->dealer }},'{{ $item->name }}')" class="btn-default"><img src="../images/addToCart.svg" alt=""></a>
                            </form>
                        </div>
                    @else
                        <div class="col col-1">
                            <form style="max-height: 30px; min-width: 150px; display:flex; flex-direction: row">
            <span class="input-number">
                <input id="amount{{$loop->iteration}}" ENGINE="text" name="count" value="1" class="form-control form-number">
               
            </span>
                                <a rel="nofollow" onClick="updateJsonData('amount{{$loop->iteration}}',{{ $item->retail_price }},'{{ $item->name }}')" class="btn-default"><img src="../images/addToCart.svg" alt=""></a>
                            </form>
                        </div>
                    @endif
</li>
            @endforeach
  </ul>
<!-- 
        <table class="table table-striped projects table-page1">
            <thead >
            <tr>
                <th style="text-align: center; border:1px solid #6b7fe3">
                    #
                </th>
                <th style="text-align: center; border:1px solid #6b7fe3;min-width:650px">
                   Название
                </th>
                <th style="text-align: center; border:1px solid #6b7fe3; min-width:300px">
                   Описание
                </th>
                <th style="text-align: center; border:1px solid #6b7fe3; min-width:50px">
                    Цена
                </th>
                <th style="text-align: center; border:1px solid #6b7fe3">
                    Наличие
                </th>
                <th style="text-align: center; border:1px solid #6b7fe3; min-width:150px">

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
                <tr>
                    <td style=" border:1px solid #6b7fe3">
                        {{ $loop->iteration }}
                    </td>
                    <td style="min-width: 650px; border:1px solid #6b7fe3;">
                        {{ $item->name }}
                    </td>
                    <td style="min-width:200px; border: 1px solid #6b7fe3">
                    <details>
    <summary style="display:flex; flex-direction:row">
      <div class="button-popup">
      </div>
      <div class="details-modal-overlay"></div>
      <summary style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->description }}</summary>
    </summary>
    <div class="details-modal">
      <div class="details-modal-content">
        <p>
        {{ $item->description }}
        </p>
      </div>
    </div>
  </details>
                    </td>

                    <td style="min-width: 50px; max-width:100px; border:1px solid #6b7fe3">
                    @if ($isDealer)
                        {{ $item->dealer }}
                    @else
                        {{ $item->retail_price }}
                    @endif
                    </td>

                    <td style="min-width: 50px; max-width:100px; color: {{ $item->availability == 'Нет' ? 'red' : ($item->availability == 'Есть' ? 'green' : '#b0c42f') }};  border:1px solid #6b7fe3">
                    {{ $item->availability }}
                </td>

                    @if(Auth::check() && Auth::user()->hasRole('dealer'))
                        <td style="border: 1px solid #6b7fe3; min-width:150px">
                            <form style="max-height: 30px; min-width: 100px; display:flex; flex-direction: row">
            <span class="input-number">
                <input id="amount{{$loop->iteration}}" ENGINE="text" name="count" value="1" class="form-control form-number">
                
            </span>
                                <a rel="nofollow" onClick="updateJsonData('amount{{$loop->iteration}}',{{ $item->dealer }},'{{ $item->name }}')" class="btn-default"><img src="../images/addToCart.svg" alt=""></a>
                            </form>
                        </td>
                    @else
                        <td style="border: 1px solid #6b7fe3">
                            <form style="max-height: 30px; min-width: 150px; display:flex; flex-direction: row">
            <span class="input-number">
                <input id="amount{{$loop->iteration}}" ENGINE="text" name="count" value="1" class="form-control form-number">
               
            </span>
                                <a rel="nofollow" onClick="updateJsonData('amount{{$loop->iteration}}',{{ $item->retail_price }},'{{ $item->name }}')" class="btn-default"><img src="../images/addToCart.svg" alt=""></a>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table> -->
    </div>
</div>

</div>
<a href="{{ route('login') }}">
<div class="panel">

  <div class="col">
    <div class="pulse-base pulse-circle">
        <img class="cart-image" src="../images/cart.svg" alt="">
    </div>
  </div>
</div>
</a>
<div style="display:flex; position:fixed; border-radius:10px; top:135px; right:100px;background:#fff; width:400px; height:400px; flex-direction:column; z-index:-10; opacity:0">
<table class="table is-fullwidth shopping-cart" style="background:none; min-width:100%">

</table>
<div class="totals" style="display:block;">
    <div class="totals-item">
      <label>Итого</label>
      <div class="totals-value" id="cart-subtotal">￥0</div>
    </div>
  </div>

</div>

</div>


    </section>
    @include('partials.footer')
@endsection
