<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <style type="text/css">
        .hidden{
            display: none;
        }
    </style>
    <a href="{{route('xlsx.upload')}}">Back to uploader</a>
        <table style="margin:15px 0" class="table table-striped">
            <thead>
                <th>
                    IDPERSON <br>
                    <input type="text" wire:model='IDPERSON' class="form-control">
                </th>
                <th>
                    LASTNAME<br>
                    <input type="text" wire:model="LASTNAME" class="form-control">
                </th>
                <th>FIRSTNAME
                    <br>
                    <input type="text" wire:model="FIRSTNAME" class="form-control">
                </th>
                <th>EXPIRY_RANGE
                    <br>
                    <input type="text" wire:model="EXPIRY" class="form-control">
                </th>
                <th></th>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->IDPERSON}}</td>
                        <td>{{$row->LASTNAME}}</td>
                        <td>{{$row->FIRSTNAME}}</td>
                        <td>{{$row->EXPIRY_RANGE}}</td>
                        <td><a href="{{route('pdf', 1)}}" target="blank">GENERATE PDF</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{$data->links()}}
</div>
