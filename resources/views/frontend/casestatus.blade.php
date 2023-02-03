@extends('frontend.layout.master')
@section('content')
  <!-- Categories section-->
  <section class="pb-5 pt-5">
    <div class="container pb-5">
        <form action="{{ route('casestatus') }}" method="GET">
        @csrf
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="search_" name="search_" placeholder="Search by Code">
              </div>
              <div class="col">
                <button type="submit" class="btn" name="Search">{{ __('Search') }}</button>
              </div>
            </div>
          </form>

          <div>
            @foreach ($data as $item )
            @if ($item->complain_no == $searchtext)
              <div class="card mt-5">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless table-sm">

                            <tr>
                                <td><span class="font-weight-bold">{{ __('Name:') }} </span></td>
                                <td><span>{{ $item->name}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Father Name:') }} </span></td>
                                <td><span>{{ $item->father_name}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Phone No:') }} </span></td>
                                <td><span>{{ $item->phone_no}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Email:') }} </span></td>
                                <td><span>{{ $item->email}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Address:') }} </span></td>
                                <td><span>{{ $item->division->bn_name}}, {{ $item->district->bn_name}}, {{ $item->upazila->bn_name}}</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Complain No:') }} </span></td>
                                <td><span>{{ $item->complain_no}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Complain Date:') }} </span></td>
                                <td><span>{{ $item->created_at}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Status:') }} </span></td>
                                <td><span>{{ $item->status}}</span></td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold">{{ __('Police Station:') }} </span></td>
                                <td><span>{{ $item->policestation->name}}</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <p>{!! $item->description !!}</p>
                    </div>
                  </div>
                </div>
              </div>

            @endif
          @endforeach

          </div>
    </div>
  </section>
  <!-- Resources section-->
@endsection
