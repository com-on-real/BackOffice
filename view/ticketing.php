<?php

$title = 'Ticket';
$description = 'system bien chiant pour les sysadmin';


ob_start();
?>

<div class="row">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ajouter un ticket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="ticket_subject">Sujet</label>
                        <input type="text" class="form-control" id="ticket_subject" placeholder="Sujet">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="10" placeholder="Enter ..."
                            style="resize: none"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="btnprio">Priorité</label>
                                <button type="button" class="btn btn-block btn-success btn-sm">normal</button>
                                <button type="button" class="btn btn-block btn-warning btn-sm">Haute</button>
                                <button type="button" class="btn btn-block btn-danger btn-sm">Urgent</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Type de service
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Compte</a>
                                    <a class="dropdown-item" href="#">hebergement web</a>
                                    <a class="dropdown-item" href="#">VPS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="LogsFile">Capture d'écran(s)</label>
                                        <input type="file" id="LogsFile">
                                        <p class="help-block">non requis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
    <div class="row">
        <div class="col-md-3">

            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Nombre de ticket</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Nombre de ticket résolus</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Nombre de ticket ouvert/non résolus</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
</div>
<!-- /.box -->

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des tickets</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Action</th>
                        <th>Utilisateur</th>
                        <th>N° Ticket</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Avencement</th>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal"
                                data-target="#modal-default">View</button>
                            <button type="button" class="btn btn-block btn-info btn-xs" data-toggle="modal"
                                data-target="#modal-success">Se l'assigner</button></td>
                        <td>John Doe</td>
                        <td>cor_001</td>
                        <td><span class="label label-success">résolus</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" style="width: 0%"></div>
                            </div>
                            <span class="badge bg-blue">0%</span>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal"
                                data-target="#modal-default">View</button>
                            <button type="button" class="btn btn-block btn-info btn-xs" data-toggle="modal"
                                data-target="#modal-success">Se l'assigner</button></td>
                        <td>Alexander Pierce</td>
                        <td>mfd_001</td>
                        <td><span class="label label-warning">en cours</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                            <span class="badge bg-blue">25%</span>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal"
                                data-target="#modal-default">View</button>
                            <button type="button" class="btn btn-block btn-info btn-xs" data-toggle="modal"
                                data-target="#modal-success">Se l'assigner</button> </td>
                        <td>Bob Doe</td>
                        <td>FH-001</td>
                        <td><span class="label label-primary">en attente</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" style="width: 55%"></div>
                            </div>
                            <span class="badge bg-blue">55%</span>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal"
                                data-target="#modal-default">View</button>
                            <button type="button" class="btn btn-block btn-info btn-xs" data-toggle="modal"
                                data-target="#modal-success">Se l'assigner</button> </td>
                        <td>Mike Doe</td>
                        <td>staff-001</td>
                        <td><span class="label label-danger">non Assigner</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                            </div>
                            <span class="badge bg-green">100%</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
</div>
<div class="modal fade" id="modal-default" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Répondre/modifier</h4>
            </div>
            <div class="modal-body">
                <p>
                    <div class="input-group margin">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">Attribuer a
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">yoan</a></li>
                                <li><a href="#">Florian</a></li>
                                <li><a href="#">etc</a></li>
                            </ul>
                            <!-- /btn-group -->
                        </div>
                        <div class="form-group">
                            <label>répondre</label>
                            <textarea class="form-control" rows="10" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="btnprio">Changer la Priorité</label>
                            <button type="button" class="btn btn-block btn-success btn-sm">normal</button>
                            <button type="button" class="btn btn-block btn-warning btn-sm">Haute</button>
                            <button type="button" class="btn btn-block btn-danger btn-sm">Urgent</button>
                        </div>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- Modal pour dire que tu t'es bien assigné le ticket -->
<div class="modal fade" id="modal-success" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Le ticket n° vous a bien ete assigner!</h4>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

<?php

$content = ob_get_clean();