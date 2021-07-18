<style>
    .hidden{
        display:none;
    }
</style>
<div style="display:flex;align-items:center;justify-content:center;">
    <div>
        <a href="{{route('xlsx.upload')}}">Back to uploader</a>
        <table style="margin:15px 0">
            <thead>
                <th>IDPERSON</th>
                <th>LASTNAME</th>
                <th>FIRSTNAME</th>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->IDPERSON}}</td>
                        <td>{{$row->LASTNAME}}</td>
                        <td>{{$row->FIRSTNAME}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$data->links()}}
    </div>

</div>