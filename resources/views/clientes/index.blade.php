@extends('layout.index')

@section('title', 'Dashboard')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Costos</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Costos</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="box-title">Listado de Clientes</h4>
                    </div>
                    <div class="col-6">
                        <div class="box-controls pull-right">
                            <div class="box-header-actions">
                                <a href="#" class="btn btn-sm btn-dark"  data-toggle="modal" data-target="#modalCrearCosto"><i class="fa fa-plus"></i> Agregar Cliente </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre </th>
                            <th class="text-center">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td style="vertical-align:middle;">Costo 1</td>
                            <td>
                                <span class="badge badge-success">Activo</span>
                            </td>
                            <td style="vertical-align:middle;">
                                <button class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modalEditCosto"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <td style="vertical-align:middle;">Costo 2</td>
                        <td>
                            <span class="badge badge-success">Activo</span>
                        </td>
                        <td style="vertical-align:middle;">
                            <button class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modalEditCosto"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                        </tr>
                        <td style="vertical-align:middle;">Costo 3</td>
                        <td>
                            <span class="badge badge-success">Activo</span>
                        </td>
                        <td style="vertical-align:middle;">
                            <button class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modalEditCosto"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                {{-- Pagination --}}
            </div>
        </div>
    </section>
</div>
@endsection

@section('modals')
<div class="modal fade" id="modalCrearCosto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Crear costo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nombre *</label>
                    <input class="form-control" type="text" name="Nombre" id="" placeholder="Nombre" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-dark">Crear</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEditCosto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar costo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nombre *</label>
                    <input class="form-control" type="text" name="identificacion" id="" placeholder="Nombre" required value="Costo 1">
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <select class="form-control" name="tipo_identificacion_vp" required>
                        <option value="" selected >Activo</option>
                        <option value="">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-dark">Crear</button>
            </div>
        </div>
    </div>
</div>
@endsection