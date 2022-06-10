@extends('layout.dashboard')
@section('main')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jasa</h4>
                        <a href="AddJasa.html"><button type="button" class="btn"
                                style="color: #BA181B; margin-left: 85%; margin-bottom: 50px; background:rgba(186, 24, 27, 0.12); ">+
                                Tambah Jasa</button></a>
                        <div class="d-flex">
                            <table class="table table-borderless">
                                <tbody>
                                    @for ($i = 1; $i < 4; $i++)
                                        <tr>
                                            <th></th>
                                            <th width="800px"></th>
                                            <th width="100px"></th>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assetsmhs/images/dashboard/image 50.png') }}"
                                                    style=" width:200px; height: auto; padding-bottom: 50px;"></td>
                                            <td><a><b>Deskripsi Detail Jasa 1</b></a><br />Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus
                                                duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis
                                                egestas. </td>
                                            <td><a href="#" style="margin-right: 10px;">
                                                    <span style="color: green;">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </span>
                                                </a><a href="#">
                                                    <span style="color: red;">
                                                        <i class="fas fa-trash-can"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
